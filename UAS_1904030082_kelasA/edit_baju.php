<?php
  require 'function.php';

  $id = $_GET['id'];
  $baju = query("SELECT * FROM db_tokobaju WHERE id = $id");
  if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
      echo "
      <script>
        alert('Data Berhasil di Edit..!');
        document.location.href='detail_baju.php'
        </script>
        ";
    } else {
      echo "
      <script>
        alert('Data Gagal di Edit..!');
        </script>
        ";
    }
  }
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
        <h3 class="section-heading text-uppercase mb-5">EDIT DATA BAJU</h3>
      </div>

      <div class="row">
        <div class="col px-3">
          <form method="POST" action="">
            <input type="hidden" class="form-control" value="<?= $baju['id'] ?>" name="id">
            <div class="form-group">
              <label for="kode_baju" class="form-label mt-2">Kode Baju</label>
              <input type="text" class="form-control" id="kode_baju" value="<?= $baju['kode_baju'] ?>"
                placeholder="Kode Baju" name="kode_baju" autofocus required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="nama_baju" class="form-label mt-2">Nama Produk</label>
              <input type="text" class="form-control" id="nama_baju" value="<?= $baju['nama_baju'] ?>"
                placeholder="Nama Baju" name="nama_baju" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="harga_baju" class="form-label mt-2">Harga Baju</label>
              <input type="text" class="form-control" id="harga_baju" value="<?= $baju['harga_baju'] ?>"
                placeholder="Harga Baju" name="harga_baju" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="stok_baju" class="form-label mt-2">Stok Baju</label>
              <input type="text" class="form-control" id="stok_baju" value="<?= $baju['stok_baju'] ?>"
                placeholder="Stok Baju" name="stok_baju" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="gambar_baju" class="form-label mt-2">Upload Gambar</label>
              <input class="form-control" type="file" id="gambar_baju" value="<?= $baju['gambar_baju'] ?>"
                placeholder="Gambar Baju" name="gambar_baju" required autocomplete="off">
            </div>
            <button type="tambah" class="btn btn-danger mt-3" name="edit">Simpan</button>
            <a href="detail_baju.php" class="btn btn-dark mt-3" role="button">Kembali</a>
          </form>
        </div>
      </div>
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