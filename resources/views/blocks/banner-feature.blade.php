<!-- banner-feature -->
<section class="overflow-md-hidden">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-8 col-lg-7">
                <h2 class="section-title" style="margin: 0 40px;">Latest News and Events</h2>
                <div class="accordion accordion-flush" style="margin: 10px 60px;" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                <strong>Admission Open for the Courses</strong>
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul class="list-design">
                                    <li class="list-style"> उद्घोष-JEE (Foundation Course) <a href="{{route('udgosh.jee')}}"> <strong>Know More</strong></a></li>
                                    <li class="list-style">सफल -JEE (Target Course) <a href="{{route('safal.jee')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">उद्घोष-NEET (Foundation Course) <a href="{{route('udgosh.neet')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">सफल-NEET (Target Course) <a href="{{route('safal.neet')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">एकलव्य -Tenth <a href="{{route('home')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">एकलव्य - Ninth <a href="{{route('home')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">एकलव्य - Eighth <a href="{{route('home')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">तरूण - Maths <a href="{{route('home')}}"><strong>Know More</strong></a></li>
                                    <li class="list-style">तरूण - Biology <a href="{{route('home')}}"><strong>Know More</strong></a></li>
                            </div>
                        </div>
                    </div>
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