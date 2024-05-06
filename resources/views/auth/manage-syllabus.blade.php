@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Syllabus</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addSyllabusModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Syllabus</span></a>
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Exam/Course Name</th>
            <th>File Name</th>
            <th>Syllabus Type</th>
            <th>Uploaded Date</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>

            <td>{{ $item['name'] }}</td>
            <td>{{ $item['filename'] }}</td>
            <td>{{ $item['course_type'] }}</td>
            <td>{{ $item['created_at'] }}</td>
            <td>
                <a href="#deleteSyllabusModal" class="delete" id="deleteImage" data-toggle="modal" value="{{ $item['id'] }}"><i class="ti-trash menu-icon"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<div class="modal fade" id="addSyllabusModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImageModalLabel">Add New Syllabus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form for adding PDF -->
                <form id="addPdfForm" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title">Exam/Course Name</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="">Select</option>
                            <option value="engineering">Engineering</option>
                            <option value="medical">Medical</option>
                            <option value="boards">Boards</option>
                            <option value="foundation">Pre- Foundation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pdf">Choose PDF</label>
                        <input type="file" class="form-control" id="pdf" name="pdf" accept=".pdf" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Image Modal -->
<div class="modal fade" id="deleteSyllabusModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteImageModalLabel">Delete Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete This Syllabus?
                <input type="hidden" id="delete_syllabus_id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger delete-confirm">Delete</button>
            </div>
        </div>
    </div>
</div>

@endsection