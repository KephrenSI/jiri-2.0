@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Ajouter un nouveau projet</h2>
    <hr>
    <form action="{{ url('/projects/store') }}" method="post">
        {{ csrf_field() }}
        @include('partials/errors')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="description">Quelques mots</label>
            <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Enregistrer">
    </form>

@endsection