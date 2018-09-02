@extends('layouts.app')

@section('content')

    {{--<div id="index-student">--}}
        {{--<div class="container">--}}
            {{--<index-student></index-student>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('Liste des élèves') }}</h2>
                    </div>
                    <div class="card-body">
                        {{--<ul>--}}
                            {{--@foreach($students as $student)--}}
                                {{--<li class="card">--}}
                                    {{--<div class="card-block">--}}
                                        {{--<h3 class="card-title">{{$student->name}}</h3>--}}
                                        {{--<p class="card-text"><strong>Email</strong> : {{$student->email}}</p>--}}
                                        {{--<a href="{{ url('/students/'.$student->id) }}" class="link">Voir</a>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="row">
                                    @foreach($students as $student)
                                    <div class="col-md-4">
                                        <li class="card">
                                            <div class="card-header teal lighten-2">
                                                <h3 class="card-title white-text">{{$student->name}}</h3>
                                                <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir le profil de {{$student->name}}" href="{{ url('/students/'.$student->id) }}"><i class="material-icons">add</i></a>
                                                <a class='dropdown-trigger white-text' href='#' data-target='dropdown1'><i class="material-icons right">more_vert</i></a>
                                            </div>
                                            <div class="card-content">
                                                <p class="card-text"><strong>Email</strong> : {{$student->email}}</p>
                                            </div>
                                        </li>
                                    </div>
                                    <br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        {{--<a href="/students/restore">restaurer</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection