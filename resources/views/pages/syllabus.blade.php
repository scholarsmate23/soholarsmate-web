@include('header') 
@include('blocks/navigation') 
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >Syllabus</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<section class="section">
    @foreach($syllabus as $item)
        <div class="container mb-20">
            <div class="row">
                <h3 class="section-title">{{ ucfirst($item->course_type) }} Division</h3>

                <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                        <th class="table-head">Exams/Course</th>
                        <th class="table-head">Syllabus</th>
                    </tr>

                    <tr>
                        <td>{{ $item->name }}</td>
                        <td><a href="{{ route('pdf.download', ['id' => $item->id]) }}">Click to Download</a></td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
</section>


@include('blocks/footer') 
@include('footer')