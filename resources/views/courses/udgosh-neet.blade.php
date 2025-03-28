@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<!-- courses -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Foundation Course for NEET</h3>
                <p>The Foundation Course module is thoughtfully curated to cover the entire syllabus of Biology, Chemistry, and Physics, enabling students to perform exceptionally well in their school board exams while establishing a strong base for NEET. This holistic program bridges foundational knowledge with advanced concepts, ensuring students are well-prepared for the challenges of classes 11 and 12 as well as the highly competitive NEET exam. With a focus on conceptual clarity, critical thinking, and problem-solving, the Foundation Course empowers students to excel academically and achieve their dreams in the field of medicine.</p>
                <ul>
                    <li class="list-style">2 Years Program</li>
                    <li class="list-style">Entry Level : 10th Pass</li>
                    <li class="list-style">Entry Criteria : Entrance Test</li>
                </ul>
            </div>
        </div>
</section>
<!-- /about -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Features</h3>
                <ul>
                    <li class="list-style">Prepare NEET along with 11th and 12th</li>
                    <li class="list-style">Regular Classes</li>
                    <li class="list-style">Study Material of All Subject will provided</li>
                    <li class="list-style">DPP/Assignments</li>
                    <li class="list-style">Doubt Session</li>
                    <li class="list-style">Testing Process<ul>
                            <li class="list-style">Regular Test (15 Days Intervals)</li>
                            <li class="list-style">Year Planner Available</li>
                            <li class="list-style">Feedbacks</li>
                        </ul>
                    </li>
                    <li class="list-style">Syllabus <a href="{{route('syllabus')}}">Download From here</a></li>
                    <li class="list-style">Crash Course (Revision cum Test Planner) <a href="{{route('prayash.jee')}}">Know More</a></li>
                </ul>
            </div>

            <div class="col-12" style="margin-top: 20px;">
                <h2>Note:</h2>
                <ul class="list-style">
                    <li class="list-style">Non-Attending Student may also study here.</li>
                    <li class="list-style">Seprate Hostel Facility Available for both Boys and Girls</li>
                </ul>
            </div>
        </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Fee Structure</h3>
                <p>Contact Account Section for Fee Details and Payments.</p>
                <!-- <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Fixed Charges and Tution Fee</th>
                    <th class="table-head">Fee</th>
                    <th class="table-head">GST</th>
                    <th class="table-head">Total Fee</th>  
                    </tr>
                    <tr>
                    <td>Registration Fee</td>
                    <td>10000</td>
                    <td>1800</td>
                    <td>11800.00</td>
                    </tr>
                    <tr>
                    <td>Uniform/Bag/DPP/Test-Series/Maintance Charges</td>
                    <td>20000</td>
                    <td>3600</td>
                    <td>23600.00</td>
                    </tr>

                    <tr>
                    <td>1st Installment</td>
                    <td>21200</td>
                    <td>3816</td>
                    <td>25016.00</td>
                    </tr>

                    <tr>
                    <td>2nd Installment</td>
                    <td>21200</td>
                    <td>3816</td>
                    <td>25016.00</td>
                    </tr>

                    <tr>
                    <td>3rd Installment</td>
                    <td>21200</td>
                    <td>3816</td>
                    <td>25016.00</td>
                    </tr>

                    <tr>
                    <td>4th Installment</td>
                    <td>21200</td>
                    <td>3816</td>
                    <td>25016.00</td>
                    </tr>

                    <tr>
                    <td>5th Installment</td>
                    <td>21200</td>
                    <td>3816</td>
                    <td>25016.00</td>
                    </tr>

                    <tr>
                    <td>Total Fee</td>
                    <td>136000</td>
                    <td>24480</td>
                    <td>160480.00</td>
                    </tr>
                </table> -->


            </div>
        </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Apply for Admission</h3>
                <ul>
                    <li><a href="{{route('apply.form')}}" class="btn-primary btn-sm">Apply now</a></li>
                </ul>

            </div>
        </div>
</section>
<!-- /courses -->

@include('blocks/footer')
@include('footer')