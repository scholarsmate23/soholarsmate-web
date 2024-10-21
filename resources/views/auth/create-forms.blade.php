@extends('auth.layouts')

@section('content')
<div class="container">
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form id="form-builder" method="POST" action="{{ route('saveForm') }}">
                @csrf
                <div class="formbold-mb-5">
                    <label for="form-name" class="formbold-form-label">Form Name</label>
                    <input type="text" id="form-name" name="form_name" placeholder="Enter Form Name" class="form-control" required>
                </div>

                <div id="dynamic-fields">
                    <!-- Form fields will be appended here dynamically -->
                </div>

                <div class="form-actions">
                    <button type="button" id="add-field" class="btn btn-primary">Add Field</button>
                    <button type="submit" class="btn btn-success">Save Form</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include CSS for better styling -->
<style>

</style>



<script>
    document.getElementById('add-field').addEventListener('click', function() {
        const container = document.createElement('div');
        container.classList.add('form-group');

        // Create the input field for the label (Original Field Name)
        const fieldLabelInput = document.createElement('input');
        fieldLabelInput.setAttribute('type', 'text');
        fieldLabelInput.setAttribute('name', 'field_label[]'); // Store the original field label
        fieldLabelInput.setAttribute('placeholder', 'Field Label (e.g. Your Name)');
        fieldLabelInput.classList.add('form-control');
        fieldLabelInput.setAttribute('required', true);

        // Create the hidden input field to store the sanitized field name
        const sanitizedFieldNameInput = document.createElement('input');
        sanitizedFieldNameInput.setAttribute('type', 'hidden');
        sanitizedFieldNameInput.setAttribute('name', 'field_name[]');

        // Create the select dropdown for field type
        const fieldTypeSelect = document.createElement('select');
        fieldTypeSelect.classList.add('form-control');
        fieldTypeSelect.setAttribute('name', 'field_type[]');
        fieldTypeSelect.innerHTML = `
        <option value="text">Text</option>
        <option value="number">Number</option>
        <option value="textarea">Textarea</option>
        <option value="select">Dropdown</option>
    `;

        // Create the hidden options input field
        const fieldOptionsInput = document.createElement('input');
        fieldOptionsInput.setAttribute('type', 'text');
        fieldOptionsInput.setAttribute('placeholder', 'Options (comma-separated)');
        fieldOptionsInput.setAttribute('name', 'field_options[]');
        fieldOptionsInput.classList.add('form-control');
        fieldOptionsInput.style.display = 'none';

        // Create the remove button
        const removeButton = document.createElement('button');
        removeButton.classList.add('btn', 'btn-danger', 'remove-field');
        removeButton.innerHTML = 'Remove';

        // Append the elements to the container
        container.appendChild(fieldLabelInput); // Append the label input field
        container.appendChild(sanitizedFieldNameInput); // Append the hidden input field
        container.appendChild(fieldTypeSelect); // Append the field type dropdown
        container.appendChild(fieldOptionsInput); // Append the options input field (hidden by default)
        container.appendChild(removeButton); // Append the remove button

        // Append the container to the dynamic fields div
        document.getElementById('dynamic-fields').appendChild(container);

        // Handle display for options field if type is "select"
        fieldTypeSelect.addEventListener('change', function(e) {
            fieldOptionsInput.style.display = e.target.value === 'select' ? 'block' : 'none';
        });

        // Remove field functionality
        removeButton.addEventListener('click', function() {
            container.remove();
        });

        // Listen for field label input changes to sanitize name and set hidden input value
        fieldLabelInput.addEventListener('input', function() {
            // Replace spaces with underscores, trim, and set sanitized value for the hidden input
            const sanitizedFieldName = fieldLabelInput.value.trim().replace(/\s+/g, '_').toLowerCase();
            sanitizedFieldNameInput.value = sanitizedFieldName; // Set the hidden field name
        });
    });
</script>

@endsection