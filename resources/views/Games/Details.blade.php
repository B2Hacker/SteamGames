@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{ $game->name }}</h5>
                    <br>
                    <p class="card-text">
                    <b>Developer: </b>{{ $game->developer }}
                    </p>
                    <p class="card-text">
                    <b>Publisher: </b>{{ $game->publisher }}
                    </p>
                    <p class="card-text">
                    <b>Platforms: </b>{{ $game->platforms }}
                    </p>
                    <p class="card-text">
                    <b>Categories: </b>{{ $game->categories }}
                    </p>
                    <p class="card-text">
                    <b>Genres: </b>{{ $game->genres }}
                    </p>
                    </p>
                    <p class="card-text">
                    <b>Price: </b>{{ $game->price }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection