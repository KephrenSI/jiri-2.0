@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Modifier le profil de l'évènement {{$event->title}}</h2>
    <hr>
    <form action="{{ url('/events/update') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
        <div class="form-group">
            <label for="course_name">Nom du cours</label>
            <input type="text" class="form-control" name="course_name" id="course_name" value="{{$event->course_name}}">
        </div>
        <div class="form-group">
            <label for="academic_year">Année académique</label>
            <input type="text" class="form-control" name="academic_year" id="academic_year" value="{{$event->academic_year}}">
        </div>
        <div class="form-group">
            <label for="exam_session">Session d'examen</label>
            <input type="text" class="form-control" name="exam_session" id="exam_session" value="{{$event->exam_session}}">
        </div>

        <input type="hidden" name="id" value="{{ $event->id }}">

        <input class="btn btn-primary" type="submit" value="Modifier">
    </form>
@endsection