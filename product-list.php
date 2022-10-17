<?php 
  require "koneksi.php"; 
  $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk");

  $queryKategori = mysqli_query($con, "SELECT * FROM kategori");

  // get produk by keyword
  if(isset($_GET['keyword'])){
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
  }
  // get produk by kategori
  else if(isset($_GET['kategori'])){
    $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
    $kategoriId = mysqli_fetch_array($queryGetKategoriId);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
  }
  // get produk default
  else{
    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
  }

  // $countData = mysqli_nums_rows($queryProduk);
  // echo $countData;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="dist/css/lightbox.css">
    <link rel="icon" href="img/logo-icon/cctv_b2b.png">
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <title>CCTV LAB | List Product</title>
</head>

<body>
<!-- awal navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="index.php">CCTV LAB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Hubungi Kami</a>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Product
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php while($kategori = mysqli_fetch_array($queryKategori)) {?>
                    <a href="product-list.php?kategori=<?php echo $kategori['nama'] ?>" class="dropdown-item">
                      <li><?php echo $kategori['nama'];?></li>
                    </a>
                  <?php } ?>
                </ul>
              </li>
              <form method="get" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" >
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </ul>
          </div>
        </div>
      </nav>
<!-- akhir navbar -->

<div class="content">
  <div class="logo_top">
    <img src="img/logo-icon/cctv_b2b.png">
</div>
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
                <?php while($produk = mysqli_fetch_array($queryProduk)) {?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/product-list/<?php echo $produk['foto'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $produk['nama'];?></h5>
                          <a href="detail.php?nama=<?php echo $produk['nama']; ?>" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                </div>
                <?php } ?>
        </div>
    </div>
</section>

  <div class="selengkapnya">
    <div class="container">
      <div class="col">
            <button type="button" class="btn btn-primary tombol"><a href="contact-us.php" style="text-decoration:none; color: white;">Hubungi Kami!</a></button>
        </div>
    </div>
  </div>

<!-- footer -->
<footer>
  <div class="container">
    <p class="footer-bottom">&copy; 2022 CCTV LAB MEDAN All Created By 💕 Wahyu Ardiansyah</p>
  </div>
</footer>
<!-- Akhir Footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>