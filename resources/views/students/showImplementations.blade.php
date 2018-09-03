@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Projets de {{ $student->name }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="row">
                                    @foreach($implementations->where('event_id', $event->id) as $implementation)
                                        <div class="col-md-4">
                                            <li class="card">
                                                <div class="card-header teal lighten-2">
                                                    <h3 class="card-title white-text">{{ $implementation->project->name }}</h3>
                                                    <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir le projet {{ $implementation->project->name }}" href="{{ route('/implementations/evaluate/meeting', [$implementation, $meeting]) }}"><i class="material-icons">add</i></a>
                                                    {{--<a class='dropdown-trigger white-text' href='#' data-target='dropdown1'><i class="material-icons right">more_vert</i></a>--}}
                                                </div>
                                                <div class="card-content">
                                                    @if($implementation->project->description)
                                                        <p class="card-text"><strong>description</strong> : {{ $implementation->project->description }}</p>
                                                    @else
                                                        <p class="card-text"><strong>description</strong> : Il n'y a pas de description pour ce projet</p>
                                                    @endIf
                                                </div>
                                            </li>
                                        </div>
                                        <br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <h3>
                            Évaluation générale
                        </h3>

                        <form action="{{ route('/meetings/evaluate', $meeting ) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input type="number" class="form-control" value="{{ $meeting->general_evaluation }}" id="general_evaluation" name="general_evaluation" min="0" max="20" step="0.1">
                                    <label for="general_evaluation">Cote (/20)</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <textarea class="form-control materialize-textarea" maxlength="120" data-length="120" name="general_comment" id="general_comment">{{ $meeting->general_comment }}</textarea>
                                    <label class="col-form-label" for="general_comment">Commentaire</label>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                            @include('/partials/errors')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection