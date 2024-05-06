@include('header') 
@include('blocks/navigation') 

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >CAREER</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
  <p>
    <h3> Current-Opening</h3>
    Here's to many more. Our Current Openings. Explore the opportunities currently available across our departments and locations and send in your application ...
    <br /> <br />
  </p>

  <p>

  <table width="100%">
    <thead>
      <tr>
        <th> Position</th>
        <th>Location</th>
        <th> Description</th>
        <th> Apply Now</th>
      </tr>
    </thead>
    <tbody>
    @foreach($careers as $career)
    <tr>
        <td>{{ $career->position }}</td>
        <td>{{ $career->location }}</td>
        <td><a href="{{ route('discription.viewer', ['id' => $career->id]) }}">Know More ..</a></td>
        <td><button class="btn btn-primary btn-sm">Apply Now</button></td>
    </tr>
@endforeach
    </tbody>
  </table>
  </p>

        </div>
    </div>
</section>
<!-- /contact -->

@include('blocks/footer') 
@include('footer')