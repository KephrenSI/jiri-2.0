<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreMeetingLink;
use App\Implementation;
use App\Meeting;
use App\Performance;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MeetingsController extends Controller
{
    public function show(Meeting $meeting)
    {
        $student_id = "1";

        $meeting->load('user', 'student', 'event');
        $projects = DB::table('implementations')
            ->where('student_id', $student_id)
            ->join('projects', 'projects.id', '=', 'implementations.project_id')
            ->get();


        return view('meetings/show', compact('meeting', 'projects'));
    }

    public function postEvaluate( Request $request, Meeting $meeting )
    {
        $student = $meeting->student()->get()->first();
        $event = $meeting->event()->get()->first();
        $user = Auth::user();

        $meeting = Meeting::updateOrCreate(
            ['event_id' => $event->id, 'student_id' => $student->id, 'user_id' => $user->id],
            ['general_evaluation' => request('general_evaluation'), 'general_comment' => request('general_comment')]
        );

        return redirect('events/'.$event->id);

    }

    // link
    public function getLink(Event $event, Meeting $meeting)
    {
        $users = User::all();
        $students = Student::all();

        $meetings = $meeting
            ->where('event_id', $event->id)
            ->get();

        return view('meetings/link', compact('event', 'users', 'meetings', 'students'));
    }

    public function postLink(Event $event, StoreMeetingLink $request, Meeting $meeting)
    {
        $users_ids = request('users_ids');
        $students_ids = request('students_ids');

        $exploded_users_ids = $users_ids;
        $exploded_students_ids = $students_ids;

        foreach ($exploded_users_ids as $exploded_users_id)
        {
            foreach ($exploded_students_ids as $exploded_students_id) {

                $meeting = Meeting::updateOrCreate(
                    ['user_id' => $exploded_users_id, 'student_id' => $exploded_students_id, 'event_id' => $event->id],
                    []
                );
            }
        }

        return redirect('/implementations/link/'.$event->id);
    }

    public function delete(Event $event, Request $request, Meeting $meeting)
    {
        $user_id = request('user_id');

        $meeting->where('event_id', $event->id)->where('user_id', $user_id)->delete();

        return redirect()->back();
    }

    public function restore(Event $event, Request $request, Meeting $meeting)
    {

        $meeting->where('event_id', $event->id)->withTrashed()->restore();

        return redirect()->back();
    }
}
