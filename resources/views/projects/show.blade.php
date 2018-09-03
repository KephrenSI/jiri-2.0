@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{$project->name}}</h2>
                    </div>
                    <div class="card-body">
                        @if($project->description)
                            <p class="card-text"><strong>description</strong> : {{$project->description}}</p>
                        @else
                            <p class="card-text"><strong>description</strong> : Il n'y a pas de description pour ce projet</p>
                        @endIf
                        <div class="text-right">
                            <a href="{{ url('/projects/edit/'.$project->id) }}" class="btn btn-primary waves-effect waves-light">{{ __('Modifier') }}</a>
                            <br>
                            <br>
                            <form action="{{ url('/projects/delete/'.$project->id) }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger waves-effect waves-light">
                                    {{ __('Supprimer') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{ url('/projects/index') }}" class="btn btn-default waves-effect waves-light">
                        Voir tous les projets
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection