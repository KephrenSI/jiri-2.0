@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Ajouter un nouveau projet</h2>
                    </div>
                    <div class="card-body">
                        <form class="col s12" action="{{ url('/projects/store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">person_outline</i>
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <label for="description">Quelques mots</label>
                                    <textarea class="form-control materialize-textarea" data-length="120" name="description" id="description">{{old('description')}}</textarea>
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Enregistrer">
                            @include('partials/errors')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection