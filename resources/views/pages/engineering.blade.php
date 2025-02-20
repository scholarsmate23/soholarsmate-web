@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 20px;">
                <h4>Your Gateway to Top Engineering Colleges</h4><br>
                <p>The journey to becoming a top engineer begins with excelling in the highly competitive IIT-JEE (Joint Entrance Examination). The exam, split into JEE Main and JEE Advanced, is the stepping stone for aspiring engineers to secure a spot in India's prestigious IITs, NITs, IIITs, and other top engineering institutions. Our Engineering Division is dedicated to helping students achieve their dreams by offering a well-rounded preparation program that targets both JEE Main and JEE Advanced.</p><br>
                <h5>Why Choose Our IIT-JEE Program?</h5>
                <p>Preparing for IIT-JEE requires more than just hard work—it demands strategic preparation, a deep understanding of concepts, and rigorous practice. Our specialized IIT-JEE program is designed to equip students with the knowledge, skills, and confidence needed to excel in this challenging examination.</p>
                <h3 class="section-title">Head of Department</h3>
                <ul>
                    <h4><strong>Sarvesh Pratap Singh</strong></h4>
                    <ul>
                        <p></p>
                        <ul class="list-inline">
                            <li class="card-list">Math Faculty-JEE MAIN/ADV</li>
                            <li class="card-list">Experience: 8 year(IIT Kanpur)</li>
                            <li class="card-list">Ex-Faculty: CP(KOTA), VMC (Delhi), Doubtnut (Delhi)</li>
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
                                <h4 class="card-title">उद्घोष-JEE (Foundation Course)</h4>
                                <p><a href="{{route('udgosh.jee')}}">Know More</a></p>
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
                                <h4 class="card-title">सफल -JEE (Target Course )</a></h4>
                                <p><a href="{{route('safal.jee')}}">Know More</a></p>
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