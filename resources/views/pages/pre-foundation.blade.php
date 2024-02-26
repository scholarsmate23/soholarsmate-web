@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Head of Department</h3>
                <ul>
                    <h4><strong>Mr. Vikas Kumar</strong></h4>
                    <ul>
                        <p>Physics Faculty</p>
                        <ul class="list-inline">
                            <li class="card-list">Experience: 5 Year</li>
                            <li class="card-list">Expert - Science's Olympiad</li>
                        </ul>
                    </ul>
            </div>
            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Faculty Members</h3>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
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
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Mr. N.K. Jha</h4>
                                <p>M.A. (English)</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 20 year</li>
                                    <li class="card-list">Expert-Competitive English</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">Miss Sufiya Bano</h4>
                                <p>S.st/English Faculty</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience : 7 Year</li>
                                    <li class="card-list">M.A. (English)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Our Courses</h3>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">एकलव्य -Tenth</h4>
                                <p><a href="{{route('eklavya.tenth')}}">Know More</a></p>
                                <ul class="list-inline">
                                    <!-- <li class="card-list">Experience: 8 year</li>
                                    <li class="card-list">Faculty: Akash Institute,Pune</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- teacher -->
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">एकलव्य - Ninth</h4>
                                <p><a href="{{route('eklavya.ninth')}}">Know More</a></p>
                                <ul class="list-inline">
                                    <!-- <li class="card-list">Experience: 12 year</li>
                                    <li class="card-list">Ex-Faculty: Akash Institute, Delhi</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title">एकलव्य - Eighth</h4>
                                <p><a href="{{route('eklavya.eighth')}}">Know More</a></p>
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


@include('blocks/footer')
@include('footer')