<!-- hero slider -->
<section class="hero-section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach($data as $key => $slide)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($data as $key => $slide)
                <div class="item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/slider/' . $slide->file_name) }}" alt="Slider-{{ $slide->id }}" style="width:100%;">
                </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="span-style"><i class="fa fa-chevron-left" style="font-size:24px"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="span-style"><i class="fa fa-chevron-right" style="font-size:24px"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- /hero slider -->
