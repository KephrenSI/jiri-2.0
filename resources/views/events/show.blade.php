@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{$event->course_name}}</h2>
                        @if(Auth::user()->is_admin)
                            <div class="row"  style="margin-left:50px; margin-top: 30px;">
                                <div>
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ route('/students/manage', $event) }}" style="">
                                        Gérer les étudiants
                                    </a>
                                </div>
                                <div style="margin-left: 5px;">
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ route('/users/manage', $event) }}" style="">
                                        Gérer les utilisateurs
                                    </a>
                                </div>
                                <div style="margin-left: 5px;">
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ route('/projects/manage', $event) }}" style="">
                                        Gérer les projets
                                    </a>
                                </div>
                                <div style="margin-left: 5px;">
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ route('/meetings/link', $event) }}" style="">
                                        Gérer les meetings
                                    </a>
                                </div>
                                <div style="margin-left: 5px;">
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ route('/implementations/link', $event) }}" style="">
                                        Gérer les implémentations
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div>
                            <div>
                                <p><strong>Année académique</strong> : {{$event->academic_year}}</p>
                                <p><strong>Session</strong> n°{{$event->exam_session}}</p>
                                <p><strong>Administré par</strong> : {{$event->owner->name}}</p>
                            </div>
                        </div>
                        @if(Auth::user()->is_admin)
                            <div class="text-right">
                                <a href="{{ url('/events/edit/'.$event->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('Modifier') }}</a>
                                <br>
                                <br>
                                <form action="{{ url('/events/delete/'.$event->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">
                                        {{ __('Supprimer') }}
                                    </button>
                                </form>
                            </div>
                        @endif

                        <div>
                            <div>
                                <h3>
                                    {{ __('Meetings') }}
                                </h3>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="row">
                                            @if($meetings->count())
                                                @foreach($meetings as $meeting)
                                                    <div class="col-md-4">
                                                        <li class="card">
                                                            <div class="card-header">
                                                                <h3 class="card-title">{{ $meeting->student->name }}</h3>
                                                                <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir les projets de {{ $meeting->student->name }}" href="{{ route('/students/implementations/event', [$meeting->student, $event->id]) }}"><i class="material-icons">add</i></a>
                                                                {{--<a class="link" href="{{ route('/students/implementations/event', [$meeting->student, $event->id]) }}">Coter</a>--}}
                                                            </div>
                                                        </li>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>Il n'y a pas de meetings associé à cet évènement</p>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{ url('/events/index') }}" class="btn btn-default waves-effect waves-light">
                        Voir tous les évènements
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection