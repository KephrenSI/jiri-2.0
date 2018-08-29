@extends('layouts.app')

@section('content')
    <ul class="panel-body list-group">
        @foreach ($students as $student)
            <li class="list-group-item">
                {{ $student->name }}
                <ul>
                    @foreach($student->implementations->where('event_id', $event->id) as $student->implementation)
                        <li>
                            {{ $student->implementation->project_id }}
                            {{ $student->implementation->project->name }}

                            {{ $student->implementation->url_repo }}
                            {{ $student->implementation->url_project }}
                            event id:
                            {{ $student->implementation->event_id }}

                            <form action="{{ route('/implementations/url', $student->implementation) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="url_repo">
                                        url_repo
                                    </label>
                                    <input id="url_repo" type="text" class="form-control" value="{{ $student->implementation->url_repo }}" name="url_repo">
                                </div>
                                <div class="form-group">
                                    <label for="url_project">
                                        url_project
                                    </label>
                                    <input id="url_project" type="text" class="form-control" value="{{ $student->implementation->url_project }}" name="url_project">
                                </div>

                                @include('partials/errors')

                                <input type="submit" value="ajouter les urls" class="btn btn-primary">
                            </form>
                        </li>
                    @endforeach

                </ul>
            </li>
        @endforeach
    </ul>

    {{--<h1>--}}
        {{--Tous les jurys dans la db--}}
    {{--</h1>--}}
    {{--<ul>--}}
        {{--@foreach ($studentAlls as $studentAll)--}}
            {{--<li>--}}
                {{--{{ $studentAll->name }}--}}
            {{--</li>--}}
        {{--@endforeach--}}

    {{--</ul>--}}
@endsection