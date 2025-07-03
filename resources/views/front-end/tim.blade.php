<!-- team section -->
<section class="team_section">
  <style>
    .team_section {
      background-color: #111;
      padding: 50px 0;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .team_section .heading_container {
      text-align: center;
      margin-bottom: 40px;
    }

    .team_section .heading_container h2 {
      color: #FFC300;
      font-weight: bold;
      font-size: 36px;
      text-transform: uppercase;
    }

    .team_section .heading_container p {
      color: #FF5733;
      font-size: 18px;
      margin-top: 10px;
    }

    .team_section .item {
      padding: 15px;
    }

    .team_section .box {
      background-color: #222;
      border-radius: 15px;
      padding: 20px;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.5);
    }

    .team_section .box:hover {
      background-color: #333;
      transform: translateY(-8px);
    }

    .team_section .img-box img {
      width: 100%;
      border-radius: 12px;
      margin-bottom: 15px;
      border: 3px solid #FF5733;
    }

    .team_section .detail-box h6 {
      color: #FFC300;
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .team_section .social_box a {
      color: #FF5733;
      font-size: 18px;
      margin: 0 8px;
      transition: color 0.3s ease;
    }

    .team_section .social_box a:hover {
      color: #FFC300;
    }

    .team_section .back-button {
      display: inline-block;
      background-color: #FF5733;
      color: #fff;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      margin-bottom: 20px;
      transition: background-color 0.3s ease;
    }

    .team_section .back-button:hover {
      background-color: #FFC300;
      color: #111;
    }

    @media (max-width: 768px) {
      .team_section .heading_container h2 {
        font-size: 28px;
      }

      .team_section .heading_container p {
        font-size: 16px;
      }

      .team_section .detail-box h6 {
        font-size: 14px;
      }

      .team_section .back-button {
        padding: 8px 16px;
        font-size: 14px;
      }
    }
  </style>

  <div class="container-fluid">
    <div class="text-center">
      <a href="javascript:history.back()" class="back-button">← Kembali</a>
    </div>

    <div class="heading_container">
      <h2>AGL-GARAGE</h2>
      <p>motor motor yang di modif dan di buat di bengkel kami</p>
    </div>

    <div class="carousel-wrap">
      <div class="owl-carousel team_carousel">
        @foreach (range(1, 6) as $i)
        <div class="item">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('assets/front-end/images/team' . (($i % 5) + 1) . '.jpg')}}" alt="Team {{$i}}" />
            </div>
            <div class="detail-box">
              <h6>AGL- GARAGE : Agiel Ramadhan Putra</h6>
              <div class="social_box">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- end team section -->
