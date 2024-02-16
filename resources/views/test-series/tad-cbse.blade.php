
@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<!-- courses -->
<section class="section">
    <div class="container">
            <!-- <div class="col-lg-12 mb-10">
                <button style="float: right;" class="btn btn-primary btn-sm">Apply for Test-Series</button>            
            </div> -->
            <div class="col-lg-12 mt-5">
                <img style="display: block;margin-left: auto; margin-right: auto;" src="{{asset('assets/storage/test-series/TAD-CBSE-2024.jpg')}}" alt="" srcset="">
            </div>
    </div>
</section>
<!-- /courses -->

@include('blocks/footer') 
@include('footer')