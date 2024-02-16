<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="+91 9102282333"><strong>CALL</strong> +91 9102282333</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://facebook.com/themefisher/"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://github.com/themefisher"><i class="ti-github"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://instagram.com/themefisher/"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('career')}}">Career</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('result')}}">Result</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('gallery')}}">Gallery</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('events')}}">News/Events</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('student.zone')}}">Student Zone</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal" data-toggle="modal" data-target="#loginModal">login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="{{route('home')}}"><img class="img-fluid" src="{{asset('assets/source/images/about/LOGO.jpg')}}" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @home">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item @about">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item @courses">
              <a class="nav-link" href="{{route('course')}}">COURSES</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ACADEMICS
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('tad.icse')}}">ENGINEERING</a></li>
                <li><a class="dropdown-item" href="{{route('tad.cbse')}}">MEDICAL</a></li>
                <li><a class="dropdown-item" href="{{route('akalan')}}">PRE-FOUNDATION</a></li>
                <li><a class="dropdown-item" href="{{route('akalan')}}">SYLLABUS</a></li>

              </ul>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Test-Series
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('tad.icse')}}">TAD-ICSE</a></li>
                <li><a class="dropdown-item" href="{{route('tad.cbse')}}">TAD-CBSE</a></li>
                <li><a class="dropdown-item" href="{{route('akalan')}}">AAKALAN- 2024</a></li>
              </ul>
            </li>
            <li class="nav-item @blog">
              <a class="nav-link" href="{{route('home')}}">ADMISSION</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              COURSES
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('udgosh.jee')}}">उद्घोष-JEE(Foundation)</a></li>
                <li><a class="dropdown-item" href="{{route('safal.jee')}}">सफल -JEE(Target)</a></li>
                <li><a class="dropdown-item" href="{{route('udgosh.neet')}}">उद्घोष-NEET(Foundation)</a></li>
                <li><a class="dropdown-item" href="{{route('safal.neet')}}">सफल-NEET(Target)</a></li>
                <li><a class="dropdown-item" href="{{route('eklavya.tenth')}}">एकलव्य -Tenth</a></li>
                <li><a class="dropdown-item" href="{{route('eklavya.ninth')}}">एकलव्य - Ninth</a></li>
                <li><a class="dropdown-item" href="{{route('eklavya.eighth')}}">एकलव्य - Eighth</a></li>
                <li><a class="dropdown-item" href="{{route('tarun.math')}}">तरूण - Maths</a></li>                
                <li><a class="dropdown-item" href="{{route('tarun.bio')}}">तरूण - Biology</a></li>                

           
                
                <!-- <li class="dropdown-item dropdown dropleft">
                  <a class="dropdown-toggle" href="#" id="navbarDropdownSubmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sub Menu
                  </a>
                  <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownSubmenu">
                    <li><a class="dropdown-item" href="#!">Sub Menu 01</a></li>
                    <li><a class="dropdown-item" href="#!">Sub Menu 02</a></li>
                    <li><a class="dropdown-item" href="#!">Sub Menu 03</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li class="nav-item @contact">
              <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
@include('blocks/signup')
@include('blocks/login')