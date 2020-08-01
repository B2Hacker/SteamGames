@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Description</h1>
                <form action="/admin/description/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="detailed_description">Detailed Description</label>
                        <input type="text" class="form-control" id="detailed_description" name="detailed_description">
                    </div>
                    <div class="form-group">
                        <label for="about_the_game">About the Game</label>
                        <input type="text" class="form-control" id="about_the_game" name="about_the_game">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <input type="text" class="form-control" id="short_description" name="short_description">
                    </div>
                    <button class="btn btn-success" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection