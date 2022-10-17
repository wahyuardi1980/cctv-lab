<?php

require "koneksi.php";
$queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 3");

// session_start();
// if (!isset($_SESSION['session_username'])) {
//   header("location:login.php");
//   exit();
// }

?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="dist/css/lightbox.css">
  <link rel="icon" href="img/logo-icon/cctv_b2b.png">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">



  <title>CCTV LAB</title>
</head>

<body>
  <?php require "navbar.php"; ?>


  <!-- details -->
  <div class="content">
    <div class="logo_top">
      <img src="img/logo-icon/cctv_b2b.png">
    </div>
    <div class="content">
      <ul>
        <li><a href="#home">Home</a></li>/
        <li><a href="#barang">Product</a></li>/
        <li><a href="#galery">Gallery</a></li>/
        <li><a href="contact-us.php">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- Akhir details -->
  <!-- jumbotron -->
  <section id="banner">
    <div class="belakang">
      <div class="banner_top">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/jumbotron/1.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="carousel-item">
              <img src="img/jumbotron/2.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="carousel-item">
              <img src="img/jumbotron/3.jpg" class="img-fluid" alt="Responsive image">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Panel -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/panel/logo1.png" alt="Pilih CCTV & Pesan" class="float-start">
            <h4>Pilih CCTV & Pesan</h4>
            <p>Pilih paket dan pesan dengan sangat mudah dimanapun melalui chat</p>
          </div>
          <div class="col-lg">
            <img src="img/panel/logo2.png" alt="Jadwal Pemasangan" class="float-start">
            <h4>Jadwal Pemasangan</h4>
            <p>Tentukan waktu pemasangan CCTV sesuai dengan keinginan Anda</p>
          </div>
          <div class="col-lg">
            <img src="img/panel/logo3.png" alt="Prosess Pembayaran" class="float-start">
            <h4>Proses Pembayaran</h4>
            <p>Pembayaran dapat diselesaikan setelah proses Instalasi CCTV selesai</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Info panel -->

  <br><br><br>
  <hr>

  <!-- Judul -->
  <section id="barang">
    <div class="container">
      <h2 class="text-center">Product</h2>
    </div>
    <!-- Akhir Judul -->
    <!-- Harga list -->
    <div class="container">
      <div class="row text-center">
        <div class="col">
        </div>
      </div>
      <div class="row">
        <?php while ($data = mysqli_fetch_array($queryProduk)) { ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/brand-populer/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                <!-- <a class="btn btn-primary">Rp.100.000</a> -->
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <!-- awal selengkapnya -->
    <div class="selengkapnya">
      <div class="container">
        <div class="col">
          <button type="button" class="btn btn-primary tombol"><a href="product-list.php" style="text-decoration:none; color: white;"> SELENGKAPNYA!</a></button>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir lainnya -->
  <hr>
  <!-- Galery -->
  <section id="galery">
    <div class="container">
      <h2 class="text-center">Galeri</h2>
    </div>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <div class="container">
      <!-- <div class="row"> -->
      <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g1.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g1.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g2.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g2.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g3.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g3.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g4.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g4.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g5.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g5.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g6.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g6.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g7.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g7.jpg" alt="Another alt text"></a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="img/galery/g8.jpg" data-lightbox="#image-gallery">
            <img class="img-thumbnail" src="img/galery/g8.jpg" alt="Another alt text"></a>
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Galery -->

  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg info">
          <h3>INFOR<span>MASI</span></h3><br>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>
        <div class="col-lg priv">
          <h3>PRIVACY <span>POLICY</span></h3><br>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Term Of Use</a></li>
          </ul>
        </div>
        <div class="col-lg alamat">
          <h3>ALA<span>MAT</span></h3><br>
          <p>Jl. Beringin Pasar 7 No. 27 <br>Tembung Medan <br><br><span>Telp. 0852-9777-7422</span><br><span>Telp. 0821-6128-6408</span> <br><br>Email. cctvlabmedan@gmail.com</p>
        </div>
        <div class="col-lg maps">
          <h3>MA<span>PS</span></h3><br>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.3921886439656!2d98.66604582919705!3d3.6851186381644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwNDEnMDYuNCJOIDk4wrAzOSc1OS43IkU!5e0!3m2!1sid!2sid!4v1610705894331!5m2!1sid!2sid" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
          <!--         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9844170856504!2d98.74670401475858!3d3.591048397386798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9e70f7c6d6602ec!2zM8KwMzUnMjcuOCJOIDk4wrA0NCc1Ni4wIkU!5e0!3m2!1sid!2sid!4v1653927980206!5m2!1sid!2sid" width="300" height="300" frameborder="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.87398700288068!2d98.74876811468044!3d3.5911917000000058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031336fc07a8a0b%3A0x6e2ac216a3e2dc10!2sCCTVlab!5e0!3m2!1sid!2sid!4v1654147381993!5m2!1sid!2sid" width="300" height="300" frameborder="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
    <hr class="garis2">
    <div class="container">
      <p class="footer-bottom">&copy; 2022 CCTV LAB MEDAN All Created By 💕 Wahyu Ardiansyah</p>
    </div>
  </footer>
  <!-- Akhir Footer -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="dist/js/lightbox-plus-jquery.min.js"></script>
  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>