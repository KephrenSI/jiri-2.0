@extends('layouts.app')

@section('content')
            <h2>Projets de {{ $student->name }}</h2>
            <ul>
                @foreach($implementations->where('event_id', $event->id) as $implementation)
                    <li class="card">
                        <div class="card-block">
                            <h3 class="card-title">{{ $implementation->project->name }}</h3>
                            <a class="link" href="{{ route('/implementations/evaluate/meeting', [$implementation, $meeting]) }}">voir</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <h2>
                Évaluation générale
            </h2>

            <p>{{ $meeting->general_evaluation }}</p>

            <form action="{{ route('/meetings/evaluate', $meeting ) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="general_evaluation">
                        Cote
                    </label>
                    <input type="number" class="form-control" value="{{ $meeting->general_evaluation }}" id="general_evaluation" name="general_evaluation" min="0" max="20" step="0.1">
                </div>
                <div class="form-group">
                    <label for="general_comment">
                        Commentaire
                    </label>
                    <textarea class="form-control" id="general_comment" name="general_comment">{{ $meeting->general_comment }}</textarea>
                </div>

                <input type="submit" value="enregistrer" class="btn btn-primary">
            </form>
            @include('/partials/errors')


@endsection