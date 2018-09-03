@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Ajouter les url des étudiants') }}</h2>
                    </div>
                    <div class="card-body">

                        <ul class="panel-body list-group">
                            @foreach ($students as $student)
                                <li class="list-group-item">
                                    <h3 class="">{{ $student->name }}</h3>
                                    <ul class="collapsible">
                                        @foreach($student->implementations->where('event_id', $event->id) as $student->implementation)
                                            <li>
                                                <h4 class="collapsible-header">{{ $student->implementation->project->name }}</h4>
                                                <div class="collapsible-body">
                                                    <form class="col s12" action="{{ route('/implementations/url', $student->implementation) }}" method="post">
                                                        {{ csrf_field() }}

                                                        <div class="form-group row">
                                                            <div class="input-field col s6">
                                                                <input id="url_repo" type="text" class="form-control" value="{{ $student->implementation->url_repo }}" name="url_repo">
                                                                <label class="col-form-label" for="url_repo">url_repo</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="input-field col s6">
                                                                <input id="url_project" type="text" class="form-control" value="{{ $student->implementation->url_project }}" name="url_project">
                                                                <label class="col-form-label" for="url_project">url_project</label>
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                {{ __('Enregistrer les url') }}
                                                            </button>
                                                        </div>
                                                        @include('partials/errors')
                                                    </form>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection