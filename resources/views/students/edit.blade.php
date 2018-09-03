@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">Modifier le profil de {{$student->name}}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/students/update') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input  maxlength="30" minlength="3"  type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
                                    <label class="col-form-label" for="name">Nom</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-field col s6">
                                    <input  maxlength="30" minlength="3" type="email" class="form-control" name="email" id="email" value="{{$student->email}}">
                                    <label class="col-form-label" for="email">Email</label>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $student->id }}">

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