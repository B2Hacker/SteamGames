@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Product</h1>
                <form action="/admin/games/edit" method="POST">
                    @csrf
                    <input type="hidden" name="productid" id="productid" value="{{ $game->_id}}">
                    <div class="form-group">
                        <label for="name">Game Title</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $game->name }}">
                    </div>
                    <div class="form-group">
                        <label for="developer">Developer</label>
                        <input type="text" class="form-control" id="developer" name="developer" value="{{ $game->developer }}">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $game->publisher }}">
                    </div>
                    <div class="form-group">
                        <label for="platforms">Platforms</label>
                        <input type="text" class="form-control" id="platforms" name="platforms" value="{{ $game->platforms }}">
                    </div>
                    <div class="form-group">
                        <label for="genres">Genres</label>
                        <input type="text" class="form-control" id="genres" name="genres" value="{{ $game->genres }}">
                    </div>
                    <div class="form-group">
                        <label for="categories">Categories</label>
                        <input type="text" class="form-control" id="categories" name="categories" value="{{ $game->categories }}">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input class="form-control" type="number" name="price" id="price" value="{{ $game->price }}">
                        </div>
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
