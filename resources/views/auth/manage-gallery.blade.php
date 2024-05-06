@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Gallery</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addImageModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Image</span></a>
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <!-- <th>Edit</th> -->
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>
                <img src="{{ asset('storage/gallery/'.$item['file_name'])}}" alt="{{ $item['file_name'] }}" style="max-width: 100px; max-height: 100px;">
            </td>
            <td>{{ $item['file_name'] }}</td>
            <td>{{ $item['category'] }}</td>
            <!-- <td>
                <a href="#editImageModal" class="edit" data-toggle="modal" data-id="{{ $item->id }}"><i class="ti-pencil-alt menu-icon"></i></a>
            </td> -->
            <td>
                <a href="#deleteImageModal" class="delete" id="deleteImage" data-toggle="modal" value="{{ $item->id }}"><i class="ti-trash menu-icon"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true">
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
                        <label for="image">Choose Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <div id="previewContainer" style="display: none;">
                        <label>Selected Image:</label><br>
                        <img id="previewImage" src="#" alt="Selected Image" style="max-width: 100%; max-height: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="select">Select</option>
                            <option value="event">Event</option>
                            <option value="distribution">Distribution</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit Image Modal -->
<div class="modal fade" id="editImageModal" tabindex="-1" role="dialog" aria-labelledby="editImageModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editImageModalLabel">Edit Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form for editing image -->
                <form id="editImageForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_image_id" name="id">
                    <div class="form-group">
                        <label for="edit_image">Choose Image</label>
                        <input type="file" class="form-control" id="edit_image" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                    <label for="type">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="event">Event</option>
                            <option value="distribution">Distribution</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Image Modal -->
<div class="modal fade" id="deleteImageModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
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
                <input type="hidden" id="delete_image_id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger delete-confirm">Delete</button>
            </div>
        </div>
    </div>
</div>



@endsection