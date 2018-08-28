@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Liste des membres du jury</h2>
    @foreach($users as $user)
        <ul class="blog-post">
            <li class=".list-group">
                <a href="{{ url('/users/'.$user->id) }}">
                    {{$user->name}}
                </a>
            </li>
        </ul>
    @endforeach
    <a href="{{ url('/users/restore') }}">restaurer</a>
@endsection