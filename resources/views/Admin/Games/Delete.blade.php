@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Game Data</h1>
                <form action="/admin/games/delete" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="productid" id="productid" value="{{ $game->_id }}">
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
                    <button class="btn btn-defualt" type="button">Cancel</button>
                    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Game</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this game data? This chages can not be reverted.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection