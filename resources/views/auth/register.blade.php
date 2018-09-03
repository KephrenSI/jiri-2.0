@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="blog-post-title">{{ __('Inscription') }}</h2>
                </div>
                <div class="card-body">
                    <form class="col s12" action="{{ route('register') }}" method="post" aria-label="{{ __('Register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="name" maxlength="10" minlength="1" type="text" class="validate form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="name" class="col-form-label">{{ __('Nom') }}</label>
                                <span class="helper-text" data-error="Veuillez remplir le champs correctement" data-success="Ok"></span>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col s6">
                                <!-- Switch -->
                                <div class="switch">
                                    <i class="material-icons prefix">supervisor_account</i>
                                    <label  for="is_admin" class="col-form-label">
                                        {{ __('Voulez-vous vous inscrire en tant qu\'administrateur?') }}
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
                                <i class="material-icons prefix">mail_outline</i>
                                <input id="email" type="email" maxlength="30"class="validate form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="email" class="col-form-label">{{ __('Adresse Email') }}</label>
                                <span class="helper-text" data-error="Veuillez remplir le champs correctement" data-success="Ok"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password" maxlength="20" minlength="6" type="password" class="validate form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="password" class="col-form-label">{{ __('Mot de passe') }}</label>
                                <span class="helper-text" data-error="Veuillez remplir le champs correctement" data-success="Ok"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock_open</i>
                                <input id="password-confirm" maxlength="20" minlength="6" type="password" class="validate form-control" name="password_confirmation" required>
                                <label for="password-confirm" class="col-form-label">{{ __('Confirmer le mot de passe') }}</label>
                                <span class="helper-text" data-error="Veuillez remplir le champs correctement" data-success="Ok"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col s6 text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ __('S\'inscrire') }}
                                </button>
                                <hr>
                                <a class="btn-link" href="{{ route('login') }}">
                                    {{ __('Déjà inscrit?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
