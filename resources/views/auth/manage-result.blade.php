@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Results</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="#addResultModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Results</span></a>
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name of Exam</th>
            <th>Pdf File</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item['exam'] }}</td>
            <td>{{ $item['file_name'] }}</td>
            <td>
                <a href="#deleteResultModal" class="delete" id="deleteImage" data-toggle="modal" value="{{ $item->id }}"><i class="ti-trash menu-icon"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<div class="modal fade" id="addResultModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addImageModalLabel">Add New Results</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add form for adding image -->
                <form id="addImageForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exam">Name of Exam</label>
                        <input type="text" class="form-control" id="exam" name="exam" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf">Upload Result <span>(only pdf)</span></label>
                        <input type="file" class="form-control" id="pdf" name="pdf" accept=".pdf" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete Image Modal -->
<div class="modal fade" id="deleteResultModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteImageModalLabel">Delete Results</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Result?
                <input type="hidden" id="delete_result_id" name="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger delete-confirm">Delete</button>
            </div>
        </div>
    </div>
</div>



@endsection