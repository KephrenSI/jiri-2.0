@extends('layouts.app')

@section('content')
            <h2>Évaluation du projet {{ $project->name }} de {{ $student->name }}</h2>

            <h2>
                Url du projet
            </h2>
            <p>
                site:
                <a href="">{{ $implementation->url_project }}</a>
            </p>
            <p>
                girhub:
                <a href="">{{ $implementation->url_repo }}</a>
            </p>

            <h>Évaluation du projet {{ $project->name }} de {{ $student->name }}</h>

            <form action="{{ route('/implementations/evaluate/meeting', [$implementation, $meeting]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="score">
                        Score
                    </label>
                    @if($score)
                        <input type="number" class="form-control" value="{{ $score->score }}" id="score" name="score" min="0" max="20" step="0.1">
                    @else
                        <input type="number" class="form-control" value="" id="score" name="score" min="0" max="20" step="0.1">
                    @endif
                </div>
                <div class="form-group">
                    <label for="comment">
                        Commentaire
                    </label>
                    @if($score)
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10">{{ $score->comment }}</textarea>
                    @else
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
                    @endif
                </div>

                <input type="submit" value="enregistrer" class="btn btn-primary">
            </form>
            @include('/partials/errors')
@endsection