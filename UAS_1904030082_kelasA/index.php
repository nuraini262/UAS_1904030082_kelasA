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
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
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

  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
      <div class="fs-1 fw-bold text-uppercase">SELAMAT DATANG DI</div><br>
      <img src="image/navbar-logo.png" width="500" height="100" alt="navbar-logo" />
    </div><br>
    <a class="btn btn-primary btn-lg text-uppercase" href="#team">KUNJUNGI ALAMAT</a>
  </header>
  <!-- End Masthead-->

  <!-- Team-->
  <section class="page-section bg-warning" id="team">
    <div class="container">
      <div class="text-center">
        <div class="fs-1 fw-bold text-uppercase mb-1">ALAMAT LENGKAP</div><br>
        <img src="image/navbar-logo.png" width="500" height="100" alt="navbar-logo" />
      </div>
      <div class="row">
        <div class="col-lg">
          <div class="text-center mt-5">
            <img class="rounded mb-5" src="image/brand.jpg" width="900" height="500" alt="brand" />
            <h2>Alamat : Jl. Kolonel Masturi No.163a, Cipageran, <br> Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40523
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Team-->

  <!-- Contact-->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="text-center">
        <h2 class="fs-1 fw-bold text-white text-uppercase mb-5">KOMENTAR</h2>
      </div>
      <!-- * * * * * * * * * * * * * * *-->
      <!-- * * SB Forms Contact Form * *-->
      <!-- * * * * * * * * * * * * * * *-->
      <!-- This form is pre-integrated with SB Forms.-->
      <!-- To make this form functional, sign up at-->
      <!-- https://startbootstrap.com/solution/contact-forms-->
      <!-- to get an API token!-->
      <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="row align-items-stretch mb-5">
          <div class="col-md-6">
            <div class="form-group">
              <!-- Name input-->
              <input class="form-control" id="name" autocomplete="off" type="text" placeholder="Your Name *"
                data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <div class="form-group">
              <!-- Email address input-->
              <input class="form-control" id="email" autocomplete="off" type="email" placeholder="Your Email *"
                data-sb-validations="required,email" />
              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <div class="form-group mb-md-0">
              <!-- Phone number input-->
              <input class="form-control" id="phone" autocomplete="off" type="tel" placeholder="Your Phone *"
                data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
              <!-- Message input-->
              <textarea class="form-control" autocomplete="off" id="message" placeholder="Your Message *"
                data-sb-validations="required"></textarea>
              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
            </div>
          </div>
        </div>
        <!-- Submit success message-->
        <!---->
        <!-- This is what your users will see when the form-->
        <!-- has successfully submitted-->
        <div class="d-none" id="submitSuccessMessage">
          <div class="text-center text-white mb-3">
            <div class="fw-bolder">Form submission successful!</div>
            To activate this form, sign up at
            <br />
            <a
              href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
          </div>
        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
          <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <!-- Submit Button-->
        <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton"
            type="submit">Send Message</button></div>
      </form>
    </div>
  </section>
  <!-- End Contact-->

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