@extends('layouts.app')

@section('content')
    @if(Auth::user()->is_admin)
        <div class="gestion float-right">
            <a href="{{ route('/students/manage', $event) }}" class="btn btn-default">
                Gérer les étudiants
            </a>

            <a href="{{ route('/users/manage', $event) }}" class="btn btn-default">
                Gérer les utilisateurs
            </a>

            <a href="{{ route('/projects/manage', $event) }}" class="btn btn-default">
                Gérer les projets
            </a>

            <a href="{{ route('/meetings/link', $event) }}" class="btn btn-default">
                Gérer les meetings
            </a>

            <a href="{{ route('/implementations/link', $event) }}" class="btn btn-default">
                Gérer les implémentations
            </a>
        </div>
    @endif
    <div>
        <h2 class="blog-post-title">{{$event->course_name}}</h2>
        <div>
            <p><strong>Année académique</strong> : {{$event->academic_year}}</p>
            <p><strong>Session</strong> n°{{$event->exam_session}}</p>
            <p><strong>Administré par</strong> : {{$event->owner->name}}</p>
        </div>
    </div>
    @if(Auth::user()->is_admin)
        <div class="subnav">
            <a href="{{ url('/events/edit/'.$event->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ url('/events/delete/'.$event->id) }}" method="post">
                {{ csrf_field() }}
                <input class="btn btn-danger" type="submit" value="Supprimer">
            </form>
        </div>
    @endif


    <div>
        <h2>
            Meetings
        </h2>

        <div class="col-md-12">
            @if($meetings->count())
            <ul>
                @foreach($meetings as $meeting)
                    <li class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{ $meeting->student->name }}</h3>
                            <a class="link" href="{{ route('/students/implementations/event', [$meeting->student, $event->id]) }}">Coter</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            @else
                <p>Il n'y a pas de meetings associé à cet évènement</p>
            @endif
        </div>

    </div>

    {{--<div>--}}
        {{--<h2>--}}
            {{--general evaluation : globale--}}
        {{--</h2>--}}
        {{--@if($meetings->count())--}}
        {{--<ul>--}}
            {{--@foreach( $event->students as $event->student )--}}
                {{--<li class="jumbotron">--}}
                    {{--{{ $event->student->name }}--}}
                    {{--- general evaluation :--}}
                    {{--@foreach( $meetingTableaus->where('student_id', $event->student->id) as $meetingTableau )--}}
                        {{--<p>--}}
                            {{--Cote :--}}
                            {{--{{ $cote[$meetingTableau->id] = $meetingTableau->general_evaluation }}--}}
                        {{--</p>--}}
                        {{--<p>--}}
                            {{--Commentaire :--}}
                            {{--{{ $cote[$meetingTableau->id] = $meetingTableau->general_comment }}--}}
                        {{--</p>--}}
                    {{--@endforeach--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        {{--@else--}}
            {{--<p>Il n'y a pas d'évaluation globale associées à cet évènement</p>--}}
        {{--@endif--}}
    {{--</div>--}}
@endsection