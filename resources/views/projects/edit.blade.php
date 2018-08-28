@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Modifier le profil du projet {{$project->title}}</h2>
    <hr>
    <form action="{{ url('/projects/update') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$project->name}}">
        </div>
        <div class="form-group">
            <label for="description">Quelques mots</label>
            <textarea class="form-control" name="description" id="description">{{$project->description}}</textarea>
        </div>

        <input type="hidden" name="id" value="{{ $project->id }}">

        <input class="btn btn-primary" type="submit" value="Modifier">
    </form>
@endsection