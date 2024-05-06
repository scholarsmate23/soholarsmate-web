<!-- banner-feature -->
<section class="overflow-md-hidden">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-8 col-lg-7">
                <h2 class="section-title" style="margin: 0 40px;">Latest News and Events</h2>
                <div class="accordion accordion-flush" style="margin: 10px 60px;" id="accordionFlushExample">
                    @foreach($news as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{$item->id}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$item->id}}" aria-expanded="false" aria-controls="flush-collapse{{$item->id}}">
                                    <strong>{{ $item->title }}</strong>
                                </button>
                            </h2>
                            <div id="flush-collapse{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$item->id}}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li class="list-style">
                                        {{ $item->description }}
                                        <a style="color:blue;" href="{{ route('news.details', ['id' => $item->id]) }}">Click to know More</a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <img class="img-fluid w-100" src="{{asset('assets/source/images/banner/abt.jpg')}}" alt="banner-feature">
            </div>
        </div>
    </div>
</section>
<!-- /banner-feature -->
