@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Game Data</h1>
                <form action="/admin/requirements/delete" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="productid" id="productid" value="{{ $requirements->_id }}">
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
                        <label for="recommended">Recommended</label>
                        <input type="text" class="form-control" id="recommended" name="recommended" value="{{ $requirements->recommended }}">
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
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Requirement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this game requirement? This chages can not be reverted.
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