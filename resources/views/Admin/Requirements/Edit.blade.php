@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Requierements</h1>
                <form action="/admin/requirements/edit" method="POST">
                    @csrf
                    <input type="hidden" name="productid" id="productid" value="{{ $requirements->_id}}">
                    <div class="form-group">
                        <label for="pc_requirements">PC Requierements</label>
                        <input type="text" class="form-control" id="pc_requirements" name="pc_requirements" value="{{ $requirements->pc_requirements}}">
                    </div>
                    <div class="form-group">
                        <label for="mac_requirements">Mac Requirements</label>
                        <input type="text" class="form-control" id="mac_requirements" name="mac_requirements" value="{{ $requirements->mac_requirements }}">
                    </div>
                    <div class="form-group">
                        <label for="linux_requirements">Linux Requirements</label>
                        <input type="text" class="form-control" id="linux_requirements" name="linux_requirements" value="{{ $requirements->linux_requirements }}">
                    </div>
                    <div class="form-group">
                        <label for="minimum">Minimum</label>
                        <input type="text" class="form-control" id="minimum" name="minimum" value="{{ $requirements->minimum }}">
                    </div>
                    <div class="form-group">
                        <label for="recommended">Reommended</label>
                        <input type="text" class="form-control" id="recommended" name="recommended" value="{{ $requirements->recommended }}">
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
