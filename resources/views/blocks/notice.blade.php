<section class="section">
    <div class="container whiteboard">
        <div class="row">
            <!-- Notices Section -->
            <div class="col-md-12 mb-4">
                <h3 class="font-secondary mb-3 text-primary">Notices</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-star glowing-star"></i>
                        &nbsp;&nbsp;
                        <p class="d-inline mb-0">TAD Feedback From- 2025 :&nbsp;&nbsp;</p>
                        <a href="{{route('tad.feedback')}}" class="ms-2">
                            Click Here To add your Feedback
                        </a>
                    </li>
                    @foreach ($forms as $notice)
                    <li class="mb-3">
                        <i class="fas fa-star glowing-star"></i>
                        &nbsp;&nbsp;
                        <p class="d-inline mb-0">{{$notice->form_name}} :&nbsp;&nbsp;</p>
                        <a href="{{ url('/form/' . $notice->form_slug) }}" class="ms-2">
                            Click Here To Apply
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>