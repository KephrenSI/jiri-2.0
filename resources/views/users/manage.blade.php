@extends('layouts.app')

@section('content')
    <ul class="panel-body list-group">
        @foreach ($meetings as $meeting)
            <li class="list-group-item">
                <section>
                    <h3>{{ $meeting->user->name }}</h3>
                    <form action="{{ route('/meetings/link/delete', $event) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $meeting->user->id }}" name="user_id">
                        <input type="submit" value="enlever">
                    </form>
                </section>
            </li>
        @endforeach
    </ul>
    <p>il y a {{ $meetings->count() }} utilisateur associé à cette evenement.</p>

    <form action="{{ route('/meetings/link/restore', $event) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="{{ $meeting->user->id }}" name="user_id">
        <input type="submit" value="remettre les meetings">
    </form>
@endsection