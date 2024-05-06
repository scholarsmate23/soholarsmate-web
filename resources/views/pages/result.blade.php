@include('header')
@include('blocks/navigation')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Exams Result</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<section class="section">
    <div class="container">
        <div class="row">
            <table class="table-reset" cellspacing=0 cellpadding=0>
                <tr>
                    <th class="table-head">Results</th>
                    <th class="table-head">View</th>

                </tr>
                @foreach($results as $result)
                <tr>
                    <td>{{ $result->exam }}</td>
                    <td><a href="{{ route('pdf.viewer', ['id' => $result->id]) }}" target="_blank">Click to view</a></td>
                </tr>
                @endforeach


            </table>
        </div>
    </div>
</section>


@include('blocks/footer')
@include('footer')