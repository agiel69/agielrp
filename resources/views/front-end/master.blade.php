<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front-end/css/bootstrap.css') }}" />
  <!-- fonts awesome style -->
  <link href="{{ asset('assets/front-end/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/front-end/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('assets/front-end/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="contact_nav_container">
        <div class="container">
          <div class="contact_nav">
          <a href="/alamat">
  <i class="fa fa-map-marker" aria-hidden="true"></i>
  <span>
    alamat bengkel: {{ $telfon->alamat ?? 'Alamat belum tersedia' }}
  </span>
</a>

            <a href="">
              <i class="" aria-hidden="true"></i>
              <span>
                DATANGI KAMI DENGAN MELIHAT MAPS atau HUBUNGI NOMOR KAMI
              </span>
            </a>
            <a href="/telfon">
  <i class="fa fa-phone" aria-hidden="true"></i>
  <span>
    tlp. kami di kontak ini: {{ $telfon->nomor_telepon ?? 'Nomor belum tersedia' }}
  </span>
</a>
<a href="mailto:{{ $telfon->email ?? '#' }}">
  <i class="fa fa-envelope" aria-hidden="true"></i>
  <span>
    Email: {{ $telfon->email ?? 'Email belum tersedia' }}
  </span>
</a>

          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="menu_btn-style ">
              <button onclick="closeNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div class="overlay-content">
              <a class="active" href="/"> Home <span class="sr-only">(current)</span></a>
              <a class="" href="/about"> About</a>
              <a class="" href="/tim"> modifan by AGL-GARAGE</a>
              <a class="" href="/main/about"> PEMILIK BENGKEL</a>
            </div>
          </div>
          <a class="navbar-brand" href="/home">
            <span>
              AGL-GARAGE by Agiel Ramadhan Putra
            </span>
          </a>
          <div class="user_option">
            <a href="/daftar">
              <span>
                daftarkan motor anda
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>
                    AGL <br />
                    GARAGE
                  </h2>
                </div>
                <a href="/main/about">
                INFO PEMILIK BENGKEL
                </a>
              </div>
              <div class="care_detail">
                <a href="/motor">
                  AGL-GARAGE by agiel ramadhan putra
                </a>
                <div class="care_text">
                  <h2>
                    bengkel boreup <br />
                    tune up <br />
                    service motor harian
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>
                    AGL <br />
                    GARAGE
                  </h2>
                </div>
                <a href="/motor">
                INFO PEMILIK BENGKEL
                </a>
              </div>
              <div class="care_detail">
                <a href="/motor">
                AGL-GARAGE by agiel ramadhan putra
                </a>
                <div class="care_text">
                  <h2>
                  bengkel boreup <br />
                    tune up <br />
                    service motor harian
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>
                    AGL <br />
                    GARAGE
                  </h2>
                </div>
                <a href="/motor">
                INFO PEMILIK BENGKEL
                </a>
              </div>
              <div class="care_detail">
                <a href="/motor">
                AGL-GARAGE by agiel ramadhan putra
                </a>
                <div class="care_text">
                  <h2>
                  bengkel boreup <br />
                    tune up <br />
                    service motor harian
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>
                    AGL <br />
                    GARAGE
                  </h2>
                </div>
                <a href="/motor">
                INFO PEMILIK BENGKEL
                </a>
              </div>
              <div class="care_detail">
                <a href="/motor">
                AGL-GARAGE by agiel ramadhan putra
                </a>
                <div class="care_text">
                  <h2>
                  bengkel boreup <br />
                    tune up <br />
                    service motor harian
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  @yield('konten')

  <!-- footer section -->
  <footer class="footer_section container-fluid">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">AGIEL RAMADHAN PUTRA</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="{{ asset('assets/front-end/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('assets/front-end/js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('assets/front-end/js/custom.js')}}"></script>

</body>

</html>