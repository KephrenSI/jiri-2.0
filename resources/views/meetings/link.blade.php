@extends('layouts.app')
<style>
    input[type=checkbox]{
        opacity: 0;
    }
    input[type=checkbox] + .azerty{
        display: block;
        width: 100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
    }
    input[type=checkbox] + .azerty:hover{
        background: #A4A4A4;
        opacity: 0.2;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        cursor: pointer;
    }
    input[type=checkbox]:checked + .azerty{
        background-color: #26B3A3;
        color: #0000F0;
        border-radius: 0;
    }
    input[type=checkbox]:checked ~ span{
        color: #FFFFFF;
        position: relative;
        z-index: 2;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Lier les étudiants aux Utilisateurs') }}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('/meetings/link', $event) }}" method="post">
                            {{ csrf_field() }}
                            <div class="list-group col-md-6">
                                <h3>
                                    Liste des étudiants
                                </h3>
                                <ulstyle="padding-left: 0;">
                                    @foreach( $students as $student )
                                        <li class="list-group-item">
                                            <input type="checkbox" id="s{{ $student->id }}" name="students_ids[]" value="{{ $student->id }}">
                                            <label class="azerty" for="s{{ $student->id }}"></label>
                                            <span>{{ $student->id }}</span>
                                            <span>{{ $student->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="list-group col-md-6">
                                <h3>
                                    Liste des utilisateurs
                                </h3>
                                <ul style="padding-left: 0;">
                                    @foreach( $users as $user )
                                        <li class="list-group-item">
                                            <input type="checkbox" id="u{{ $user->id }}" name="users_ids[]" value="{{ $user->id }}">
                                            <label class="azerty" for="u{{ $user->id }}"></label>
                                            <span>{{ $user->id }}</span>
                                            <span>{{ $user->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <a href="{{route('/events', $event->id)}}" class="btn btn-default">
                                    Annuler
                                </a>
                            </div>
                            <div class="col-md-12" style="padding-left: 0;">
                                @include('partials/errors')
                                <input class="btn btn-default" type="submit" value="Suivant">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </section>
@endsection