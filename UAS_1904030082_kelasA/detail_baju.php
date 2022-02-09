<?php
  require 'function.php';
  if (!isset($_GET['id'])) {
    header('location: baju.php');
    exit;
  }
  $id = $_GET['id'];
  $baju = query("SELECT * FROM db_tokobaju WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Adorable Projects</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="image/navbar-logo.png" width="250" height="70"
          alt="navbar-logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">MENU UTAMA</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#team">ALAMAT</a></li>
          <li class="nav-item"><a class="nav-link" href="baju.php">PRODUK</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#contact">KOMENTAR</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation-->

  <!-- Produk-->
  <section class="page-section" id="portfolio">
    <div class="container justify-content-center">
      <div class="text-center mt-5">
        <h3 class="section-heading text-uppercase mb-5">DETAIL BAJU</h3>
      </div>

      <ul class="list-group">
        <li class="list-group-item text-black active">Kode Baju : <?= $baju['kode_baju']; ?></li>
        <li class="list-group-item"><img class="rounded" src="image/<?php echo $baju['gambar_baju']; ?>" width="250px">
        </li>
        <li class="list-group-item">Nama Baju : <?= $baju['nama_baju']; ?></li>
        <li class="list-group-item">Harga Baju : <?= $baju['harga_baju']; ?></li>
        <li class="list-group-item">Stok Baju : <?= $baju['stok_baju']; ?></li>
        <li class="list-group-item">
          <a href="edit_baju.php?id=<?= $baju['id']; ?>" class="btn btn-warning" role="button">Edit</a>
          <a href="hapus.php?id=<?= $baju['id']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"
            class="btn btn-danger" role="button">Hapus</a>
          <a href="baju.php" class="btn btn-dark" role="button">Kembali</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- End Produk -->

  <!-- Footer-->
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 text-center">Copyright &copy; Adorable Projects 2022</div>
        <div class="col-lg-6 text-center">
          <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
          <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer-->

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>