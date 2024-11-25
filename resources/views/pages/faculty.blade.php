@include('header')
@include('blocks/navigation')
@include('blocks/page-title')
<section class="section">
    <div class="team-container">
        @foreach($data as $teacher)
        <div class="team-card">
            <img src="{{ asset('storage/teacher/' .$teacher->profile_img) }}" alt="{{ $teacher->name }}">
            <div class="card-content">
                <h3 class="name">{{ $teacher->name }}</h3>
                <p class="role">{{ $teacher->qualification }}</p>
                <p class="description">{{ $teacher->details }}</p>
                <div class="social-icons">
                    @if($teacher->facebook_url)
                    <a href="{{ $teacher->facebook_url }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if($teacher->instagram_url)
                    <a href="{{ $teacher->instagram_url }}" target="_blank"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if($teacher->video_url)
                    <a href="javascript:void(0);"
                        onclick="playVideo('{{ $teacher->video_url }}')">
                        <i class="fab fa-youtube"></i> Watch Demo
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Video Modal -->
    <div id="videoModal" class="video-modal" style="display: none;">
        <div class="video-modal-content">
            <span class="close-btn" onclick="closeVideo()">×</span>
            <iframe id="videoIframe" width="100%" height="400px" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

</section>

@include('blocks/footer')
@include('footer')