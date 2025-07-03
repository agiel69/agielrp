<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pendaftaran Motor - AGL Garage</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #222;
      color: #fff;
    }

    .contact_section {
      background-image: url("{{ asset('assets/front-end/images/slider-bg.jpg') }}");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding: 50px 0;
      position: relative;
      z-index: 1;
    }

    .contact_section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .contact-form {
      background-color: #444;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
      transition: transform 0.3s ease;
    }

    .contact-form:hover {
      transform: translateY(-3px);
    }

    .heading_container {
      text-align: center;
      margin-bottom: 20px;
    }

    .heading_container h2 {
      color: #ffeb3b;
      font-size: 28px;
      margin-bottom: 10px;
    }

    form input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ffcc00;
      border-radius: 6px;
      background-color: #555;
      color: #fff;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    form input:focus {
      outline: none;
      border-color: #ff9900;
      box-shadow: 0 0 5px #ff9900;
    }

    .top_input {
      display: flex;
      gap: 15px;
    }

    .message_input {
      margin: 15px 0;
    }

    .btn-box {
      text-align: center;
    }

    .btn-box button {
      background-color: #ff6600;
      color: #fff;
      padding: 12px 30px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn-box button:hover {
      background-color: #e65c00;
    }

    #notification {
      display: none;
      margin-top: 20px;
      background-color: #28a745;
      padding: 15px;
      border-radius: 6px;
      text-align: center;
      color: #fff;
      animation: fadeIn 0.5s ease-in-out;
    }

    #backButton {
      display: none;
      text-align: center;
      margin-top: 20px;
    }

    .btn-back {
      background-color: transparent;
      border: 2px solid #ffcc00;
      color: #ffcc00;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-back:hover {
      background-color: #ffcc00;
      color: #333;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <!-- Contact Section -->
  <section class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="contact-form">
            <div class="heading_container">
              <h2>DAFTARKAN MOTOR Anda</h2>
            </div>
            <form id="motorForm">
              <input type="text" placeholder="Full name" required />
              <div class="top_input">
                <input type="email" placeholder="Email" required />
                <input type="text" placeholder="Phone Number" required />
              </div>
              <input type="text" placeholder="Message" class="message_input" required />
              <div class="btn-box">
                <button type="submit">Send</button>
              </div>
              <div id="backButton">
                <button type="button" class="btn-back" aria-label="Kembali ke halaman sebelumnya" onclick="history.back();">
                  &larr; Kembali
                </button>
              </div>
            </form>
            <div id="notification">
              MOTOR ANDA TELAH TERDAFTAR DI BENGKEL AGL-GARAGE
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    document.getElementById('motorForm').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('notification').style.display = 'block';
      document.getElementById('backButton').style.display = 'block';
    });
  </script>

</body>
</html>
