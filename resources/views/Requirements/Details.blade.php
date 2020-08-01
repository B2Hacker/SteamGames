@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <br>
                    <p class="card-text">
                    <b>PC Requirements: </b>{{ $requirements->pc_requirements }}
                    </p>
                    <p class="card-text">
                    <b>Mac Requirements: </b>{{ $requirements->mac_requirements }}
                    </p>
                    <p class="card-text">
                    <b>Linux Requirements: </b>{{ $requirements->linux_requirements }}
                    </p>
                    <p class="card-text">
                    <b>Minimum: </b>{{ $requirements->minimum }}
                    </p>
                    <p class="card-text">
                    <b>Recommended: </b>{{ $requirements->recommended }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection