@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Liste des évènements') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="row">
                                    @if($user->meetings->count())
                                        @foreach($events as $event)
                                            <div class="col-md-4">
                                                <li class="card">
                                                    <div class="card-header teal lighten-2">
                                                        <h3 class="card-title white-text">{{$event->course_name}}</h3>
                                                        <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir l'évènement {{$event->course_name}}" href="{{ url('/events/'.$event->id) }}"><i class="material-icons">add</i></a>
                                                        {{--<a class='dropdown-trigger white-text' href='#' data-target='dropdown1'><i class="material-icons right">more_vert</i></a>--}}
                                                    </div>
                                                    <div class="card-content">
                                                        <p class="card-text"><strong>Année académique</strong> : {{$event->academic_year}}</p>
                                                        <p class="card-text"><strong>Session n°</strong>{{$event->exam_session}}</p>
                                                    </div>
                                                </li>
                                            </div>
                                            <br>
                                        @endforeach
                                    @else
                                        <p>Vous n'êtes pas encore associé à un évènement</p>
                                    @endif
                                </ul>
                                {{--<a href="{{ url('/events/restore') }}">restaurer</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection