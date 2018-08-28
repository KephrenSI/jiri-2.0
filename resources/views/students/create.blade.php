@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Ajouter un nouvel étudiant</h2>
    <hr>
    <form action="{{ url('/students/store') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
        </div>
        <input class="btn btn-primary" type="submit" value="Enregistrer">
    </form>

@endsection