@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Head of Department</h3>
                <ul>
                    <h4><strong>Sarvesh Pratap Singh</strong></h4>
                    <ul>
                        <p></p>
                        <ul class="list-inline">
                            <li class="card-list">Math Faculty-JEE MAIN/ADV</li>
                            <li class="card-list">Experience: 8 year</li>
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
                                <h4 class="card-title">Mr. Vikas Kumar</h4>
                                <p>Physics Faculty</p>
                                <ul class="list-inline">
                                    <li class="card-list">Experience: 5 Year</li>
                                    <li class="card-list">Expert - Science's Olympiad</li>
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
                </div>
            </div>

            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Our Courses</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mb-5 mb-lg-0">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <h4 class="card-title"><a href="{{route('udgosh.jee')}}">उद्घोष-JEE (Foundation Course)</a></h4>
                                <p>Director Scholar's Mate</p>
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
                                <h4 class="card-title"><a href="{{route('safal.jee')}}">सफल -JEE (Target Course )</a></h4>
                                <p>Biology Faculty-NEET</p>
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