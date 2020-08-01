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
                <h1>Requirements</h1>
                <a class="text-right" href="/admin/requirements/create">Create New Requirement</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">PC Requirements</th>
                            <th scope="col">Mac Requierements</th>
                            <th scope="col">Linux Requirements</th>
                            <th scope="col">Minimum</th>
                            <th scope="col">Recommended</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requirements as $req)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{$req->pc_requirements}}</td>
                                <td>{{$req->mac_requirements}}</td>
                                <td>{{$req->linux_requirements}}</td>
                                <td>{{$req->minimum}}</td>
                                <td>{{$req->recommended}}</td>
                                <td>
                                    <a href="/admin/requirements/{{ $req['_id'] }}">Details</a> |
                                    <a href="/admin/requirements/edit/{{ $req->_id }}">Edit</a> |
                                    <a href="/admin/requirements/delete/{{ $req->_id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
