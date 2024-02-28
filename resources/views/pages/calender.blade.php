@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<section  class="section">
    <div class="container">
    <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
            <div class="responsive-wrapper responsive-wrapper-wxh-572x612"style="-webkit-overflow-scrolling: touch; overflow: auto;">
            <iframe src="{{asset('assets/storage/documents/CALENDAR.pdf')}}"> </iframe>
            </div>
        </div>
    </div>
</section>


@include('blocks/footer') 
@include('footer')