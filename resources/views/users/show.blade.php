@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{$user->name}}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Email</strong> : {{$user->email}}</p>
                        <p><strong>Agence</strong> : {{$user->company}}</p>
                        @if($user->is_admin)
                            <p class="card-text"><strong>Administrateur</strong> : oui</p>
                        @else
                            <p class="card-text"><strong>Administrateur</strong> : non</p>
                        @endif
                        <div class="text-right">
                            <a href="{{ url('/users/edit/'.$user->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('Modifier') }}</a>
                            <br>
                            <br>
                            <form action="{{ url('/users/delete/'.$user->id) }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger waves-effect waves-light">
                                    {{ __('Supprimer') }}
                                </button>

                            </form>
                        </div>
                        <div>
                            <div>
                                <h3>
                                    {{ __('Évènements auquels il participe') }}
                                </h3>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="row">
                                            @if($user->meetings->count())
                                                @foreach($participations as $participation)
                                                    <div class="col-md-4">
                                                        <li class="card">
                                                            <div class="card-header teal lighten-2">
                                                                <h3 class="card-title white-text">{{ $participation->event->course_name }}</h3>
                                                                <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir l'évènement {{ $participation->event->course_name }}" href="{{ url('/events/'.$participation->event->id) }}"><i class="material-icons">add</i></a>
                                                                <a class='dropdown-trigger white-text' href='#' data-target='dropdown1'><i class="material-icons right">more_vert</i></a>
                                                            </div>
                                                            <div class="card-content">
                                                                <p class="card-text"><strong>Année académique : </strong>{{ $participation->event->academic_year }}</p>
                                                                <p class="card-text"><strong>Session </strong>{{ $participation->event->exam_session}}</p>
                                                            </div>
                                                        </li>
                                                    </div>
                                                    <br>
                                                @endforeach
                                            @else
                                                Cet étudiant ne participe pas encore à un évènement
                                            @endif
                                        </ul>
                                        {{--<a href="{{ url('/events/restore') }}">restaurer</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{ url('/users/index') }}" class="btn btn-default waves-effect waves-light">
                        Voir tous les utilisateurs
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection