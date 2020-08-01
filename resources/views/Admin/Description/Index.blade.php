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
                <h1>Description</h1>
                <a class="text-right" href="/admin/description/create">Create New Description</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Detailed Description</th>
                            <th scope="col">About the Game</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($description as $des)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{$des->detailed_description}}</td>
                                <td>{{$des->about_the_game}}</td>
                                <td>{{$des->short_description}}</td>
                                <td>
                                    <a href="/admin/description/{{ $des['_id'] }}">Details</a> |
                                    <a href="/admin/description/edit/{{ $des->_id }}">Edit</a> |
                                    <a href="/admin/description/delete/{{ $des->_id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
