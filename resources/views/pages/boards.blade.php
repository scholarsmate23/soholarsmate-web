@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<section class="section">
    <div class="container">
        <div class="row">

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
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Apply for  Admission</h3>
                <ul>
                <li><a href="{{route('apply.form')}}" class="btn btn-primary btn-sm">Apply now</a></li>
            </ul>
                
        </div>
    </div>
</section>

<div class="ba-we-love-subscribers-wrap">
<a aria-label="Chat on WhatsApp" href="https://wa.me/+919102428333" target="_blank"> <img alt="Chat on WhatsApp" src="{{ asset('assets/source/images/icons/WhatsAppButtons.png') }}" />
</div>
@include('blocks/footer')
@include('footer')