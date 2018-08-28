<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreUser;
use App\Meeting;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::orderBy('name', 'ASC')->get();
        return view('users/index', compact('users'));
    }

    public function show(User $user)
    {
        $participations = $user->meetings()->select('event_id')->distinct('event_id')->get();
        $user->load('students', 'events', 'meetings');
        return view('users/show', compact('user','participations'));
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(StoreUser $request)
    {

        User::create([
            'name'=> request('name'),
            'email'=> request('email'),
            'password'=> bcrypt(request('password')),
            'is_admin'=> request('is_admin'),
            'company'=> request('company'),
        ]);

        return redirect('/users/index');
    }

    public function edit(User $user)
    {
        return view('users/edit', compact('user'));
    }

    public function update(StoreUser $request)
    {
        $user = User::findOrFail(request('id'));
        $user->update([
            'name'=> request('name'),
            'email'=> request('email'),
            'password'=> request('password'),
            'is_admin'=> request('is_admin'),
            'company'=> request('company'),
        ]);

        return redirect('users/'.$user->id);
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('users/index');
    }

    public function restore()
    {
        User::withTrashed()->restore();
        return redirect('users/index');
    }

    public function manage(Event $event)
    {
        $meetings = $event->meetings()->select('user_id')->distinct('user_id')->get();
        return view('users/manage', compact('event','meetings'));
    }
}
