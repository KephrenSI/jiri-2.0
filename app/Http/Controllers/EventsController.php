<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvent;
use App\Event;
use App\Implementation;
use App\Meeting;
use App\Score;
use App\User;
use App\Project;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if($user->is_admin){
            $events = $user->events()->get();
        } else {
            $meetings = $user->meetings()
                ->select('event_id')->distinct('event_id')
                ->with('event')
                ->get();
            $events = $meetings->pluck('event');
        }


        return view('events/index', compact('user', 'events'));
    }

    public function show(Request $request, Event $event)
    {
        $request->session()->put('event', $event);

        $meetings = Auth::user()
            ->meetings()
            ->where('event_id', $event->id)
            ->with('student')->get();

        $implementations = $event->implementations()->select('project_id')->distinct('project_id')->get();
        $meetingTableaus = $event->meetings()->get();
        $scores = Score::all();

        return view("events/show", compact('event', 'meetings', 'meetingTableaus', 'implementations', 'scores'));
    }

    public function create()
    {
        return view('events/create');
    }

    public function store(StoreEvent $request)
    {
        Event::create(request()->all());

        $event = Event::all()->last();

        return redirect('/meetings/link/'.$event->id);
    }

    public function edit(Event $event)
    {
        return view('events/edit', compact('event'));
    }

    public function update(StoreEvent $request)
    {
        $event = Event::findOrFail(request('id'));
        $event->update([
            'course_name'=> request('course_name'),
            'academic_year'=> request('academic_year'),
            'exam_session'=> request('exam_session'),
            'user_id'=> Auth::user()->id,
        ]);

        return redirect('events/'.$event->id);
    }

    public function delete(Event $event)
    {
        $event->delete();
        return redirect('events/index');
    }

    public function restore()
    {
        Event::withTrashed()->restore();
        return redirect('events/index');
    }
}
