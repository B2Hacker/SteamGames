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
                <h1>Requirements Details</h1>
                <div class="card">
                    <input type="hidden" name="name" id="name">
                    <div class="card-body">
                        <p class="card-text">
                            <b>PC Requirements:</b> {{ $requirements->pc_requirements }}
                            <br>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Mac Requirements: </b>{{ $requirements->mac_requirements }}
                        </li>
                        <li class="list-group-item "><b>Linux Requirements: </b>{{ $requirements->linux_requirements}}</li>
                        <li class="list-group-item "><b>Minimum: </b>{{ $requirements->minimum }}</li>
                        <li class="list-group-item "><b>Recommened: </b>{{ $requirements->recommended }}</li>

                    </ul>
                    <div class="card-body">
                        <a href="/admin/requirements/edit/{{ $requirements->_id }}" class="card-link">Edit</a>
                        <a href="/admin/requirements/delete/{{ $requirements->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection