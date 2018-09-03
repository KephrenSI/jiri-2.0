@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Évaluation du projet {{ $project->name }} de {{ $student->name }}</h2>
                    </div>
                    <div class="card-body">
                        <br>
                        <br>
                        <h3>
                            Url du projet
                        </h3>
                        <p>
                            Site :
                            <a href="">{{ $implementation->url_project }}</a>
                        </p>
                        <p>
                            Girhub :
                            <a href="">{{ $implementation->url_repo }}</a>
                        </p>
                        <br>
                        <br>
                        <h3>
                            Évaluation du projet
                        </h3>
                        <form action="{{ route('/implementations/evaluate/meeting', [$implementation, $meeting]) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group rox">
                                <div class="input-field col s6">
                                    @if($score)
                                        <input type="number" class="form-control" value="{{ $score->score }}" id="score" name="score" min="0" max="20" step="0.1">
                                    @else
                                        <input type="number" class="form-control" value="" id="score" name="score" min="0" max="20" step="0.1">
                                    @endif
                                    <label class="col-form-label" for="score">Score (/20)</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    @if($score)
                                        <textarea class="form-control materialize-textarea" data-length="120" maxlength="120" name="comment" id="description">{{ $score->comment }}</textarea>
                                    @else
                                        <textarea class="form-control materialize-textarea" data-length="120" maxlength="120" name="comment" id="description"></textarea>
                                    @endif
                                    <label class="col-form-label" for="comment">Commentaire</label>
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