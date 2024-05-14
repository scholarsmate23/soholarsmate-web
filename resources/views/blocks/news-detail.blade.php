@include('header')
@include('blocks/navigation')



<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary">{{$filename}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<section class="section">
    <div class="container">
        <div class="col-lg-12">
            <img style="display: block;margin-left: auto; margin-right: auto;" src="{{$pdfPath}}" alt="" srcset="">
        </div>
    </div>
</section>


@include('blocks/footer')
@include('footer')