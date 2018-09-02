@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Ajouter un nouvel étudiant</h2>
                    </div>
                    <div class="card-body">
                        <form class="col s12" action="{{ url('/students/store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                    <label class="col-form-label" for="name">Nom</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">mail_outline</i>
                                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                                    <label class="col-form-label" for="email">Email</label>
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