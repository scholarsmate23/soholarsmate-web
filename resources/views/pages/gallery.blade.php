@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<!-- contact -->
<!-- <section class="section bg-gray">
    <div class="container-fluid">
        <div class="row">
            @foreach ($images as $image)
            <div class="col-lg-4 col-sm-6 mb-5">
                <img src="{{ asset('assets/storage/gallery/' . $image->file_name. '.jpg') }}" alt="This is an image" width="100%" height="auto">
            </div>
            @endforeach
        </div>
    </div>
</section> -->

<section class="section bg-gray">
    <div class="container-fluid">
        @php
            $eventImages = [];
            $distributionImages = [];

            foreach ($images as $image) {
                if ($image->category === 'event') {
                    $eventImages[] = $image;
                } elseif ($image->category === 'distribution') {
                    $distributionImages[] = $image;
                }
            }
        @endphp

        @if (!empty($eventImages))
        <h2>Events</h2>

        <div class="row">
            <!-- <h2>Event Category</h2> -->
            @foreach ($eventImages as $image)
            <div class="col-lg-4 col-sm-6 mb-5">
                <img src="{{ asset('storage/gallery/' . $image->file_name) }}" alt="This is an image" width="100%" height="auto">
            </div>
            @endforeach
        </div>
        @endif

        @if (!empty($distributionImages))
        <h2>Result Distribution</h2>

        <div class="row">
            <!-- <h2>Distribution Category</h2> -->
            @foreach ($distributionImages as $image)
            <div class="col-lg-4 col-sm-6 mb-5">
                <img src="{{ asset('storage/gallery/' . $image->file_name) }}" alt="This is an image" width="100%" height="auto">
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>


<!-- /contact -->

@include('blocks/footer') 
@include('footer')
            <!-- <img src="{{ asset('storage/' . $image->name) }}" alt="{{ $image->name }}"> -->
