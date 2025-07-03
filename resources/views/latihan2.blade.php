<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Layout Responsif Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .box {
      border: 1px solid #ccc;
      padding: 1rem;
      text-align: center;
      color: white;
    }

    .header { background-color: rgb(55, 0, 255); }
    .article { background-color: rgb(0, 217, 255); color: black; }
    .aside { background-color: rgb(0, 255, 60); color: black; }
    .footer { background-color: rgb(255, 196, 0); color: black; }
  </style>
</head>
<body>

  <div class="container">
    <!-- Header -->
    <header class="box header mb-3">Header</header>

    <!-- Main content -->
    <div class="row">
      <article class="box article col-sm-8 col-12 mb-3">Artikel</article>
      <aside class="box aside col-sm-4 col-12 mb-3">Aside</aside>
    </div>

    <!-- Footer -->
    <footer class="box footer mt-3">Footer</footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
