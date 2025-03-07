@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Career</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addCareerModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Career</span></a>
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Position</th>
            <th>Location</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item['position'] }}</td>
            <td>{{ $item['location'] }}</td>
            <td>{{ $item['description_file'] }}</td>
            <td>{{ $item['status'] }}</td>
            <td>
                <div class="form-check form-switch">
                    <input
                        class="form-check-input toggle-status"
                        type="checkbox"
                        role="switch"
                        data-id="{{ $item->id }}"
                        {{ $item->status == 'active' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>
            </td>

            <td>
                <a href="#deleteCareerModal" class="delete" id="deleteImage" data-toggle="modal" value="{{ $item->id }}"><i class="ti-trash menu-icon"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<!-- Delete Image Modal -->
<div class="modal fade" id="addCareerModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImageModalLabel">Add New Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form for adding image -->
                <form id="addImageForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Position Name</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf">Upload Discription <span>(Only Pdf)</span></label>
                        <input type="file" class="form-control" id="pdf" name="pdf" accept=".pdf" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete Image Modal -->
<div class="modal fade" id="deleteCareerModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteImageModalLabel">Delete Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this image?
                <input type="hidden" id="delete_career_id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger delete-confirm">Delete</button>
            </div>
        </div>
    </div>
</div>



@endsection