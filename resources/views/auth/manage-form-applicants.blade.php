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
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="manageFormTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="view-submissions-tab" data-bs-toggle="tab" href="#view-submissions" role="tab" aria-controls="view-submissions" aria-selected="false">Forms Submissions</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="add-data-tab" data-bs-toggle="tab" href="#add-data" role="tab" aria-controls="add-data" aria-selected="false">TAD-Feedback</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade" id="view-submissions" role="tabpanel" aria-labelledby="view-submissions-tab">
            @if($groupedSubmissions->isEmpty())
            <p>No submissions yet.</p>
            @else
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Form Name</th>
                        <th>View Submissions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($groupedSubmissions as $formName => $submissions)
                    <tr>
                        <td>{{ $formName }}</td>
                        <td>
                            <a href="{{ route('view.form.applicants', ['formName' => $formName]) }}" class="btn btn-primary">
                                <i class="ti-eye menu-icon"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $forms->links('pagination::bootstrap-4') }}
            </div>
            @endif
        </div>
        <div class="tab-pane fade" id="add-data" role="tabpanel" aria-labelledby="add-data-tab">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mt-3">Feedback Data</h3>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('export.feedback.excel') }}" class="btn btn-primary" style="float: right;">
                        Export &nbsp; <i class="ti-download menu-icon"></i></a>
                </div>
            </div>
            @if($feedback->isEmpty())
            <p>No feedback yet.</p>
            @else
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Reference No</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Boards</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Photo</th>
                        <th>Admit Card</th>
                        <th>Feedback</th>
                        <th>Submitted On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback as $item)
                    <tr>
                        <td>{{ $item->reference_no }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->class }}</td>
                        <td>{{ $item->boards }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <img src="{{ asset('storage/feedback/'.$item->photo)}}" alt="{{ $item['file_name'] }}" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>
                            <a href="{{ asset('storage/feedback/'.$item->admit_card) }}" target="_blank" class="btn btn-primary">
                                <i class="ti-eye menu-icon"></i>
                            </a>
                        </td>
                        <td>{{ $item->feedback }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $feedback->links('pagination::bootstrap-4') }}
            </div>
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the active tab from local storage
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            var tabElement = document.querySelector('a[href="' + activeTab + '"]');
            if (tabElement) {
                var tab = new bootstrap.Tab(tabElement);
                tab.show();
            }
        }

        // Store the active tab in local storage when a tab is shown
        var tabLinks = document.querySelectorAll('#manageFormTabs a[data-bs-toggle="tab"]');
        tabLinks.forEach(function(tabLink) {
            tabLink.addEventListener('shown.bs.tab', function(event) {
                localStorage.setItem('activeTab', event.target.getAttribute('href'));
            });
        });
    });
</script>

@endsection