@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Ajouter un nouvel évènement</h2>
    <hr>
    <form action="{{ url('/events/store') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
            <label for="course_name">Nom du cours</label>
            <input type="text" class="form-control" name="course_name" id="course_name" value="{{old('course_name')}}">
        </div>
        <div class="form-group">
            <label for="academic_year">Année académique</label>
            <input type="text" class="form-control" name="academic_year" id="academic_year" value="{{old('academic_year')}}">
        </div>
        <div class="form-group">
            <label for="exam_session">Session d'examen</label>

            <input type="text" class="form-control" name="exam_session" id="exam_session" value="{{old('exam_session')}}">
            <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
        </div>
        <input class="btn btn-primary" type="submit" value="Enregistrer">
    </form>

@endsection