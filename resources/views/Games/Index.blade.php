@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Steam Game Library</h1>

                <div class="row">
                    @foreach($game as $game)
                        <div class="card col-md-3">
                        <th scope="row">{{$loop->index+1}}</th>
                            <div class="card-body">
                                <h5 class="card-title">{{ $game->name }}</h5>
                                <p class="card-text">{{ $game->developer." ".$game->price }}</p>
                                <a href="/games/{{ $game->_id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mx-auto" role="group" aria-label="First group">
                                @php
                                    $cpage = request('pg') == 0 ? 1 : request('pg');
                                @endphp
                                <a href="/games?pg={{$cpage - 1}}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                @for ($i = 1; $i <= ceil($productCount/1000); $i++)
                                <a href="/games?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : '' }}">{{$i}}</a>
                                @endfor
                                <a href="/games?pg={{$cpage + 1}}" class="btn btn-secondary  {{ $cpage == ceil($productCount/1000) ? 'disabled' : '' }}">&gt</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
