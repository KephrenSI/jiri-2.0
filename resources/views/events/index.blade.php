@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Liste des évènements</h2>
    <ul>
    @foreach($events as $event)
        <li class="card">
            <div class="card-block">
                <h3 class="card-title">{{$event->course_name}}</h3>
                <p class="card-text"><strong>Année académique</strong> : {{$event->academic_year}}</p>
                <p class="card-text"><strong>Session n°</strong>{{$event->exam_session}}</p>
                <a href="{{ url('/events/'.$event->id) }}" class="link"></a>
            </div>
        </li>
    @endforeach
    </ul>
    <a href="{{ url('/events/restore') }}">restaurer</a>
@endsection