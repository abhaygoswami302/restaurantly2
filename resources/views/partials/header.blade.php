<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex justify-content-center justify-content-md-between">

    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
    </div>

    <div class="languages d-none d-md-flex align-items-center">
      <ul>
        <li>En</li>
        <li><a href="#">De</a></li>
      </ul>
    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex {{ (Request::url() == 'http://localhost:8000' || Request::url() == 'http://127.0.0.1:8000') ? 'align-items-cente' : '' }} ">
  <div class="container-fluid container-xl d-flex  {{ (Request::url() == 'http://localhost:8000' || Request::url() == 'http://127.0.0.1:8000') ? 'align-items-center' : '' }} justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="{{ route('welcome') }}">Restaurantly</a></h1>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        @if(Request::url() == 'http://localhost:8000' || Request::url() == 'http://127.0.0.1:8000')
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
        <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
        <li><a class="nav-link scrollto" href="#events">Events</a></li>
        <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
        <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
        <!--li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li-->
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        @else
        <li><a class="nav-link active" href="{{ route('welcome') }}" style="float: right">Home</a></li>
        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <a href="{{ route('order.index') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Order Now</a>

  </div>
</header><!-- End Header -->



















