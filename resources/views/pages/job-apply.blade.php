@include('header')
@include('blocks/navigation')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary">Apply for the Role of {{ $career->position }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- application form -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="loader" id="loader"></div>
            <div class="col-md-8 offset-md-2">
                <div id="error-message" class="alert alert-danger d-none" role="alert"></div>
                <div id="success-message" class="alert alert-success d-none" role="alert"></div>

                <form id="applicationForm" action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required />
                    </div>
                    <div class="form-group">
                        <label for="address">Current Address</label>
                        <textarea class="form-control" id="address" name="address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="resume">Resume (only pdf allowed)</label>
                        <input type="file" class="form-control" id="resume" name="resume" required />
                    </div>
                    <div class="form-group">
                        <label for="availability">Expected Availability of Joining</label>
                        <input type="date" class="form-control" id="availability" name="availability" required />
                    </div>
                    <div class="form-group">
                        <label for="salary">Expected Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" required />
                    </div>
                    <div class="form-group">
                        <label for="role">Role Applying For</label>
                        <input type="text" class="form-control" id="role" name="role" value="{{ $career->position }}" readonly />
                    </div>
                    <input type="hidden" name="career_id" value="{{ $career->id }}" />
                    <div class="form-group text-center">
                        <button type="submit" class="btn-primary btn-sm">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /application form -->

@include('blocks/footer')
@include('footer')