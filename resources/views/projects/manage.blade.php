@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Gérer la liste des projets') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <ul class="col-md-12">
                                <div class="row">
                                    @foreach ($implementations as $implementation)
                                        <div class="col-md-4">
                                            <li class="card">
                                                <div class="card-block">
                                                    <div class="card-header teal lighten-2">
                                                        <h3 class="card-title white-text"><a style="text-decoration: none; color: inherit;" href="{{ url('/projects/'.$implementation->project->id) }}">{{ $implementation->project->name }}</a></h3>
                                                    </div>
                                                    <div class="card-content">
                                                        <p><span>Description : </span>{{ $implementation->project->description }}</p>
                                                        <p><span>Pondération : </span>{{ $implementation->project->ponderation }}</p>
                                                        <br>
                                                        <form action="{{ route('/implementations/link/delete', $event) }}" method="post">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" value="{{ $implementation->project->id }}" name="project_id">
                                                            <input type="submit" value="retirer">
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection