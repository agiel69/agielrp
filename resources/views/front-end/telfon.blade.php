
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Person | AGL-GARAGE</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #111111;
      color: #ffffff;
      line-height: 1.6;
    }

    header {
      background-color: #1e1e1e;
      padding: 20px;
      text-align: center;
      border-bottom: 3px solid #f6dd00;
    }

    header h1 {
      color: #f6dd00;
      font-size: 2rem;
      margin-bottom: 5px;
    }

    header p {
      font-size: 1rem;
      color: #cccccc;
    }

    .container {
      max-width: 960px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .contact-card {
      background-color: #1b1b1b;
      border-left: 5px solid #f6dd00;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .contact-card h3 {
      color: #f6dd00;
      margin-bottom: 8px;
    }

    .contact-card p {
      margin: 4px 0;
      color: #e0e0e0;
    }

    .contact-card a {
      color: #f6dd00;
      text-decoration: none;
      font-weight: 500;
    }

    .contact-card a:hover {
      text-decoration: underline;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #1a1a1a;
      color: #999999;
      font-size: 0.9rem;
      margin-top: 40px;
    }

    @media screen and (max-width: 600px) {
      header h1 {
        font-size: 1.5rem;
      }
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

  <header>
    <h1>AGL-GARAGE</h1>
    <p>Hubungi Kami Untuk Layanan Bengkel Profesional</p>
  </header>

  <div class="container">
    <div class="contact-card">
      <h3>Agiel Ramadhan Putra</h3>
      <p><strong>Telepon:</strong> <a href="tel:+6281234567890">+62 812-3456-7890</a></p>
      <p><strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" target="_blank">Chat via WhatsApp</a></p>
      <p><strong>Email:</strong> <a href="mailto:aglgarage@gmail.com">aglgarage@gmail.com</a></p>
    </div>

    <div class="contact-card">
      <h3>Alamat Bengkel</h3>
      <p> jalan cilebut raya, kota bogor</p>
      <p><strong>Maps:</strong> <a href="https://www.google.com/maps?q=-6.200000,106.816666" target="_blank">Lihat di Google Maps</a></p>
    </div>
  </div>
  
  <div class="container-fluid">
    <button type="button" class="btn-back" aria-label="Kembali ke halaman sebelumnya" onclick="history.back();">
      &larr; Kembali
    </button>
  <footer>
    &copy; 2025 AGL-GARAGE. All Rights Reserved.
  </footer>

</body>
</html>
