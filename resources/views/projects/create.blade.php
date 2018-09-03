@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Ajouter un nouveau projet') }}</h2>
                    </div>
                    <div class="card-body">
                        <form class="col s12" action="{{ url('/projects/store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">laptop_mac</i>
                                    <input type="text" class="form-control"  maxlength="15" minlength="3"  name="name" id="name" value="{{old('name')}}">
                                    <label class="col-form-label" for="name">Nom</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">speaker_notes</i>
                                    <textarea  maxlength="120" class="form-control materialize-textarea" data-length="120" name="description" id="description">{{old('description')}}</textarea>
                                    <label class="col-form-label" for="description">Quelques mots</label>
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