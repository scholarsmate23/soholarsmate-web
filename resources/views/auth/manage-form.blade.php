@extends('auth.layouts')

@section('content')

<div class="table-title">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Forms</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('create.form') }}" class="btn btn-success">
                <i class="ti-plus menu-icon"></i> <span>Create Forms</span>
            </a>
        </div>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Form Name</th>
            <th>Form Slug</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($forms as $form)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $form->form_name }}</td>
            <td>
                <a href="{{ url('/form/' . $form->form_slug) }}" target="_blank">
                    {{ url('/form/' . $form->form_slug) }}
                </a>
            </td>
            <td>{{ $form->status}}</td>
            <td>
                <div class="form-check form-switch">
                    <input
                        class="form-check-input form-status"
                        type="checkbox"
                        role="switch"
                        data-id="{{ $form->id }}"
                        {{ $form->status == 'active' ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No forms found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection