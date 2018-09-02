<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreProject;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::orderBy('name', 'ASC')->get();
        return view('projects/index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects/show', compact('project'));
    }

    public function create()
    {
        return view('projects/create');
    }

    public function store(StoreProject $request)
    {
//        $v = Validator::make($request->all(), [
//            'name' => 'required||min:3|max:32',
//            'description' => 'required|max:120',
//        ]);
//
//        if ($v->fails())
//        {
//          return redirect()->back()->withErrors($v->errors());
//        }else{

//        Project::create(request()->all());
        return redirect('/projects/index');
//        }

    }

    public function edit(Project $project)
    {
        return view('projects/edit', compact('project'));
    }

    public function update(StoreProject $request)
    {
        $project = Project::findOrFail(request('id'));
        $project->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        return redirect('projects/'.$project->id);
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect('projects/index');
    }

    public function restore()
    {
        Project::withTrashed()->restore();
        return redirect('projects/index');
    }

    public function manage(Event $event)
    {
        $projects = Project::all();
        $implementations = $event->implementations()->select('project_id')->distinct('project_id')->get();

        return view('projects/manage', compact('event', 'projects', 'implementations'));
    }
}
