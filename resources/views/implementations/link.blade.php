@extends('layouts.app')
<style>
    input[type=checkbox]{
        opacity: 0;
    }
    input[type=checkbox] + .azerty{
        display: block;
        width: 100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
    }
    input[type=checkbox] + .azerty:hover{
        background: #A4A4A4;
        opacity: 0.2;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        cursor: pointer;
    }
    input[type=checkbox]:checked + .azerty{
        background-color: #26B3A3;
        color: #0000F0;
        border-radius: 0;
    }
    input[type=checkbox]:checked ~ span{
        color: #FFFFFF;
        position: relative;
        z-index: 2;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Lier les projets aux étudiants') }}</h2>
                    </div>
                    <div class="card-body">
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
                            <div class="list-group col-md-6" style="display: none;">
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
                            <div class="col-md-12" style="padding-left: 0;">
                                @include('partials/errors')
                                <input class="btn btn-default" type="submit" value="Terminer">
                            </div>
                        </form>
                        <a href="{{route('/meetings/link', $event)}}" class="btn btn-default">
                            Précédent
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection