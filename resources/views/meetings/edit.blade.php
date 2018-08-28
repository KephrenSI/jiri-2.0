@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Modifier le profil de {{$user->lastname}} {{$user->firstname}}</h2>
    <hr>
    <form action="{{ url('/users/update') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}">
        </div>
        <div class="form-group">
            <label for="is_admin">Cet personne est elle un administrateur?</label>

            <input type="hidden" name="is_admin" value="0">
            <input type="checkbox" class="form-control" name="is_admin" id="is_admin" value="1">
        </div>
        <div class="form-group">
            <label for="company">Agence</label>
            <input type="text" class="form-control" name="company" id="company" value="{{$user->company}}">
        </div>

        <input type="hidden" name="id" value="{{ $user->id }}">

        <input class="btn btn-primary" type="submit" value="Modifier">
    </form>
@endsection