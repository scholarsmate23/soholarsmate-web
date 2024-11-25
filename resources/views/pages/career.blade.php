@include('header')
@include('blocks/navigation')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary">CAREER</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <p>
      <h3> Current-Opening</h3>
      Here's to many more. Our Current Openings. Explore the opportunities currently available across our departments and locations and send in your application ...
      <br /> <br />
      </p>

      <p>

      <table width="100%">
        <thead>
          <tr>
            <th> Position</th>
            <th>Location</th>
            <th> Description</th>
            <th> Apply Now</th>
          </tr>
        </thead>
        <tbody>
          @foreach($careers as $career)
          <tr>
            <td>{{ $career->position }}</td>
            <td>{{ $career->location }}</td>
            <td><a href="{{ route('discription.viewer', ['id' => $career->id]) }}">Know More ..</a></td>
            <td>
              <button
                class=" btn-primary btn-sm"
                data-toggle="modal"
                data-target="#applyModal"
                data-career-id="{{ $career->id }}"
                data-role="{{ $career->position }}">
                Apply Now
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </p>

    </div>
  </div>
</section>
<!-- /contact -->



<!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" display="hidden" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="error-message" class="alert alert-danger d-none" role="alert"></div>
      <div id="success-message" class="alert alert-success d-none" role="alert"></div>

      <form id="applicationForm" action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="applyModalLabel">Apply for <span id="modalRole"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="error-message" class="alert alert-danger d-none"></div>
          <input type="hidden" name="career_id" id="careerId" />
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
            <label for="resume">Resume(only pdf,doc, docx allowed)</label>
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
            <input type="text" class="form-control" id="role" name="role" readonly />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="button" class="btn-primary btn-sm" id="submitApplication">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</div>


@include('blocks/footer')
@include('footer')