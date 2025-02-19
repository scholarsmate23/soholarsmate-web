@extends('auth.layouts')

@section('content')

<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage Form <b>Applicants</b></h2>
        </div>
        <div class="col-sm-6">
            <!-- Optional Buttons -->
        </div>
    </div>
</div>

<div class="container">

    @if(empty($groupedSubmissions))
    <p>No submissions yet.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Form Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groupedSubmissions as $formName => $submissions)
            <tr>
                <td>{{ $formName }}</td>
                <td>
                    <a href="{{ route('view.form.applicants', ['formName' => $formName]) }}" class="btn btn-primary">
                        Show Data
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection