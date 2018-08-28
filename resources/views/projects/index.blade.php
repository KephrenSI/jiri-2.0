@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Liste des projets</h2>
    <ul style="padding-bottom: 50px; display:flex; flex-wrap: wrap;">
    @foreach($projects as $project)
        <li class="card">
            <div class="card-block">
                <h3 class="card-title">{{$project->name}}</h3>
                <a href="{{ url('/projects/'.$project->id) }}" class="link"></a>
            </div>
        </li>
    @endforeach
    </ul>
    <a href="{{ url('/projects/restore') }}">restaurer</a>
@endsection