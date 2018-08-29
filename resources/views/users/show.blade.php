@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">{{$user->name}}</h2>
    <p><strong>Email</strong> : {{$user->email}}</p>
    <p><strong>Password</strong> : {{$user->password}}</p>
    <p>
        @if( $user->is_admin == 1)
            C'est utilisateur est un admin
        @else
            C'est utilisateur n'est pas un admin
        @endif
    </p>
    <p><strong>Agence</strong> : {{$user->company}}</p>
    <a href="{{ url('/users/edit/'.$user->id) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ url('/users/delete/'.$user->id) }}" method="post">
        {{ csrf_field() }}
        <input class="btn btn-danger" type="submit" value="Supprimer">
    </form>

    <div>
        <h3>
            Évènements auquels il participe
        </h3>
        @if($user->meetings->count())
            <ul>
            @foreach($participations as $participation)
                    <li class="card">
                        <h3 class="card-title">{{ $participation->event->course_name }}</h3>
                        <a href="{{ url('/events/'.$participation->event->id) }}" class="link">Voir</a>
                    </li>
            @endforeach
            </ul>
        @else
            Cet utilisateur ne participe pas encore à un évènement
        @endif
    </div>

    <a href="{{ url('/users/index') }}" class="btn btn-default">
        Tous les voir
    </a>
@endsection