@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('mssg') !== null)
            <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
                {{ session('mssg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Game Details</h1>
                <div class="card">
                    <input type="hidden" name="name" id="name">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $game->name }}</b></h5>
                        <p class="card-text">
                            <b>Price:</b> {{ $game->price }}
                            <br>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Developer: </b>{{ $game->developer }} <b>Publisher: </b>{{ $game->publisher }}
                        </li>
                        <li class="list-group-item "><b>Categories: </b>{{ $game->categories }}</li>
                        <li class="list-group-item "><b>Genres: </b>{{ $game->genres }}</li>
                        <li class="list-group-item "><b>Platforms: </b>{{ $game->platforms }}</li>

                    </ul>
                    <div class="card-body">
                        <a href="/admin/games/edit/{{ $game->_id }}" class="card-link">Edit</a>
                        <a href="/admin/games/delete/{{ $game->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection