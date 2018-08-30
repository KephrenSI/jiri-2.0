<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreStudent;
use App\Implementation;
use App\Meeting;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::orderBy('name', 'ASC')->get();
        return view('students/index', compact('students'));
    }

    public function show(Student $student)
    {
        $participations = $student->meetings()->select('event_id')->distinct('event_id')->get();
        return view('students/show', compact('student', 'participations'));
    }

    public function create()
    {
        return view('students/create');
    }

    public function store(StoreStudent $request)
    {
        Student::create(request()->all());
        return redirect('/students/index');
    }

    public function edit(Student $student)
    {
        return view('students/edit', compact('student'));
    }

    public function update(StoreStudent $request)
    {
        $student = Student::findOrFail(request('id'));
        $student->update([
            'name' => request('name'),
            'email' => request('email'),
        ]);

        return redirect('students/'.$student->id);
    }

    public function delete(Student $student)
    {
        $student->delete();
        return redirect('students/index');
    }

    public function restore()
    {
        Student::withTrashed()->restore();
        return redirect('students/index');
    }

    public function showImplementations(Request $request, Student $student, Meeting $meeting, Event $event, Implementation $implementation)
    {
        $user = Auth::user();

        $meeting = Meeting::where('user_id', $user->id)
            ->where('event_id', $event->id)
            ->where('student_id', $student->id)
            ->get()->first();

        $implementations = $student->implementations()
            ->with('project')
            ->get();


        return view('students/showImplementations', compact('student', 'implementations', 'performances', 'meeting', 'event'));
    }

    public function manage(Event $event, Implementation $implementation)
    {
        $studentAlls = Student::all();
        $students = $event->students()->get();

        $implementations = $event
            ->implementations()
            ->get();

        return view('students/manage', compact('event', 'students', 'studentAlls', 'implementations'));
    }
}
