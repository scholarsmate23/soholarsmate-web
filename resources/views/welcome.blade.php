@include('header')
@include('blocks/navigation')
@include('blocks/slider')
@include('blocks/banner-feature')
@include('blocks/notice')
@include('blocks/about')
@include('blocks/scholarship-detail')
<!-- courses -->
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <!-- <div>
                        <a href="{{route('course')}}" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
                    </div> -->
                </div>
            </div>
        </div>
        @include('blocks/course')
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="courses.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /courses -->

@include('blocks/cta')

<!-- events -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <!-- <div>
                        <a href="{{route('events')}}" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
                    </div> -->
                </div>
            </div>
        </div>
        @include('blocks/events')
        <!-- mobile see all button -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{route('course')}}" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
            </div>
        </div>
    </div>
</section>
<!-- /events -->
@include('blocks/founders')
@include('blocks/teachers')

<!-- blog -->
<!-- <section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Latest News</h2>
            </div>
        </div>
    </div>
</section> -->


<!-- /blog -->

@include('blocks/footer')
@include('footer')