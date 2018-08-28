@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Meeting de {{$meeting->user->name}} avec {{$meeting->student->name}}</h2>

    <h2 class="blog-post-title">Projets de l'étudiant</h2>

    <h2 class="blog-post-title">Liste</h2>
    @foreach($projects as $project)
        <ul class="blog-post-title">
            <li>
                <a href="{{ url('/projects/'.$project->id) }}">
                    {{ $project->name }}
                </a>
            </li>
        </ul>
    @endforeach
@endsection