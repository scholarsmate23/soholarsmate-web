@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<section  class="section">
    <div class="container mb-20">
        <div class="row">
                <h3 class="section-title">Engineering Division</h3>

                <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Exams/Course</th>
                    <th class="table-head">Syllabus</th>
                    </tr>

                    <tr>
                    <td>JEE Main</td>
                    <td><a href="{{ route('pdf.download', ['id' => 1]) }}">Click to Download</a></td>
                    </tr>

                    <tr>
                    <td>JEE Advance</td>
                    <td><a href="{{ route('pdf.download', ['id' => 2]) }}">Click to Download</a></td>
                    </tr>

                </table>
        </div>
    </div>

    <div class="container mb-20">
        <div class="row">
                <h3 class="section-title">Medical Division</h3>

                <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Exams/Course</th>
                    <th class="table-head">Syllabus</th>
                    </tr>

                    <tr>
                    <td>NEET</td>
                    <td><a href="{{ route('pdf.download', ['id' => 2]) }}">Click to Download</a></td>
                    </tr>


                </table>
        </div>
    </div>

    <div class="container mb-20">
        <div class="row">
                <h3 class="section-title">Boards</h3>

                <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Exams/Course</th>
                    <th class="table-head">Syllabus</th>
                    </tr>

                    <tr>
                    <td>Maths/BIO</td>
                    <td><a href="">Click to Download</a></td>
                    </tr>

                </table>
        </div>
    </div>

    <div class="container mb-20">
        <div class="row">
                <h3 class="section-title">Pre - Foundation Course</h3>

                <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Exams/Course</th>
                    <th class="table-head">Syllabus</th>
                    </tr>

                    <tr>
                    <td>Class 10th</td>
                    <td><a href="">Click to Download</a></td>
                    </tr>

                    <tr>
                    <td>Class 9th</td>
                    <td><a href="">Click to Download</a></td>
                    </tr>
                    <tr>
                    <td>Class 8th</td>
                    <td><a href="">Click to Download</a></td>
                    </tr>

                </table>
        </div>
    </div>
</section>


@include('blocks/footer') 
@include('footer')