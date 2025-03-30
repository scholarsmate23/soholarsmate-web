@include('header')
@include('blocks/navigation')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary">Exams Result</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<section class="section">
  <div class="container">
    <div class="row">
      @foreach($results as $result)
      <div class="col-md-4 mb-4">
        <div class="result-card">
          <a class="card1" href="{{ route('result.course', ['id' => $result->course_type]) }}">
            <p><strong>{{ $result->course_type }}</strong></p>
            <p class="small">Click to View the Result.</p>
            <div class="go-corner">
              <div class="go-arrow">
                →
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>



@include('blocks/footer')
@include('footer')