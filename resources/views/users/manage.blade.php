@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="blog-post-title">{{ __('Gérer la liste des membres du jury') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <ul class="col-md-12">
                                <div class="row">
                                @foreach ($meetings as $meeting)
                                <div class="col-md-4">
                                    <li class="card">
                                        <div class="card-block">
                                            <div class="card-header teal lighten-2">
                                                <h3 class="card-title white-text">{{ $meeting->user->name }}</h3>
                                            </div>
                                            <div class="card-content">
                                                <p class="card-text"><strong>Email</strong> : {{$meeting->user->email}}</p>
                                                <p class="card-text"><strong>Agence</strong> : {{$meeting->user->company}}</p>
                                                @if($meeting->user->is_admin)
                                                    <p class="card-text"><strong>Administrateur</strong> : oui</p>
                                                @else
                                                    <p class="card-text"><strong>Administrateur</strong> : non</p>
                                                @endif
                                                <br>
                                                <div>
                                                    <form action="{{ route('/meetings/link/delete', $event) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{ $meeting->user->id }}" name="user_id">
                                                        <input type="submit" value="retirer">
                                                    </form>
                                                </div>
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
                <p>il y a {{ $meetings->count() }} utilisateurs associés à cette evenement.</p>
                <form action="{{ route('/meetings/link/restore', $event) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $meeting->user->id }}" name="user_id">
                    <input type="submit" value="remettre les meetings">
                </form>
            </div>
        </div>
    </div>

@endsection