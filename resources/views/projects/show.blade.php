@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">{{$project->name}}</h2>
    <div>
        <p>{{$project->description}}</p>
    </div>
    <a href="{{ url('/projects/edit/'.$project->id) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ url('/projects/delete/'.$project->id) }}" method="post">
        {{ csrf_field() }}
        <input class="btn btn-danger" type="submit" value="Supprimer">
    </form>

    <a href="{{ url('/projects/index') }}" class="btn btn-default">
        Tous les voirs
    </a>
@endsection