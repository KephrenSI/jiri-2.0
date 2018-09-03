@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Liste des projets') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="row">
                                @foreach($projects as $project)
                                    <div class="col-md-4">
                                        <li class="card">
                                            <div class="card-header teal lighten-2">
                                                <h3 class="card-title white-text">{{$project->name}}</h3>
                                                <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir le projet {{$project->name}}" href="{{ url('/projects/'.$project->id) }}"><i class="material-icons">add</i></a>
                                                {{--<a class='dropdown-trigger white-text' href='#' data-target='dropdown1'><i class="material-icons right">more_vert</i></a>--}}
                                            </div>
                                            <div class="card-content">
                                                @if($project->description)
                                                    <p class="card-text"><strong>description</strong> : {{$project->description}}</p>
                                                @else
                                                    <p class="card-text"><strong>description</strong> : Il n'y a pas de description pour ce projet</p>
                                                @endIf
                                            </div>
                                        </li>
                                    </div>
                                    <br>
                                @endforeach
                                </ul>
                                {{--<a href="{{ url('/projects/restore') }}">restaurer</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection