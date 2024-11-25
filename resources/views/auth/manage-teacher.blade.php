@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Teachers</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addTeacherModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Teacher Profile</span></a>
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Qualification</th>
                <th>Experience (Years)</th>
                <th>Profile Image</th>
                <th>Previous Experience</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->qualification }}</td>
                <td>{{ $teacher->experience_year }}</td>
                <td>
                    @if($teacher->profile_img)
                    <img src="{{ asset('storage/teacher/' . $teacher->profile_img) }}" alt="Profile Image" width="50" height="50">
                    @else
                    N/A
                    @endif
                </td>
                <td>{{ $teacher->prev_exp }}</td>

                <td>
                    <a href="#deleteTeacherModal" class="delete" data-toggle="modal" data-id="{{ $teacher->id }}">
                        <i class="ti-trash menu-icon"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</table>


<!-- Delete Image Modal -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImageModalLabel">Add New Teacher Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form for adding image -->
                <form id="addImageForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="qualification">Qualification:</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" required>
                    </div>

                    <div class="form-group">
                        <label for="details">Details:</label>
                        <textarea type="text" class="form-control" id="details" name="details"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="experience_year">Experience (Years):</label>
                        <input type="number" class="form-control" id="experience_year" name="experience_year">
                    </div>

                    <div class="form-group">
                        <label for="prev_exp">Previous Experience:</label>
                        <div id="prev_exp_container">
                            <input type="text" class="form-control mb-2 prev_exp_input" name="prev_exp[]" placeholder="Previous experience">
                        </div>
                        <button type="button" class="btn btn-secondary" id="add_exp_btn">Add More Experience</button>
                    </div>

                    <div class="form-group">
                        <label for="profile_img">Profile Image:</label>
                        <input type="file" class="form-control" id="profile_img" name="profile_img">
                    </div>

                    <div class="form-group">
                        <label for="instagram_url">Instagram URL:</label>
                        <input type="url" class="form-control" id="instagram_url" name="instagram_url">
                    </div>

                    <div class="form-group">
                        <label for="facebook_url">Facebook URL:</label>
                        <input type="url" class="form-control" id="facebook_url" name="facebook_url">
                    </div>

                    <div class="form-group">
                        <label for="facebook_url">Demo Video URL:</label>
                        <input type="url" class="form-control" id="video_url" name="video_url">
                    </div>

                    <button type="submit" class="btn btn-primary">Add Teacher</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete Image Modal -->
<div class="modal fade" id="deleteTeacherModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
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