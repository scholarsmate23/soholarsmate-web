@extends('auth.layouts')

@section('content')

<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Submissions for <b>{{ $formName }}</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('download-pdf', ['formName' => $formName]) }}" class="btn btn-primary" style="text-align: right !important; background-color: #f00 !important;">
                Download PDF
            </a>
        </div>
    </div>
</div>

<div class="container">

    @if(empty($submissions))
    <p>No submissions yet.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                @php
                $firstSubmission = !empty($submissions) && isset($submissions[0]['submission_data'])
                ? json_decode($submissions[0]['submission_data'], true)
                : [];
                @endphp
                @if(!empty($firstSubmission))
                @foreach(array_keys($firstSubmission) as $fieldName)
                <th>{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</th>
                @endforeach
                @endif
                <th>Submitted On</th>
            </tr>
        </thead>
        <tbody>
            @foreach($submissions as $index => $submission)
            <tr>
                <td>{{ $index + 1 }}</td>
                @php
                $submittedData = json_decode($submission['submission_data'], true);
                @endphp
                @foreach($submittedData as $fieldValue)
                <td>{{ $fieldValue }}</td>
                @endforeach
                <td>{{ \Carbon\Carbon::parse($submission['created_at'])->format('d-m-Y H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection