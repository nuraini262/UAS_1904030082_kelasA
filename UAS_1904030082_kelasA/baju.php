<?php
  require 'function.php';
  $baju = query("SELECT * FROM db_tokobaju");
  
  if (isset($_POST['cari'])) {
    $baju = cari($_POST['keyword']);
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
        <h3 class="text-uppercase mb-5">KATEGORI PRODUK</h3>
      </div>

      <div class="row">
        <div class="col px-3">
          <form method="POST" action="">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <div class="input-group">
                    <input type="text" id="keyword" name="keyword" class="form-control input-text"
                      placeholder="Cari Produk ..." autocomplete="off"><span class="input-group-addon">
                      <input type="submit" class="btn btn-dark" name="cari"></span>
                  </div>
                </div>
                <div class="col-md-4 mt-1 fst-italic fw-bold">
                  <h5 class="text-end">Cari Baju Berdasarkan Nama</h5>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <table class="table table-striped text-center mt-5">
        <thead>
          <hr>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Baju</th>
            <th scope="col">Nama Baju</th>
            <th scope="col">Harga Baju</th>
            <th scope="col">Stok Baju</th>
            <th scope="col">Gambar Baju</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>

        <?php if (empty($baju)) : ?>
        <tr>
          <td colspan="4" class="alert alert-danger text-center" role="alert">
            <p>Data Baju Tidak Ditemukan</p>
          </td>
        </tr>
        <?php endif; ?>

        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($baju as $bajuu) : ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $bajuu['kode_baju']; ?></td>
            <td><?php echo $bajuu['nama_baju']; ?></td>
            <td><?php echo $bajuu['harga_baju']; ?></td>
            <td><?php echo $bajuu['stok_baju']; ?></td>
            <td><img src="image/<?php echo $bajuu['gambar_baju']; ?>" width="100"></td>
            <td><a href="detail_baju.php?id=<?= $bajuu['id']; ?>" class="btn btn-secondary" role="button">Detail</a>
            </td>
          </tr>
          <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
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