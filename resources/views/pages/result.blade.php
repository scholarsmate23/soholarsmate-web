@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<section  class="section">
    <div class="container">
        <div class="row">
        <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Results</th>
                    <th class="table-head">View</th>

                    </tr>
                    <tr>
                    <td>AAKALAN Result (Topper Result)</td> 
                    <td><a href="{{ route('pdf.viewer', ['id' => 1]) }}" target="_blank">Click to view</a></td>
                    </tr>



                </table>
        </div>
    </div>
</section>


@include('blocks/footer') 
@include('footer')