@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="formbold-main-wrapper">
            <div class="formbold-form-wrapper">
                <div id="success-message" class="alert alert-success d-none" role="alert"></div>
                <div id="error-message" class="alert alert-danger d-none" role="alert"></div>
                <div class="loader" id="loader" style="display: none;"></div>
                <form style="margin: 2rem;" id="tadFeedbackForm" action="{{ route('submitFeedback') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label"> Name </label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="class" class="formbold-form-label"> Class </label>
                        <select class="formbold-form-select" name="class" id="class" required>
                            <option value="10">10</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="boards" class="formbold-form-label"> Boards </label>
                        <select class="formbold-form-select" name="boards" id="boards" required>
                            <option value="ICSE">ICSE</option>
                            <option value="CBSE">CBSE</option>
                            <option value="BOARDS">BOARDS</option>
                        </select>
                    </div>
                    <div class="formbold-mb-5">
                        <label for="address" class="formbold-form-label"> Address </label>
                        <input type="text" name="address" id="address" placeholder="Enter your address" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="mobile" class="formbold-form-label"> Mobile </label>
                        <input type="text" name="mobile" id="mobile" placeholder="Enter your mobile number" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="father_name" class="formbold-form-label"> Father's Name </label>
                        <input type="text" name="father_name" id="father_name" placeholder="Enter father's name" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="father_mobile" class="formbold-form-label"> Father's Mobile </label>
                        <input type="text" name="father_mobile" id="father_mobile" placeholder="Enter father's mobile number" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="mother_name" class="formbold-form-label"> Mother's Name </label>
                        <input type="text" name="mother_name" id="mother_name" placeholder="Enter mother's name" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="mother_mobile" class="formbold-form-label"> Mother's Mobile </label>
                        <input type="text" name="mother_mobile" id="mother_mobile" placeholder="Enter mother's mobile number" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="photo" class="formbold-form-label">Passport Photo (Max 2 MB)</label>
                        <input type="file" name="photo" id="photo" class="formbold-form-input" accept="image/*" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="admit_card" class="formbold-form-label"> Admit Card (Max 2 MB)</label>
                        <input type="file" name="admit_card" id="admit_card" class="formbold-form-input" accept="image/*" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label"> Email </label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" required />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="feedback" class="formbold-form-label"> Your Feedback regarding TAD/Scholarsmate </label>
                        <textarea name="feedback" id="feedback" placeholder="Enter your feedback" class="formbold-form-input" required></textarea>
                    </div>
                    <div>
                        <button id="submitBtn" class="formbold-btn">Submit Feedback</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('blocks/footer')
@include('footer')