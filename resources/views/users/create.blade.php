@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Ajouter un nouveau membre du jury') }}</h2>
                    </div>
                    <div class="card-body">
                        <form class="col s12" action="{{ url('/users/store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <input  maxlength="30" minlength="3"  type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                    <label class="col-form-label" for="name">Nom</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input  maxlength="30" minlength="3"  type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                                    <label class="col-form-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input  maxlength="15" minlength="6" type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
                                    <label class="col-form-label" for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <!-- Switch -->
                                    <div class="switch">
                                        <i class="material-icons prefix">supervisor_account</i>
                                        <label class="col-form-label" for="is_admin" class="col-form-label">
                                            {{ __('Cet personne est elle administratrice?') }}
                                            <hr>
                                            Non
                                            <input type="hidden" name="is_admin" value="0">
                                            <input type="checkbox" class="form-control" name="is_admin" id="is_admin" value="1">
                                            <span class="lever"></span>
                                            Oui
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">local_cafe</i>
                                    <input  maxlength="15" minlength="3" type="text" class="form-control" name="company" id="company" value="{{old('company')}}">
                                    <label class="col-form-label" for="company">Agence</label class="col-form-label">
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