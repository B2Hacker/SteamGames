@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">

                    <br>
                    <p class="card-text">
                    <b>Detailed Description: </b>{{ $description->detailed_description }}
                    </p>
                    <p class="card-text">
                    <b>About the game: </b>{{ $description->about_the_game }}
                    </p>
                    <p class="card-text">
                    <b>Short Description: </b>{{ $description->short_description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection