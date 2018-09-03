@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Bonjour, {{ Auth::user()->name }} et bienvenue sur Jiri !</h2>
                        @if(Auth::user()->is_admin)
                            <p>Tu es inscrit en tant qu'administrateur. Voilà ce qu'il vous est possible de faire</p>
                        @else
                            <p>Tu es inscrit en tant que membre d'un jury. Voilà ce qu'il vous est possible de faire</p>
                        @endif
                    </div>

                    <div class="card-body">
                        <ul class="row">
                            @if( Auth::user()->is_admin)
                                <div class="col-md-6">
                                    <a href="{{ url('/students/create') }}" style="text-decoration: none; text-align: center;">
                                    <li class="card">
                                        <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                            <h3 class="card-title white-text">Créer un élève</h3>
                                        </div>
                                    </li>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('/students/index') }}" style="text-decoration: none; text-align: center;">
                                        <li class="card">
                                            <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                                <h3 class="card-title white-text">Liste des élèves</h3>
                                            </div>
                                        </li>
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="{{ url('/projects/create') }}" style="text-decoration: none; text-align: center;">
                                        <li class="card">
                                            <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                                <h3 class="card-title white-text">Créer un projet</h3>
                                            </div>
                                        </li>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('/projects/index') }}" style="text-decoration: none; text-align: center;">
                                        <li class="card">
                                            <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                                <h3 class="card-title white-text">Liste des projets</h3>
                                            </div>
                                        </li>
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="{{ url('/users/create') }}" style="text-decoration: none; text-align: center;">
                                        <li class="card">
                                            <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                                <h3 class="card-title white-text">Créer un utilisateur</h3>
                                            </div>
                                        </li>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('/users/index') }}" style="text-decoration: none; text-align: center;">
                                        <li class="card">
                                            <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                                <h3 class="card-title white-text">Liste des utilisateurs</h3>
                                            </div>
                                        </li>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('/events/create') }}" style="text-decoration: none; text-align: center;">
                                        <li class="card">
                                            <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                                <h3 class="card-title white-text">Créer un élève</h3>
                                            </div>
                                        </li>
                                    </a>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <a href="{{ url('/events/index') }}" style="text-decoration: none; text-align: center;">
                                    <li class="card">
                                        <div class="card-header teal lighten-2" style="padding: 30px 0px;">
                                            <h3 class="card-title white-text">
                                                @if( Auth::user()->is_admin)
                                                    Liste de mes évènements
                                                @else
                                                    Liste des évènements
                                                @endif
                                            </h3>
                                        </div>
                                    </li>
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
