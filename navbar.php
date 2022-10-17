<?php
require 'koneksi.php';

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
    $queryProduk = mysqli_query($con, "SELECT * FROM produk LIMIT 3");
  }

?>
    
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
               <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
              <!-- <form method="get" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" >
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </ul>
          </div>
        </div>
      </nav>