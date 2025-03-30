@include('header')
@include('blocks/navigation')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary">{{$results[0]['course_type']}} Results</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<section class="section">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-responsive-md" cellspacing=0 cellpadding=0>
                <tr>
                    <th style="color: #fff;" class="table-head">Name of Exams</th>
                    <th style="color: #fff;" class="table-head text-center">View</th>

                </tr>
                @foreach($results as $result)
                <tr>
                    <td> <strong>{{ $result->exam }}</strong></td>
                    <td class="text-center"><a href="{{ route('pdf.viewer', ['id' => $result->id]) }}" target="_blank"><i class="fa fa-eye" style="font-size: x-large !important;" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach


            </table>
        </div>
    </div>
</section>


@include('blocks/footer')
@include('footer')