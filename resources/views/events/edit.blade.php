@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">odifier le profil de l'évènement {{$event->title}}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/events/update') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input type="text" class="form-control" maxlength="15" minlength="3" name="course_name" id="course_name" value="{{$event->course_name}}">
                                    <label class="col-form-label" for="course_name">Nom du cours</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input type="number" class="form-control" name="academic_year" id="academic_year" value="{{$event->academic_year}}" min="2016" max="2060" step="1">
                                    <label class="col-form-label" for="academic_year">Année académique</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input type="number" class="form-control" name="exam_session" id="exam_session" value="{{$event->exam_session}}"  min="1" max="2" step="1">
                                    <label class="col-form-label" for="exam_session">Session d'examen</label>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $event->id }}">

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ __('Modifier') }}
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