<section class="section">
    <div class="container">
        <div class="row">
            <!-- Notices Section -->
            <div class="col-md-6 mb-4">
                <h3 class="font-secondary mb-3 text-primary">Notices</h3>
                <ul class="list-unstyled">
                    @foreach ($forms as $notice)
                    <li class="mb-3">
                        <i class="fas fa-bullhorn"></i> &nbsp;&nbsp; <p class="d-inline mb-0">{{$notice->form_name}} :&nbsp;&nbsp;</p>
                        <a href="{{ url('/form/' . $notice->form_slug) }}" class=" ms-2">
                            {{$notice->form_slug}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>