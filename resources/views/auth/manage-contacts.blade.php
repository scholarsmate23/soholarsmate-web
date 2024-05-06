@extends('auth.layouts')

@section('content')



<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Contacts</b></h2>
        </div>
        <div class="col-sm-6">
            <!-- <a href="#addImageModal" class="btn btn-success" data-toggle="modal"><i class="ti-plus menu-icon"></i> <span>Add Image</span></a> -->
            <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> -->
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Message</th>
            <th>Messaged On</th>
        </tr>
    </thead>
    <tbody>
        
    @foreach($data as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['mobile'] }}</td>
            <td>{{ $item['message'] }}</td>
            <td>{{ $item['created_at'] }}</td>

        </tr>
        @endforeach
      
    </tbody>
</table>



@endsection