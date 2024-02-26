@include('header') 
@include('blocks/navigation') 
@include('blocks/page-title')

<!-- courses -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title"></h2>
                <ul>
                    <li class="list-style">1 Years Program</li>
                    <li class="list-style">Entry Level : 9th Pass</li>
                    <li class="list-style">Entry Criteria : Entrance Test</li>
                </ul>
        </div>
    </div>
</section>
<!-- /about -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 20px;">
                <h3 class="section-title">Features</h3>
                <ul>
                <li class="list-style">Prepare NCERT Only (CBSE, ICSE and  Bihar Board)</li>
                <li class="list-style">Regular Classes</li>
                <li class="list-style">Study Material of will be provided</li>
                <li class="list-style">DPP/Assignments</li>
                <li class="list-style">Doubt Session</li>
                <li class="list-style">Testing Process<ul>
                    <li class="list-style">Regular Test (15 Days Intervals)</li>
                    <li class="list-style">Year Planner Available</li>
                    <li class="list-style">Feedbacks</li>
                </ul></li>
                <li class="list-style">Crash Course (Revision cum Test Planner) <a href="{{route('prayash.jee')}}">Know More</a></li>
                </ul>
        </div>
        <div class="col-12" style="margin-bottom: 20px;">
            <h4>Syllabus:</h4>
            <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Boards</th>
                    <th class="table-head">PDF Link</th>
                    </tr>
                    <tr>
                    <td>CBSE</td>
                    <td><a href="{{route('syllabus')}}">Click to View</a></td>
                    </tr>
                    <tr>
                    <td>ICSE</td>
                    <td><a href="{{route('syllabus')}}">Click to View</a></td>
                    </tr>
                    <tr>
                    <td>Bihar Boards</td>
                    <td><a href="{{route('syllabus')}}">Click to View</a></td>
                    </tr>
            </table>
        </div>
        <div class="col-12">
            <h4>Note:</h4>
            <ul class="list-style">
                <li class="list-style">Non-Attending Student may also study here.</li>
                <li class="list-style">Seprate Hostel Facility Available for both Boys and Girls</li>
            </ul>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Fee Structure</h3>
                <p>Contact Account Section for Fee Details and Payments.</p>

                <!-- <table class="table-reset" cellspacing=0 cellpadding=0>
                    <tr>
                    <th class="table-head">Fixed Charges and Tution Fee</th>
                    <th class="table-head">Fee</th>
                    <th class="table-head">GST</th>
                    <th class="table-head">Total Fee</th>  
                    </tr>
                    <tr>
                    <td>Registration Fee</td>
                    <td>5000</td>
                    <td>900</td>
                    <td>5900.00</td>
                    </tr>
                    <tr>
                    <td>Uniform/Bag/DPP/Test-Series/Maintance Charges</td>
                    <td>9000</td>
                    <td>1620</td>
                    <td>10620.00</td>
                    </tr>

                    <tr>
                    <td>1st Installment</td>
                    <<td>7000</td>
                    <td>1260</td>
                    <td>8260.00</td>
                    </tr>

                    <tr>
                    <td>2nd Installment</td>
                    <td>7000</td>
                    <td>1260</td>
                    <td>8260.00</td>
                    </tr>

                    <tr>
                    <td>3rd Installment</td>
                    <td>7000</td>
                    <td>1260</td>
                    <td>8260.00</td>
                    </tr>

                    <tr>
                    <td>Total Fee</td>
                    <td>35000</td>
                    <td>6300</td>
                    <td>41300.00</td>
                    </tr>
                </table> -->

  
        </div>
    </div>
</section>
<!-- /courses -->

@include('blocks/footer') 
@include('footer')