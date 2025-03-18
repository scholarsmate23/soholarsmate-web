@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
  <div class="form-container">
    <div class="loader" id="applyLoader"></div>

    <div class="form_area">
      <p class="form-title">FILL YOUR DETAILS HERE</p>
      <div id="success-message" class="alert alert-success d-none" role="alert"></div>
      <div id="error-message" class="alert alert-danger d-none" role="alert"></div>

      <form id="applicantApplyForm" action="{{ route('submitData') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form_group">
          <label class="sub_title">
            Select the Course You want to Enroll in:
          </label>
          <select class="form_style" name="course" id="course" required>
            <option value="Engineering">IIT-JEE(2 Year Foundation Course)</option>
            <option value="Engineering">IIT-JEE(1 Year Target Course)</option>
            <option value="Medical">NEET (2 Year Foundation Course)</option>
            <option value="Medical">NEET(1 Year Target Course)</option>
            <option value="Boards">PCM Boards</option>
            <option value="Boards">PCB Boards</option>
            <option value="Pre-Foundation">Pre-Foundation (8th, 9th, 10th)</option>
          </select>
        </div>
        <div class="form_group">
          <label for="name" class="sub_title"> Full Name </label>
          <input type="text" name="name" id="name" placeholder="Full Name" class="form_style" required />
        </div>
        <div class="form_group">
          <label for="phone" class="sub_title"> Phone Number </label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form_style" required />
        </div>
        <div class="form_group">
          <label for="email" class="sub_title"> Email Address </label>
          <input type="email" name="email" id="email" placeholder="Enter your email" class="form_style" required />
        </div>
        <div class="form_group">
          <label for="father_name" class="sub_title"> Father's Name </label>
          <input type="text" name="father_name" id="father_name" placeholder="Enter Father's Name" class="form_style" required />
        </div>
        <div class="form_group">
          <label for="mobile" class="sub_title"> Father Mobile Number </label>
          <input type="text" name="mobile" id="mobile" placeholder="Enter Father mobile number" class="form_style" required />
        </div>
        <div class="form_group">
          <label for="father_occupation" class="sub_title"> Occupation of Father </label>
          <input type="text" name="father_occupation" id="father_occupation" placeholder="Enter Occupation" class="form_style" required />
        </div>
        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="form_group w-full">
              <label for="dob" class="sub_title"> Date of Birth</label>
              <input type="date" name="dob" id="dob" class="form_style" required />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="form_group">
              <label for="category" class="sub_title"> Category </label>
              <select class="form_style" name="category" id="category" required>
                <option value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form_group formbold-pt-3">
          <label class="sub_title sub_title-2">
            Address Details
          </label>
          <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="area" id="area" placeholder="Enter area" class="form_style" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="city" id="city" placeholder="Enter city" class="form_style" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="state" id="state" placeholder="Enter state" class="form_style" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="post_code" id="post_code" placeholder="Post Code" class="form_style" required />
              </div>
            </div>
          </div>
        </div>
        <div class="form_group formbold-pt-3">
          <label class="sub_title sub_title-2">
            Educational Details
          </label>
          <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="school_name" id="school_name" placeholder="School/College Name" class="form_style" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="school_address" id="school_address" placeholder="Address" class="form_style" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <select class="form_style" name="boards" id="boards" required>
                  <option value="Boards">Boards</option>
                  <option value="CBSE">CBSE</option>
                  <option value="ICSE">ICSE</option>
                  <option value="Bihar Board">Bihar Board</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="form_group">
                <input type="text" name="grade" id="grade" placeholder="Grade" class="form_style" required />
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" id="submitBtn" class="form-btn">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
</section>



@include('blocks/footer')
@include('footer')