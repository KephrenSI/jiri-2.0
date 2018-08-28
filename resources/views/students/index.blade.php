@extends('layouts.app')

@section('content')
    <h2 class="blog-post-title">Liste des élèves</h2>
    <ul>
        @foreach($students as $student)
            <li class="card">
                <div class="card-block">
                    <h3 class="card-title">{{$student->name}}</h3>
                    <p class="card-text"><strong>Email</strong> : {{$student->email}}</p>
                    <a href="{{ url('/students/'.$student->id) }}" class="link"></a>
                </div>
            </li>
        @endforeach
    </ul>
    <a href="/students/restore">restaurer</a>
@endsection