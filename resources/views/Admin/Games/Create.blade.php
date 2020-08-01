@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Product</h1>
                <form action="/admin/games/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Game Title</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="developer">Developer</label>
                        <input type="text" class="form-control" id="developer" name="developer">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher">
                    </div>
                    <div class="form-group">
                        <label for="platforms">Platforms</label>
                        <input type="text" class="form-control" id="platforms" name="platforms">
                    </div>
                    <div class="form-group">
                        <label for="genres">Genres</label>
                        <input type="text" class="form-control" id="genres" name="genres">
                    </div>
                    <div class="form-group">
                        <label for="categories">Categories</label>
                        <input type="text" class="form-control" id="categories" name="categories">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input class="form-control" type="number" name="price" id="price">
                        </div>
                    <button class="btn btn-success" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection