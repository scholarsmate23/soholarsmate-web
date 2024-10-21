@include('header')
@include('blocks/navigation')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary">{{ $form->form_name }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<section class="section">
    <div class="container">
        <div class="formbold-form-wrapper">
            <form id="dynamicForm" style="margin: 2rem;" method="POST" action="{{ route('submitForm', $form->id) }}">
                @csrf
                @foreach($formStructure as $field)
                <div class="formbold-mb-5">
                    <label class="formbold-form-label">{{ $field['label'] }} &nbsp; *</label>
                    @if($field['type'] === 'select')
                    <select name="{{ $field['name'] }}" class="formbold-form-input" required>
                        <option value="" disabled selected>Select an option</option>
                        @foreach($field['options'] as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                    @else
                    <input class="formbold-form-input" type="{{ $field['type'] }}" name="{{ $field['name'] }}" required>
                    @endif
                    <br>
                </div>
                @endforeach
                <button type="submit" class="formbold-btn">Submit</button>
            </form>
        </div>
    </div>
</section>

@include('blocks/footer')
@include('footer')

<script>
    // JavaScript to handle client-side validation and red border for empty fields
    document.getElementById('dynamicForm').addEventListener('submit', function(e) {
        var formValid = true;
        var inputs = document.querySelectorAll('.formbold-form-input');

        inputs.forEach(function(input) {
            if (!input.value) {
                input.style.border = '2px solid red';
                formValid = false;
            } else {
                input.style.border = ''; // Remove red border if input is valid
            }
        });

        if (!formValid) {
            e.preventDefault(); // Prevent form submission if validation fails
            alert("Please fill out all required fields.");
        }
    });
</script>