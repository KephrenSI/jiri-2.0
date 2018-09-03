<style>
    .fullscreen_bg {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-size: cover;
        background-position: 50% 50%;
        background-image: url({{URL::asset('assets/img/john-schnobrich-520023-unsplash.jpg')}});
        background-repeat:repeat;
    }
</style>
@extends('layouts.app')

@section('content')
<div id="fullscreen_bg" class="fullscreen_bg"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Connexion') }}</h2>
                </div>

                <div class="card-body">
                    <form class="col s12" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">mail_outline</i>
                                <input id="email" maxlength="30" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
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
                                <input id="password"  minlength="6" maxlength="20"type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
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
                                <div class="form-check">
                                    <i class="material-icons prefix"></i>
                                    <label class="form-check-label" for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Se souvenir de moi') }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col s6 text-right">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        {{ __('Se connecter') }}
                                    </button>
                                    <br>
                                    <br>
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>

                                </div>
                                <hr>
                                <a class="btn-link" href="{{ route('register') }}">
                                    {{ __('Pas encore inscrit?') }}
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
