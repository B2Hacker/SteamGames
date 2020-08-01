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
                <h1>Description Details</h1>
                <div class="card">
                    <input type="hidden" name="name" id="name">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Detailed Description:</b> {{ $description->detailed_description }}
                            <br>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item "><b>About the Game: </b>{{ $description->about_the_game}}</li>
                        <li class="list-group-item "><b>Short Description: </b>{{ $description->short_description}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/description/edit/{{ $description->_id }}" class="card-link">Edit</a>
                        <a href="/admin/description/delete/{{ $description->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection