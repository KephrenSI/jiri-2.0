@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Liste des membres du jury') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <ul class="col-md-12">
                                <div class="row">
                                @foreach($users as $user)
                                    <div class="col-md-4">
                                        <li class="card">
                                            <div class="card-block">
                                                <div class="card-header teal lighten-2">
                                                    <h3 class="card-title white-text">{{$user->name}}</h3>
                                                    <a class="btn-floating halfway-fab waves-effect waves-light blue tooltipped" data-position="left" data-tooltip="Voir le profil de {{$user->name}}" href="{{ url('/users/'.$user->id) }}"><i class="material-icons">add</i></a>
                                                    {{--<a class='dropdown-trigger white-text' href='#' data-target='dropdown1'><i class="material-icons right">more_vert</i></a>--}}
                                                </div>
                                                <div class="card-content">
                                                    <p class="card-text"><strong>Email</strong> : {{$user->email}}</p>
                                                    <p class="card-text"><strong>Agence</strong> : {{$user->company}}</p>
                                                    @if($user->is_admin)
                                                        <p class="card-text"><strong>Administrateur</strong> : oui</p>
                                                    @else
                                                        <p class="card-text"><strong>Administrateur</strong> : non</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                @endforeach
                            </ul>
                            {{--<a href="{{ url('/users/restore') }}">restaurer</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection