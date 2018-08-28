@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Modifier le profil de {{$student->lastname}} {{$student->firstname}}</h2>
    <hr>
    <form action="{{ url('/students/update') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}">
        </div>

        <input type="hidden" name="id" value="{{ $student->id }}">

        <input class="btn btn-primary" type="submit" value="Modifier">
    </form>
@endsection