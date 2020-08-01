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
                <h1>Games</h1>
                <a class="text-right" href="/admin/games/create">Create New Game</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Game Title</th>
                            <th scope="col">Developer</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Platforms</th>
                            <th scope="col">Genres</th>
                            <th scope="col">Price</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($game as $game)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{$game->name}}</td>
                                <td>{{$game->developer}}</td>
                                <td>{{$game->publisher}}</td>
                                <td>{{$game->platforms}}</td>
                                <td>{{$game->genres}}</td>
                                <td>{{$game->price}}</td>
                                <td>
                                    <a href="/admin/games/{{ $game['_id'] }}">Details</a> |
                                    <a href="/admin/games/edit/{{ $game->_id }}">Edit</a> |
                                    <a href="/admin/games/delete/{{ $game->_id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
