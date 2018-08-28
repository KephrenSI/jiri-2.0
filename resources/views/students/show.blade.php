@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">{{$student->name}}</h2>
    <p><strong>Email</strong> : {{$student->email}}</p>
    <a href="{{ url('/students/edit/'.$student->id) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ url('/students/delete/'.$student->id) }}" method="post">
        {{ csrf_field() }}
        <input class="btn btn-danger" type="submit" value="Supprimer">
    </form>
    <div>
        <h3>
            Évènements auquels il participe
        </h3>
        @if($student->meetings->count())
            @foreach($participations as $participation)
                <ul class="blog-post-title">
                    <li class="">
                        <a href="{{ url('/events/'.$participation->event->id) }}">
                            {{ $participation->event->course_name }}
                        </a>
                    </li>
                </ul>
            @endforeach
        @else
            Cet étudiant ne participe pas encore à un évènement
        @endif
    </div>

    <a href="{{ url('/students/index') }}" class="btn btn-default">
        Tous les voir
    </a>
@endsection