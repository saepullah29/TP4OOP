<?php
$data = file_get_contents('pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];

?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">

    <title>TP4OOP</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
          <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="120">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </div>
    </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>All menu</h1>
        </div>
    </div>
</div>

<div class="row">
    <?php foreach ($menu as $row) : ?>
    <div class="col-md-4">
        <div class="card">
  <img src="img/pizza/american-favourite.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Amercan Favourit</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <h5 class="card-title">Rp. 60.000,-</h5>
    <a href="#" class="btn btn-primary">Pesan sekarang</a>
  </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    -->
  </body>
</html>