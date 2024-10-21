@include('header')
@include('blocks/navigation')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary">NEWS/EVENTS</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
    <div class="container">
        <!-- event -->
        <div class="row justify-content-center">
            <!-- event -->


            @foreach ($data as $event)
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-body">
                        <!-- location -->
                        <a href="{{ route('event.details', ['id' => $event->id]) }}">
                            <h4 class="card-title">{{ $event['title'] }}</h4>
                        </a>
                        <p>Commencement On: <strong>{{ $event['event_on'] }}</strong></p>
                        <p><i class="ti-location-pin text-primary mr-2"></i>{{ $event['location'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- /courses -->

@include('blocks/footer')
@include('footer')