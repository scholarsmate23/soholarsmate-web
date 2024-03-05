@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<!-- contact -->
<section class="section bg-gray">
    <div class="container-fluid">
        <div class="row">
            @foreach ($images as $image)
            <div class="col-lg-4 col-sm-6 mb-5">
                <img src="{{ asset('assets/storage/gallery/' . $image->file_name. '.jpg') }}" alt="This is an image" width="100%" height="auto">
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- /contact -->

@include('blocks/footer') 
@include('footer')
            <img src="{{ asset('storage/' . $image->name) }}" alt="{{ $image->name }}">
