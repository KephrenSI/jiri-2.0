@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Liste des membres du jury</h2>
    <ul>
    @foreach($users as $user)
        <li class="card">
            <div class="card-block">
                <h3 class="card-title">{{$user->name}}</h3>
                <p class="card-text"><strong>Email</strong> : {{$user->email}}</p>
                <p class="card-text"><strong>Agence</strong> : {{$user->company}}</p>
                @if($user->is_admin)
                    <p class="card-text"><strong>Administrateur</strong> : oui</p>
                @else
                    <p class="card-text"><strong>Administrateur</strong> : non</p>
                @endif
                <a href="{{ url('/users/'.$user->id) }}" class="link"></a>
            </div>
        </li>
    @endforeach
    </ul>
    <a href="{{ url('/users/restore') }}">restaurer</a>
@endsection