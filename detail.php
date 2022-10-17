<?php
require "koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/detail.css">
    <link rel="stylesheet" href="dist/css/lightbox.css">
    <link rel="icon" href="img/logo-icon/cctv_b2b.png">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>CCTV LAB | <?php echo $produk['nama'] ?></title>

</head>
<body>
  <?php require 'navbar.php' ?>
<!-- awal navbar  -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#index.html">CCTV LAB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.html">Hubungi Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
<!-- akhir navbar -->

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="img/product-list/<?php echo $produk['foto'] ?>"></div>
                          <div class="tab-pane" id="pic-2"><img src=""></div>
                          <div class="tab-pane" id="pic-3"><img src="https://4.bp.blogspot.com/-ReSXj2_fDjI/WdplFpyTAZI/AAAAAAAABgY/lc1P8JLLBuUv0l-I-2IoY2QstRo46JwCACPcBGAYYCw/s640/lacodeid.jpg" /></div>
                          <div class="tab-pane" id="pic-4"><img src="https://4.bp.blogspot.com/-ReSXj2_fDjI/WdplFpyTAZI/AAAAAAAABgY/lc1P8JLLBuUv0l-I-2IoY2QstRo46JwCACPcBGAYYCw/s640/lacodeid.jpg" /></div>
                          <div class="tab-pane" id="pic-5"><img src="https://4.bp.blogspot.com/-ReSXj2_fDjI/WdplFpyTAZI/AAAAAAAABgY/lc1P8JLLBuUv0l-I-2IoY2QstRo46JwCACPcBGAYYCw/s640/lacodeid.jpg" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                         <!--  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="css/Foto/product/335920_865df6a2-b816-11e4-9ee8-765a2523fab8.jpg" /></a></li>
                          <li><a data-target="#pic-2" data-toggle="tab"><img src="css/Foto/product/335920_865df6a2-b816-11e4-9ee8-765a2523fab8.jpg" /></a></li>
                          <li><a data-target="#pic-3" data-toggle="tab"><img src="css/Foto/product/335920_865df6a2-b816-11e4-9ee8-765a2523fab8.jpg" /></a></li>
                          <li><a data-target="#pic-4" data-toggle="tab"><img src="css/Foto/product/335920_865df6a2-b816-11e4-9ee8-765a2523fab8.jpg" /></a></li>
                          <li><a data-target="#pic-5" data-toggle="tab"><img src="css/Foto/product/335920_865df6a2-b816-11e4-9ee8-765a2523fab8.jpg" /></a></li> -->
                        </ul>
                        
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"><?php echo $produk['nama'] ?></h3>
                        <div class="rating">
                            <!-- <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 ulasan</span> -->
                        </div>
                        <!-- <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
                        <h4 class="price">Harga: <span>Rp <?php echo $produk['harga'] ?></span></h4>
                        <!-- <p class="vote"><strong>91%</strong> pembeli menikmati produk ini!! <strong>(87 votes)</strong></p> -->
                      <!--   <h5 class="sizes">ukuran:
                            <span class="size" data-toggle="tooltip" title="small">s</span>
                            <span class="size" data-toggle="tooltip" title="medium">m</span>
                            <span class="size" data-toggle="tooltip" title="large">l</span>
                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                        </h5> -->
                  <!--       <h5 class="colors">warna:
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green"></span>
                            <span class="color blue"></span>
                        </h5> -->
                        <hr>
                        <div class="container">
                          <div class="row">
                            <div class="col judul">
                               <h3>Spesifikasi</h3>
                            </div>
                          </div>
                        </div>
                       


                       <div class="container">
                         <div class="row">
                          <p style="text-align=left"><?php echo $produk['detail'] ?></p>
                          <p style="text-align=left"><?php echo $produk['detail2'] ?></p>
                          <p style="text-align=left"><?php echo $produk['detail3'] ?></p>
                          <p style="text-align=left"><?php echo $produk['detail4'] ?></p>
                          <p style="text-align=left"><?php echo $produk['detail5'] ?></p>
                         </div>
                       </div>
<!-- 
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- NewsLetter -->
<!--   <div class="newsletter">
    <div class="container">
      <div class="w3agile_newsletter_left">
        <h3>sign up for our newsletter</h3>
      </div>
      <div class="w3agile_newsletter_right">
        <form action="#" method="post">
          <input type="email" name="Email" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" required="">
          <input type="submit" value="subscribe now">
        </form>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
 -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>