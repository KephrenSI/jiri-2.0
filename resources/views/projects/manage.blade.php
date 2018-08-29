@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($implementations as $implementation)
            <li class="list-group-item clearfix">
                <a href="{{ url('/projects/'.$implementation->project->id) }}">
                    {{ $implementation->project->name }}
                </a>
                <div class="form-group">
                    {{ $implementation->project->description }}
                </div>
                <div class="form-group">
                    {{ $implementation->project->ponderation }}
                </div>

                <form action="{{ route('/implementations/link/delete', $event) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $implementation->project->id }}" name="project_id">
                    <input type="submit" value="enlever">
                </form>

            </li>
        @endforeach
    </ul>

    {{--<h1>--}}
        {{--Tous les projets dans la db--}}
    {{--</h1>--}}
    {{--<ul>--}}
        {{--@foreach ($projects as $project)--}}
            {{--<li>--}}
                {{--{{ $project->name }}--}}
            {{--</li>--}}
        {{--@endforeach--}}

    {{--</ul>--}}

@endsection