@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Modifier le projet {{$project->title}}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/projects/update') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input  maxlength="15" minlength="3"  type="text" class="form-control" name="name" id="name" value="{{$project->name}}">
                                    <label for="name">Nom</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <textarea class="form-control materialize-textarea" maxlength="120" data-length="120" name="description" id="description">{{$project->description}}</textarea>
                                    <label class="col-form-label" for="description">Quelques mots</label>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $project->id }}">

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