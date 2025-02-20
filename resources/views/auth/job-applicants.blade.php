@extends('auth.layouts')

@section('content')

<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Applicants</b></h2>
        </div>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Applicant Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Resume</th>
            <th>Availability</th>
            <th>Expected Salary</th>
            <th>Position</th>
            <th>Location</th>
            <th>Applied On</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
        <tr>
            <td>{{ $application->application_id }}</td>
            <td>{{ $application->applicant_name }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->phone }}</td>
            <td>{{ $application->address }}</td>
            <td><a href="{{ asset('storage/application/' . $application->resume) }}" target="_blank">View Resume</a></td>
            <td>{{ $application->availability }}</td>
            <td>{{ $application->salary }}</td>
            <td>{{ $application->career_position }}</td>
            <td>{{ $application->career_location }}</td>
            <td>{{ \Carbon\Carbon::parse($application->created_at)->format('d-m-Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection