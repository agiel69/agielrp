<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alamat Bengkel</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #1b1b1b;
      color: #f0f0f0;
    }

    .address_section {
      padding: 60px 20px;
      text-align: center;
      background: linear-gradient(135deg, #202020, #2e2e2e);
    }

    .address_section h2 {
      font-size: 2.5rem;
      color: #f6dd00;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .address_section p {
      font-size: 1.1rem;
      color: #ccc;
      margin-bottom: 30px;
    }

    .maps_button {
      display: inline-block;
      background-color: #f6dd00;
      color: #1a1a1a;
      font-weight: bold;
      text-transform: uppercase;
      padding: 14px 28px;
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .maps_button:hover {
      background-color: #e0c900;
      transform: translateY(-2px);
    }

    .maps_frame {
      margin-top: 40px;
      max-width: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
      overflow: hidden;
    }

    iframe {
      width: 100%;
      height: 400px;
      border: none;
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
    .btn-back {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <section class="address_section">
    <h2>Alamat Bengkel</h2>
    <p>Temukan kami di lokasi strategis untuk semua kebutuhan servis motor Anda.</p>
    <a class="maps_button" href="https://www.google.com/maps/place/AGL+GARAGE" target="_blank">
      Buka di Google Maps
    </a>
    <div class="maps_frame">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.7967428217835!2d106.827153!3d-6.175394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e6fbbf41d7%3A0x7e8c8d1c10f3a1df!2sAGL%20Garage!5e0!3m2!1sid!2sid!4v1714999999999!5m2!1sid!2sid" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
    <div class="container-fluid">
    <button type="button" class="btn-back" aria-label="Kembali ke halaman sebelumnya" onclick="history.back();">
      &larr; Kembali
    </button>
  </section>
</body>
</html>
