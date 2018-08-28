<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreImplementation;
use App\Http\Requests\StoreImplementationLink;
use App\Http\Requests\StoreScore;
use App\Implementation;
use App\Meeting;
use App\Project;
use App\Score;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImplementationsController extends Controller
{
    public function getEvaluate(Request $request, Implementation $implementation, Score $score, Meeting $meeting)
    {
        $user = Auth::user();

        $project = $implementation->project()->get()->first();
        $student = $implementation->student()->get()->first();
        $event   = $implementation->event()->get()->first();

        $score = $score->where('meeting_id', $meeting->id)
            ->where('implementation_id', $implementation->id)
            ->get()->first();

        return view('implementations/evaluate', compact('implementation', 'project', 'student', 'score', 'meeting'));
    }

    public function postEvaluate( StoreScore $request, Implementation $implementation, Meeting $meeting, Event $event )
    {
        $user    = Auth::user();
        $student = $implementation->student()->get()->first();
        //$event   = $implementation->event()->get();
        $event   = $implementation->event()->get()->first();

        $score = Score::updateOrCreate(
            ['meeting_id' => $meeting->id, 'implementation_id' => $implementation->id],
            ['score' => request('score'), 'comment' => request('comment')]
        );

        return redirect('/students/'.$meeting->student->id.'/implementations/event/'.$meeting->event->id);
    }

    // link
    public function getLink(Event $event, Implementation $implementation, Meeting $meeting)
    {
        $students = $event->meetings()->get();
        $meetings = $event->meetings()->select('student_id')->distinct('student_id')->get();
        $projects = Project::all();


        $implementations = $implementation
            ->where('event_id', $event->id)
            ->get();

        return view('implementations/link', compact('event', 'users', 'implementations', 'students', 'meetings', 'projects'));
    }

    public function postLink(Event $event, StoreImplementationLink $request, Implementation $implementation)
    {
        $projects_ids = request('projects_ids');
        $students_ids = request('students_ids');

        $exploded_projects_ids = $projects_ids;
        $exploded_students_ids = $students_ids;



        foreach ($exploded_projects_ids as $exploded_projects_id)
        {
            foreach ($exploded_students_ids as $exploded_students_id) {
                $implementation = Implementation::updateOrCreate(
                    ['project_id' => $exploded_projects_id, 'student_id' => $exploded_students_id, 'event_id' => $event->id],
                    []
                );
            }
        }

        return redirect('/events/'.$event->id);
    }

    public function delete(Event $event, Request $request, Implementation $implementation)
    {
        //$project_id = request('user_id');
        $project_id = request('project_id');

        $implementation->where('event_id', $event->id)->where('project_id', $project_id)->delete();

        return redirect()->back();
    }

    public function restore(Event $event, Request $request, Implementation $implementation)
    {
        $implementation->where('event_id', $event->id)->withTrashed()->restore();

        return redirect()->back();
    }

    public function postUrl(StoreImplementation $request, Event $event, Implementation $implementation)
    {
        $implementation_id = $implementation->id;

        $implementation = Implementation::findOrFail($implementation_id);
        $implementation->update([
            'url_repo' => request('url_repo'),
            'url_project' => request('url_project'),
        ]);

        return redirect()->back();
    }
}