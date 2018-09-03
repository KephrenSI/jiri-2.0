@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Modifier le profil de {{$user->name}}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/users/update') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s12">
                                    <input type="text"  maxlength="30" minlength="3" class="form-control" name="name" id="name" value="{{$user->name}}">
                                    <label class="col-form-label" for="name">Nom</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s12">
                                    <input type="email" class="form-control"  maxlength="30" minlength="3" name="email" id="email" value="{{$user->email}}">
                                    <label class="col-form-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s12">
                                    @if($user->is_admin)
                                        <p class="card-text">Cette personne est administratrice</p>
                                    @else
                                        <p class="card-text">Cette personne n'est pas administratrice</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="input-field col s12">
                                    <input type="text"  maxlength="15" minlength="3" class="form-control" name="company" id="company" value="{{$user->company}}">
                                    <label class="col-form-label" for="company">Agence</label>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $user->id }}">

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