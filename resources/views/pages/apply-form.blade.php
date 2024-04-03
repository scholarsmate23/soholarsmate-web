@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
  <div class="container">
    <div class="formbold-main-wrapper">

      <div class="formbold-form-wrapper">
        <form id="applicantForm">
        @csrf
          <div class="formbold-mb-5">
            <label class="formbold-form-label">
              Select the Course You want to Enroll in:
            </label>

            <select class="formbold-form-select" name="course" id="course">
              <option value="Engineering">Engineering</option>
              <option value="Medical">Medical</option>
              <option value="Boards">Boards</option>
              <option value="Pre-Foundation">Pre-Foundation</option>
            </select>
          </div>
          <div class="formbold-mb-5">
            <label for="name" class="formbold-form-label"> Full Name </label>
            <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" />
          </div>
          <div class="formbold-mb-5">
            <label for="phone" class="formbold-form-label"> Father's Name </label>
            <input type="text" name="father_name" id="father_name" placeholder="Enter Father's Name" class="formbold-form-input" />
          </div>
          <div class="formbold-mb-5">
            <label for="phone" class="formbold-form-label"> Mother's Name </label>
            <input type="text" name="mother_name" id="mother_name" placeholder="Enter Father's Name" class="formbold-form-input" />
          </div>
          <div class="formbold-mb-5">
            <label for="phone" class="formbold-form-label"> Occupation of Father </label>
            <input type="text" name="father_occupation" id="father_occupation" placeholder="Enter Occupation" class="formbold-form-input" />
          </div>
          <div class="formbold-mb-5">
            <label for="phone" class="formbold-form-label"> Occupation of Mother</label>
            <input type="mother_occupation" name="mother_occupation" id="mother_occupation" placeholder="Enter your phone number" class="formbold-form-input" />
          </div>
          <div class="formbold-mb-5">
            <label for="phone" class="formbold-form-label"> Phone Number </label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" />
          </div>
          <div class="formbold-mb-5">
            <label for="email" class="formbold-form-label"> Email Address </label>
            <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" />
          </div>
          <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5 w-full">
                <label for="date" class="formbold-form-label"> Date </label>
                <input type="date" name="dob" id="dob" class="formbold-form-input"/>
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <label for="time" class="formbold-form-label"> Blood Group </label>
                <input type="text" name="blood_group" id="blood_group" class="formbold-form-input" />
              </div>
            </div>
          </div>
          <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5 w-full">
                <label for="date" class="formbold-form-label"> Category </label>
                <select class="formbold-form-select" name="category" id="category">
                  <option value="General">General</option>
                  <option value="OBC">OBC</option>
                  <option value="SC">SC</option>
                  <option value="ST">SC</option>
                  <option value="ST">PH</option>

                </select>
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <label for="time" class="formbold-form-label"> Nationality </label>
                <input type="text" name="nationality" id="nationality" class="formbold-form-input" />
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
                  <input type="text" name="area" id="area" placeholder="Enter area" class="formbold-form-input" />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="city" id="city" placeholder="Enter city" class="formbold-form-input" />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="state" id="state" placeholder="Enter state" class="formbold-form-input" />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="post_code" id="post_code" placeholder="Post Code" class="formbold-form-input" />
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
                  <input type="text" name="school_name" id="school_name" placeholder="School/College Name" class="formbold-form-input" />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <input type="text" name="school_address" id="school_address" placeholder="Address" class="formbold-form-input" />
                </div>
              </div>
              <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                  <select class="formbold-form-select" name="boards" id="boards">
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
                  <input type="text" name="grade" id="grade" placeholder="Grade" class="formbold-form-input" />
                </div>
              </div>
            </div>
          </div>

          <div>
            <button id="submitBtn" class="formbold-btn">Apply</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>



<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <div class="modal-body">
                   <H4>Application Sent successfully.</H4>
                   <h5>You Will Get an Update form the Admission Department.</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeModalBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>

@include('blocks/footer')
@include('footer')