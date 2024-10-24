@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="row">

            <div class="col-12" style="margin-bottom: 20px;">
                <h4>Explore Excellence in Board Exam Preparation: CBSE, ICSE, BSEB & More</h4><br>
                <p>Achieving success in school board examinations is crucial for every student's academic journey. Our tailored programs for various educational boards, including CBSE, ICSE, BSEB, and more, are designed to ensure that students excel academically while building a strong conceptual foundation. Our courses are carefully structured to align with the syllabus and expectations of each board, providing students with the confidence and skills they need to perform exceptionally well.</p><br>
            </div>
            <div class="col-12" style="margin-bottom: 20px;">

                <h3 class="section-title">Faculty Members</h3>
                <div class="row">

                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Mr. Kismat Kumar</h4>
                                <p>(Math faculty Pre-foundations)</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience:3 Year</li>
                                    <li class="card-list">Expert -Math's Olympiad</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Md. Raqeeb</h4>
                                <p>English Teacher </p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 5 year</li>
                                    <li class="card-list">Expert-Competitive English</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Mr. Vikas Kumar</h4>
                                <p>Physics Faculty</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience : 5 Year</li>
                                    <li class="card-list">Expert - Science's Olympiad</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Er. Rishabh Gupta
                                </h4>
                                <p>Physical chemistry</p>
                                <ul class="list-inline">
                                    <li class="card-list"> IIT KHARAGPUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Sarvesh Pratap Singh</h4>
                                <p>Math Faculty-JEE MAIN/ADV</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 8 year(IIT Kanpur)</li>
                                    <li class="card-list">Ex-Faculty: CP(KOTA), VMC (Delhi), Doubtnut (Delhi)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
            <div class="col-12" style="margin-bottom: 20px;">

                <h3 class="section-title">Our Courses</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">तरूण - Maths</h4>
                                <p><a href="{{route('tarun.math')}}">Know More</a></p>
                                <ul class="list-inline">
                                    <!-- <li class="card-list">Experience: 8 year</li>
                                    <li class="card-list">Faculty: Akash Institute,Pune</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-6 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">तरूण - Biology</h4>
                                <p><a href="{{route('tarun.bio')}}">Know More</a></p>
                                <ul class="list-inline">
                                    <!-- <li class="card-list">Experience: 12 year</li>
                                    <li class="card-list">Ex-Faculty: Akash Institute, Delhi</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

@include('blocks/footer')
@include('footer')