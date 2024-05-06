@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Events</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addNewsModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Events</span></a>
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>News Title</th>
            <th>Description</th>
            <th>File Name</th>
            <th>Added On</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>

            <td>{{ $item['title'] }}</td>
            <td>{{ $item['description'] }}</td>

            <td> <img src="{{ asset('storage/news/'.$item['image'])}}" alt="{{ $item['image'] }}" style="max-width: 100px; max-height: 100px;"></td>
            <td>{{ $item['created_at'] }}</td>
            <td>
                <a href="#deleteNewsModal" class="delete" id="deleteImage" data-toggle="modal" value="{{ $item->id }}"><i class="ti-trash menu-icon"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true" data-backdrop="static">
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
                        <label for="title">News Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="discription">Description</label>
                        <input type="text" class="form-control" id="discription" name="discription" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Choose Image <span>(Only Image)</span></label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <div id="previewContainer" style="display: none;">
                        <label>Selected Image:</label><br>
                        <img id="previewImage" src="#" alt="Selected Image" style="max-width: 100%; max-height: 200px;">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Image Modal -->
<div class="modal fade" id="deleteNewsModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
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
                <input type="hidden" id="delete_news_id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger delete-confirm">Delete</button>
            </div>
        </div>
    </div>
</div>

@endsection