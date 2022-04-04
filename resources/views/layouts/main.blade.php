<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>
 
  <style>

.contain {
   margin: 0 auto;
   max-width: 1200px;
   width: 100%;
 }
 
 .item {
   align-items: center;
   color: white;
   display: flex;
   width: 40%;
   height: 30%;
   justify-content: center;
 }
  </style>


  <style>

   .myImgClass { position: relative; }
   .myImgClass img { display: block; }
   .myImgClass .fa-download { position: absolute; bottom:0; left:0; }

     .cstScollBar{
        height: 500px;
        overflow-x: hidden;
     }

.cover-container {
    height: 180px;
    width: 100%;
    white-space: nowrap;
    overflow-y: hidden;
}
.cover-item {
    position: relative;
    display: inline-block;
    margin: 8px 8px;
    box-shadow: 2px 2px 4px #bbb;
    border-top-right-radius: 4px;
    width: 116px;
    height: 100px;
    vertical-align: bottom;
    background-position: top left;
    background-repeat: no-repeat;
    background-size: cover;
}

.cover-item p{
   position: absolute;
}

     .Vertical_Scroll
    /*Hover Fall Effect*/
    .fall-item {
      width: 100%;
      height: auto;
      overflow: hidden;
      position: relative;
      text-align: center;
   }
   .fall-item .mask,.fall-item .content {
      width: 100%;
      height: 100%;
      position: absolute;
      overflow: hidden;
      top: 0;
      left: 0;
   }
   .fall-item img {
      display: block;
      position: relative;
      width: 100%;
      height: auto;
   }
   .fall-item h2 {
      text-transform: uppercase;
      color: #fff;
      text-align: center;
      position: relative;
      padding: 10px;
      background: rgba(0, 0, 0, 0.8);
      margin: 0 0 0 0;
   }
   .fall-item p {
      font-style: italic;
      position: relative;
      color: #fff;
      padding: 10px 20px 20px;
      text-align: center;
   }
   .fall-effect .mask {
      background-color: rgba(255, 255, 255, 0.7);
      top: -200px;
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      -webkit-transition: all 0.3s ease-out 0.5s;
      -moz-transition: all 0.3s ease-out 0.5s;
      -o-transition: all 0.3s ease-out 0.5s;
      -ms-transition: all 0.3s ease-out 0.5s;
      transition: all 0.3s ease-out 0.5s;
   }
   .fall-effect h2 {
      -webkit-transform: translateY(-200px);
      -moz-transform: translateY(-200px);
      -o-transform: translateY(-200px);
      -ms-transform: translateY(-200px);
      transform: translateY(-200px);
      -webkit-transition: all 0.2s ease-in-out 0.1s;
      -moz-transition: all 0.2s ease-in-out 0.1s;
      -o-transition: all 0.2s ease-in-out 0.1s;
      -ms-transition: all 0.2s ease-in-out 0.1s;
      transition: all 0.2s ease-in-out 0.1s;
   }
   .fall-effect p {
      color: #333;
      -webkit-transform: translateY(-200px);
      -moz-transform: translateY(-200px);
      -o-transform: translateY(-200px);
      -ms-transform: translateY(-200px);
      transform: translateY(-200px);
      -webkit-transition: all 0.2s ease-in-out 0.2s;
      -moz-transition: all 0.2s ease-in-out 0.2s;
      -o-transition: all 0.2s ease-in-out 0.2s;
      -ms-transition: all 0.2s ease-in-out 0.2s;
      transition: all 0.2s ease-in-out 0.2s;
   }
   .fall-effect a.btn {
      -webkit-transform: translateY(-200px);
      -moz-transform: translateY(-200px);
      -o-transform: translateY(-200px);
      -ms-transform: translateY(-200px);
      transform: translateY(-200px);
      -webkit-transition: all 0.2s ease-in-out 0.3s;
      -moz-transition: all 0.2s ease-in-out 0.3s;
      -o-transition: all 0.2s ease-in-out 0.3s;
      -ms-transition: all 0.2s ease-in-out 0.3s;
      transition: all 0.2s ease-in-out 0.3s;
   }
   .fall-effect:hover .mask {
      -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
      top: 0px;
      -webkit-transition-delay: 0s;
      -moz-transition-delay: 0s;
      -o-transition-delay: 0s;
      -ms-transition-delay: 0s;
      transition-delay: 0s;

   }
   .fall-effect:hover h2 {
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -o-transform: translateY(0px);
      -ms-transform: translateY(0px);
      transform: translateY(0px);
      -webkit-transition-delay: 0.4s;
      -moz-transition-delay: 0.4s;
      -o-transition-delay: 0.4s;
      -ms-transition-delay: 0.4s;
      transition-delay: 0.4s;
   }
   .fall-effect:hover p {
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -o-transform: translateY(0px);
      -ms-transform: translateY(0px);
      transform: translateY(0px);
      -webkit-transition-delay: 0.2s;
      -moz-transition-delay: 0.2s;
      -o-transition-delay: 0.2s;
      -ms-transition-delay: 0.2s;
      transition-delay: 0.2s;
   }
   .fall-effect:hover a.btn {
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -o-transform: translateY(0px);
      -ms-transform: translateY(0px);
      transform: translateY(0px);
      -webkit-transition-delay: 0s;
      -moz-transition-delay: 0s;
      -o-transition-delay: 0s;
      -ms-transition-delay: 0s;
      transition-delay: 0s;
   }


  </style>

  @livewireStyles
</head>

<body>

    @include('partials.header')
    @if(Request::url() == 'http://localhost:8000' || Request::url() == 'http://127.0.0.1:8000')

    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h1>Welcome to <span>Restaurantly</span></h1>
            <h2>Delivering great food for more than 18 years!</h2>
  
            <div class="btns">
              <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
              <a href="{{ route('order.index') }}" class="btn-book animated fadeInUp scrollto">Order Now</a>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
          </div>
  
        </div>
      </div>
    </section><!-- End Hero -->
    @endif

    <main id="main">
    @yield('content')
    </main><!-- End #main -->
    @include('partials.footer')

    @livewireScripts

</body>
</html>