@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<!-- courses -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Target Course for NEET </h2>
                <p>The One-Year Target Course for NEET is a results-driven program tailored for students aspiring to excel in the NEET examination in a limited time. Covering the complete syllabus of Biology, Chemistry, and Physics, this intensive course focuses on in-depth understanding, time management, and problem-solving accuracy. Ideal for class 12 students or droppers, the program includes frequent mock tests, concept revision, and personalized doubt-clearing sessions. With a clear path to success, the Target Course empowers students to secure admission to top medical colleges and fulfill their dreams of a career in medicine.</p>
                <ul>
                    <li class="list-style">1 Years Program</li>
                    <li class="list-style">Entry Level : 12th Pass</li>
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
                    <td>9500</td>
                    <td>1710</td>
                    <td>11210.00</td>
                    </tr>

                    <tr>
                    <td>2nd Installment</td>
                    <td>9500</td>
                    <td>1710</td>
                    <td>11210.00</td>
                    </tr>

                    <tr>
                    <td>3rd Installment</td>
                    <td>9500</td>
                    <td>1710</td>
                    <td>11210.00</td>
                    </tr>

                    <tr>
                    <td>4th Installment</td>
                    <td>9500</td>
                    <td>1710</td>
                    <td>11210.00</td>
                    </tr>

                    <tr>
                    <td>5th Installment</td>
                    <td>9500</td>
                    <td>1710</td>
                    <td>11210.00</td>
                    </tr>

                    <tr>
                    <td>Total Fee</td>
                    <td>68000</td>
                    <td>12240</td>
                    <td>80240.00</td>
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
                    <li><a href="{{route('apply.form')}}" class="btn btn-primary btn-sm">Apply now</a></li>
                </ul>

            </div>
        </div>
</section>
<!-- /courses -->

@include('blocks/footer')
@include('footer')