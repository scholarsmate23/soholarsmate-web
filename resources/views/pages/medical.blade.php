@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 20px;">
                <h4>Your Pathway to a Successful Medical Career</h4><br>
                <p>Preparing for a career in medicine is a challenging yet rewarding journey, and our Medical Division for NEET is designed to guide aspiring doctors through every step of the preparation process. NEET (National Eligibility cum Entrance Test) is the gateway to securing admission in prestigious medical colleges across the country. With our comprehensive NEET preparation program, students are given the right tools, guidance, and resources to excel in this competitive examination.</p><br>
                <h6>Why Choose Our NEET Program?</h6><br>
                <p>The NEET exam is highly competitive, requiring in-depth knowledge, strong conceptual understanding, and strategic preparation. Our Medical Division specializes in building a solid foundation in Biology, Physics, and Chemistry, providing students with an edge in this national-level examination.</p>
                <h3 class="section-title">Head of Department</h3>
                <ul>
                    <h4><strong>Dr. Iraza Idrisi</strong></h4>
                    <ul>
                        <p></p>
                        <ul class="list-inline">
                            <li class="card-list">Biology Faculty-NEET</li>
                            <li class="card-list">Experience: 12 year</li>
                            <li class="card-list">Ex-Faculty: Akash Institute(Delhi), Baluni classes (uttrakhand) , Abhyas Foundation (Gujrat),B.Shaper's (Himachal)
                            </li>
                        </ul>
                    </ul>
            </div>
            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Faculty Members</h3>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Mr. Shailesh Namdeo Khandagle</h4>
                                <p>Guest Chemistry Faculty</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 8 year</li>
                                    <li class="card-list">Faculty: Akash Institute,Pune</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Mr. Jitendra Yadav</h4>
                                <p>Chemistry Faculty</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 6 year</li>
                                    <li class="card-list">Ex-Faculty: Edu mantra Institute</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Mr. Amritanshu Anand</h4>
                                <p>Guest Faculty Physics</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 12 year</li>
                                    <li class="card-list">Ex-Faculty: Akash Institute, Delhi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Er. Vijay Kumar</h4>
                                <p>Physics Faculty</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 5 Year(NIT Bhopal)</li>
                                    <li class="card-list">Ex-Faculty: Motion, Kota</li>
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
                </div>
            </div>

            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Our Courses</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">उद्घोष-NEET (Foundation Course)</h4>
                                <p><a href="{{route('udgosh.neet')}}">Know More</p>
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
                                <h4 class="card-title">सफल-NEET (Target Course)</h4>
                                <p><a href="{{route('safal.neet')}}">Know More</a></p>
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