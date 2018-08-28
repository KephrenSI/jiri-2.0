@extends('layouts.app')

@section('content')
        <h2>
            Lier les projets aux étudiants
        </h2>
        <form action="{{ route('/implementations/link', $event) }}" method="post">
            {{ csrf_field() }}
            <div class="list-group col-md-6">
                <h3>
                    Liste des projets
                </h3>
                <ul class="list-group">
                    @foreach( $projects as $project )
                        <li class="list-group-item">
                        <input type="checkbox" id="p{{ $project->id }}" name="projects_ids[]" value="{{ $project->id }}">
                        <label class="azerty" for="p{{ $project->id }}"></label>
                        <span>{{ $project->id }}</span>
                        <span>{{ $project->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="list-group col-md-6">
                <h3>
                    Liste des étudiants
                </h3>
                <ul class="list-group">
                    @foreach( $meetings as $meeting )
                        <li class="list-group-item">
                            {{ $meeting->student_id }}
                            {{ $meeting->student->name }}
                            <input type="hidden" name="students_ids[]" value="{{ $meeting->student_id }}">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                @include('partials/errors')
                <input class="btn btn-default" type="submit" value="Terminer">
            </div>
        </form>
        <a href="{{route('/meetings/link', $event)}}" class="btn btn-default">
            Précédent
        </a>
@endsection