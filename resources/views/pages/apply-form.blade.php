@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
  <div class="container">
    <div class="formbold-main-wrapper">
      <div class="loader" id="applyLoader"></div>

      <div class="formbold-form-wrapper">
        <div id="success-message" class="alert alert-success d-none" role="alert"></div>
        <div id="error-message" class="alert alert-danger d-none" role="alert"></div>

        <form style="margin: 2rem;" id="applicantApplyForm" action="{{ route('submitData') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="formbold-mb-5">
            <label class="formbold-form-label">
              Select the Course You want to Enroll in:
            </label>
            <select class="formbold-form-select" name="course" id="course" required>
              <option value="Engineering">IIT-JEE(2 Year Foundation Course)</option>
              <option value="Engineering">IIT-JEE(1 Year Target Course)</option>
              <option value="Medical">NEET (2 Year Foundation Course)</option>
              <option value="Medical">NEET(1 Year Target Course)</option>
              <option value="Boards">PCM Boards</option>
              <option value="Boards">PCB Boards</option>
              <option value="Pre-Foundation">Pre-Foundation (8th, 9th, 10th)</option>
            </select>
          </div>
          <div class="formbold-mb-5">
            <label for="name" class="formbold-form-label"> Full Name </label>
            <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" required />
          </div>
          <div class="formbold-mb-5">
            <label for="father_name" class="formbold-form-label"> Father's Name </label>
            <input type="text" name="father_name" id="father_name" placeholder="Enter Father's Name" class="formbold-form-input" required />
          </div>
          <div class="formbold-mb-5">
            <label for="phone" class="formbold-form-label"> Phone Number </label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" required />
          </div>
          <div class="formbold-mb-5">
            <label for="father_occupation" class="formbold-form-label"> Occupation of Father </label>
            <input type="text" name="father_occupation" id="father_occupation" placeholder="Enter Occupation" class="formbold-form-input" required />
          </div>
          <div class="formbold-mb-5">
            <label for="mobile" class="formbold-form-label"> Father Mobile Number </label>
            <input type="text" name="mobile" id="mobile" placeholder="Enter your phone number" class="formbold-form-input" required />
          </div>
          <div class="formbold-mb-5">
            <label for="email" class="formbold-form-label"> Email Address </label>
            <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" required />
          </div>
          <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5 w-full">
                <label for="dob" class="formbold-form-label"> Date of Birth</label>
                <input type="date" name="dob" id="dob" class="formbold-form-input" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <label for="category" class="formbold-form-label"> Category </label>
                <select class="formbold-form-select" name="category" id="category" required>
                  <option value="General">General</option>
                  <option value="OBC">OBC</option>
                  <option value="SC">SC</option>
                  <option value="ST">ST</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
          </div>
          <div class="formbold-mb-5 formbold-pt-3">
            <label class="formbold-form-label formbold-form-label-2">
              Address Details
            </label>
            <div class="flex flex-wrap formbold--mx-3">
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="area" id="area" placeholder="Enter area" class="formbold-form-input" required />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="city" id="city" placeholder="Enter city" class="formbold-form-input" required />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="state" id="state" placeholder="Enter state" class="formbold-form-input" required />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="post_code" id="post_code" placeholder="Post Code" class="formbold-form-input" required />
                </div>
              </div>
            </div>
          </div>
          <div class="formbold-mb-5 formbold-pt-3">
            <label class="formbold-form-label formbold-form-label-2">
              Educational Details
            </label>
            <div class="flex flex-wrap formbold--mx-3">
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="school_name" id="school_name" placeholder="School/College Name" class="formbold-form-input" required />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="school_address" id="school_address" placeholder="Address" class="formbold-form-input" required />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <select class="formbold-form-select" name="boards" id="boards" required>
                    <option value="Boards">Boards</option>
                    <option value="CBSE">CBSE</option>
                    <option value="ICSE">ICSE</option>
                    <option value="Bihar Board">Bihar Board</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="grade" id="grade" placeholder="Grade" class="formbold-form-input" required />
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" id="submitBtn" class="btn-primary btn-sm">Apply</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



@include('blocks/footer')
@include('footer')