@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Ajouter un nouvel évènement') }}</h2>
                    </div>

                    <div class="card-body">
                        <form class="col s12" action="{{ url('/events/store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phonelink</i>
                                    <input type="text" class="form-control" maxlength="15" minlength="3" name="course_name" id="course_name" value="{{old('course_name')}}">
                                    <label class="col-form-label" for="course_name">Nom du cours</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s3">
                                    <i class="material-icons prefix">schedule</i>
                                    <input type="number" class="form-control" name="academic_year" id="academic_year" value="{{old('academic_year')}}" min="2016" max="2060" step="1">
                                    <label class="col-form-label" for="academic_year">Année académique</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">storage</i>
                                    <input type="number" class="form-control" name="exam_session" id="exam_session" value="{{old('exam_session')}}" min="1" max="2" step="1">
                                    <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                                    <label class="col-form-label" for="exam_session">Session d'examen</label>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                            @include('partials/errors')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection