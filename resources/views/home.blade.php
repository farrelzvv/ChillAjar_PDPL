<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('home_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('home_asset/assets/css/fontawesome.css')}}"> 
    <link rel="stylesheet" href="{{asset('home_asset/assets/css/templatemo-tale-seo-agency.css')}}">
    <link rel="stylesheet" href="{{asset('home_asset/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('home_asset/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>085710672476</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>chillajar@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>Depok, Jawa Barat</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('home_asset/assets/images/logo.png')}}" alt="" style="max-width: 112px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                      <li class="scroll-to-section"><a href="#services">Layanan</a></li>
                      <li class="scroll-to-section"><a href="#infos">DAMPAK</a></li>    
                      <li class="scroll-to-section">
                        @auth
                            <a href="{{ route('products.browse') }}">Order</a>
                        @else
                            <a href="{{ route('login') }}">Order</a>
                        @endauth
                      </li>

                      <li class="scroll-to-section">
                        @auth
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </li>
                    
                    
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!--hero section -->
  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>Ayok Ngechill, Sambil Belajar</h6>
            <p>Inovasi Anak Nurul Fikri</p>
            <div class="line-dec"></div>
            <h4><em>Chill</em><span>Ajar</span></h4>
            <p>Kapan Lagi belajar sambil ngechill, Ngechill sambil Belajar?? Hanya di ChillAjar, Kalian bisa ngechill, tapi belajar!</a>.</p>
            
            <div class="main-button scroll-to-section">
              @auth
                  <a href="#services">Order Mentor</a>
              @else
                  <a href="{{ route('login') }}">Login</a>
              @endauth
          </div>
          <span>Atau</span>
          <div class="second-button">
              @auth
                  <a href="faqs.html">Kepoin ChillAjar</a>
              @else
                  <a href="{{ route('register') }}">Daftar Yuk</a>
              @endauth
          </div>          
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end hero section -->

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Kenapa <em>Harus Chill</em>
                  <span>Ajar</span> Sih?</h2>
                  <div class="line-dec"></div>
                  <p>Sini sini mimin kasih tau!</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('home_asset/assets/images/services-01.jpg')}}" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Akses ilmu dengan santai tapi ga lalay!</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('home_asset/assets/images/services-02.jpg')}}" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Pemahaman Terukur & tidak Asal Belajar!</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('home_asset/assets/images/services-03.jpg')}}" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Harga murah but ga murahan!</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{asset('home_asset/assets/images/services-04.jpg')}}" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>Inovasi dari mahasiswa Nurul Fikri</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="{{asset('home_asset/assets/images/left-infos.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>Apa <em>Dampak</em> dari kalian <span>Order?</span></h2>
                  <div class="line-dec"></div>
                  <p>Kalian tau gasih, 1 sesi orderan kalian, sangat berdampak loh untuk kualitas pendidikan yang 
                    ada di indonesia
                  </p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>Mengurangi Fenomena Joki Tugas</h6>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Membuat mahasiswa Kompeten memiliki arah mencari sampingan</h6>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Gaya Belajar Santai Makin Meluas</h6>
                  </div>
                </div>
                <p class="more-info">Oleh karena itu, Yuk kita sama sama bantu kualitas pendidikan di Indonesia!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>ChillAjar <a href="#">Visionary Entrepreneur</a>. 
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('home_asset/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('home_asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('home_asset/assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('home_asset/assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('home_asset/assets/js/tabs.js') }}"></script>
<script src="{{ asset('home_asset/assets/js/popup.js') }}"></script>
<script src="{{ asset('home_asset/assets/js/custom.js') }}"></script>



  </body>

</html>
