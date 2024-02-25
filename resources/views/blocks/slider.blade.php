<!-- hero slider -->
<section class="hero-section"  >
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('assets/source/images/slider/S1.jpg')}}" alt="Slider-1" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset('assets/source/images/slider/S2.jpg')}}" alt="Slider-2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{asset('assets/source/images/slider/S3.jpg')}}" alt="Slider-3" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset('assets/source/images/slider/S4.jpg')}}" alt="Slider-3" style="width:100%;">
      </div>
    </div>

    <!-- <div class="item">
        <img src="{{asset('assets/source/images/slider/S4.jpg')}}" alt="New york" style="width:100%;">
      </div>
    </div> -->

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