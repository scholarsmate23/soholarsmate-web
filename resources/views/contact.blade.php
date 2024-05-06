@include('header')
@include('blocks/navigation')
@include('blocks/page-title')

<!-- contact -->
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">Send For Enquiry</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <form action="{{ route('save.contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control mb-3 @error('mail') is-invalid @enderror" id="mail" name="mail" placeholder="Your Email" required>
                        @error('mail')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3 @error('subject') is-invalid @enderror" id="mobile" name="mobile" placeholder="Mobile" required>
                        @error('subject')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control mb-3 @error('message') is-invalid @enderror" placeholder="Your Message" required></textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                </form>

            </div>
            <div class="col-lg-5">
                <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid
                    exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores
                    quam vel, tempore itaque architecto ducimus expedita</p> -->
                <a href="tel:+8802057843248" class="text-color h5 d-block">+91 9102282333</a>
                <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">contact@scholarsmate.co.in</a>
                <p>Near Saraswati Vidya Mandir, BudhaNath Road<br> Khalifabagh Chowk, Bhagalpur</p>
            </div>
        </div>
    </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
    <!-- Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1752.966249252767!2d86.9766425549407!3d25.24823494204304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f04bef51764247%3A0xf51aedc70a5801b6!2sScholar&#39;s%20Mate!5e0!3m2!1sen!2sin!4v1706631334444!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- /gmap -->

@include('blocks/footer')
@include('footer')