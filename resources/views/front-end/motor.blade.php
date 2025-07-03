{{-- About Section for Bengkel with attractive, modern design and back button --}}
<section class="about_section layout_padding">
  <style>
    .about_section {
      background-image: url("{{ asset('assets/front-end/images/slider-bg.jpg') }}");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #f0f0f0;
      padding: 40px 20px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      position: relative;
      z-index: 1;
    }

    .about_section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: -1;
    }

    .btn-back {
      display: inline-block;
      margin-bottom: 30px;
      padding: 10px 20px;
      background-color: transparent;
      color: #ff4500;
      border: 2px solid #ff4500;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease;
      box-shadow: 0 0 8px #ff4500;
      user-select: none;
      text-align: center;
      width: max-content;
    }

    .btn-back:hover,
    .btn-back:focus {
      background-color: #ff4500;
      color: #222;
      box-shadow: 0 0 20px #ff4500;
      outline: none;
    }

    .about_section .container-fluid {
      max-width: 1100px;
      margin: 0 auto;
    }

    .about_section .box {
      display: flex;
      align-items: center;
      gap: 40px;
      background: rgba(46, 47, 51, 0.9);
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
      overflow: hidden;
      padding: 20px;
      transition: transform 0.3s ease;
      position: relative;
      z-index: 2;
    }

    .about_section .box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(255,69,0,0.7);
    }

    .about_section .img-box {
      flex: 1 1 45%;
      max-width: 45%;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(255,69,0,0.6);
      border: 3px solid #ff4500;
      background: #111;
    }

    .about_section .img-box img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.5));
      transition: transform 0.3s ease;
    }

    .about_section .img-box img:hover {
      transform: scale(1.05);
      filter: drop-shadow(3px 6px 10px rgba(255,69,0,0.8));
    }

    .about_section .detail-box {
      flex: 1 1 55%;
      max-width: 55%;
      padding: 10px 0 10px 20px;
    }

    .about_section .detail-box h2 {
      font-size: 2.6rem;
      font-weight: 700;
      color: #ff4500;
      margin-bottom: 20px;
      text-shadow: 1px 1px 5px #000;
    }

    .about_section .detail-box p {
      font-size: 1.1rem;
      line-height: 1.7;
      color: #d4d4d4;
      margin-bottom: 30px;
      font-weight: 500;
      letter-spacing: 0.03em;
    }

    .about_section .detail-box a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: transparent;
      color: #ff4500;
      font-weight: 600;
      font-size: 1rem;
      text-decoration: none;
      border: 2px solid #ff4500;
      padding: 10px 25px;
      border-radius: 25px;
      transition: background-color 0.3s ease, color 0.3s ease;
      cursor: pointer;
      width: max-content;
      box-shadow: 0 0 8px #ff4500;
    }

    .about_section .detail-box a:hover,
    .about_section .detail-box a:focus {
      background-color: #ff4500;
      color: #222;
      box-shadow: 0 0 20px #ff4500;
      outline: none;
    }

    .about_section .detail-box a hr {
      display: none;
    }

    @media (max-width: 768px) {
      .about_section .box {
        flex-direction: column;
        gap: 25px;
        padding: 15px;
      }

      .about_section .img-box,
      .about_section .detail-box {
        max-width: 100%;
        flex: none;
        padding: 0;
      }

      .about_section .detail-box h2 {
        font-size: 2rem;
        text-align: center;
      }

      .about_section .detail-box p {
        text-align: center;
      }

      .about_section .detail-box a {
        width: 100%;
        justify-content: center;
      }

      .btn-back {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
      }
    }
  </style>

<div class="container-fluid">
    <button type="button" class="btn-back" aria-label="Kembali ke halaman sebelumnya" onclick="history.back();">
        &larr; Kembali
    </button>
    <div class="box" role="region" aria-label="About Workshop Section">
        <div class="img-box">
            {{-- Pastikan $motor dikirim dari PostController@about --}}
            @if(isset($motor) && $motor->image)
                <img src="{{ asset('assets/img/' . $motor->image) }}" alt="{{ $motor->title }}" />
            @else
                <img src="{{ asset('assets/front-end/images/no-image.png') }}" alt="No Image" />
            @endif
        </div>
        <div class="detail-box">
            <h2>{{ $motor->title ?? 'Judul Tidak Ditemukan' }}</h2>
            <p>
                {!! isset($motor) ? nl2br(e($motor->content)) : 'Konten tidak tersedia.' !!}
            </p>
            <a href="/" aria-label="Baca tentang bengkel ini">
                <span>Baca tentang bengkel ini</span>
                <hr />
            </a>
        </div>
    </div>
</div>

