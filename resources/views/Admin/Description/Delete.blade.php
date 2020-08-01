@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Game Data</h1>
                <form action="/admin/description/delete" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="productid" id="productid" value="{{ $description->_id }}">
                    <div class="form-group">
                        <label for="detailed_description">Detailed Description</label>
                        <input type="text" class="form-control" id="detailed_description" name="detailed_description" value="{{ $description->detailed_description }}">
                    </div>
                    <div class="form-group">
                        <label for="about_the_game">About the Game</label>
                        <input type="text" class="form-control" id="about_the_game" name="about_the_game" value="{{ $description->about_the_game }}">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <input type="text" class="form-control" id="short_description" name="short_description" value="{{ $description->short_description }}">
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
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Description</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this game description? This chages can not be reverted.
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