<?php
session_start();
if (!isset($_SESSION['session_username'])) {
  header("location:login.php");
  exit();
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>CCTV LAB | Dashboard Admin</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="dashboard-utama">
    <div class="container">
      <h2 class="text-center" style="margin-top: 30px">Dashboard</h2>
    </div>
  </section>

  <style>
    .form-group {
      margin-bottom: 40px;
      margin-top: 40px;
    }
  </style>

  <form class="container" style="margin-bottom: 40px; margin-top: 40px;">
    <div class="form-group">
      <label for="kategori_id">Kategori</label>
      <input type="text" class="form-control" id="kategori_id" placeholder="Kategori">
    </div>
    <div class="form-group">
      <label for="nama">Nama Produk</label>
      <input type="text" class="form-control" id="nama" placeholder="Nama Produk">
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" id="harga" placeholder="Harga Produk">
    </div>
    <div class="form-group">
      <label for="foto">Foto Produk</label>
      <input type="file" class="form-control" id="foto" placeholder="Foto Produk">
    </div>
    <div class="form-group">
      <label for="detail1">Detail 1</label>
      <input type="text" class="form-control" id="detail1" placeholder="Detail 1">
    </div>
    <div class="form-group">
      <label for="detail2">Detail 2</label>
      <input type="text" class="form-control" id="detail2" placeholder="Detail 2">
    </div>
    <div class="form-group">
      <label for="detail3">Detail 3</label>
      <input type="text" class="form-control" id="detail3" placeholder="Detail 3">
    </div>
    <div class="form-group">
      <label for="detail4">Detail 4</label>
      <input type="text" class="form-control" id="detail4" placeholder="Detail 4">
    </div>
    <div class="form-group">
      <label for="detail5">Detail 5</label>
      <input type="text" class="form-control" id="detail5" placeholder="Detail 5">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>