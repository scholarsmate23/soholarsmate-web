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
        <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
            <div class="responsive-wrapper responsive-wrapper-wxh-572x612">
                <object class="pdf" data="{{$pdfPath}}" width="800" height="500"></object>
                <!-- <embed   src="{{$pdfPath}}"> -->
            </div>
        </div>
    </div>
</section>


@include('blocks/footer')
@include('footer')