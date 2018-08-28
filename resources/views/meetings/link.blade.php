@extends('layouts.app')

@section('content')
    <h2>
        Lier les étudiants aux Utilisateurs
    </h2>
    <form action="{{ route('/meetings/link', $event) }}" method="post">
        {{ csrf_field() }}
        <div class="list-group col-md-6">
            <h3>
                Liste des étudiants
            </h3>
            <ul>
                @foreach( $students as $student )
                    <li class="list-group-item">
                        <input type="checkbox" id="s{{ $student->id }}" name="students_ids[]" value="{{ $student->id }}">
                        <label class="azerty" for="s{{ $student->id }}"></label>
                        <span>{{ $student->id }}</span>
                        <span>{{ $student->name }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list-group col-md-6">
            <h3>
                Liste des utilisateurs
            </h3>
            <ul>
                @foreach( $users as $user )
                    <li class="list-group-item">
                        <input type="checkbox" id="u{{ $user->id }}" name="users_ids[]" value="{{ $user->id }}">
                        <label class="azerty" for="u{{ $user->id }}"></label>
                        <span>{{ $user->id }}</span>
                        <span>{{ $user->name }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <a href="{{route('/events', $event->id)}}" class="btn btn-default">
                Annuler
            </a>
        </div>
        <div class="col-md-12">
            @include('partials/errors')
            <input class="btn btn-default" type="submit" value="Suivant">
        </div>
    </form>



</section>
@endsection