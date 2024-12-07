<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Login form</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Custom CSS -->
    <style>
      /* Gaya untuk input field */
      .input-style-1 input {
        border: 1px solid #ccc; /* Warna garis default */
        border-radius: 4px; /* Membuat sedikit lengkung */
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        transition: border-color 0.3s ease; /* Animasi transisi untuk garis tepi */
      }

      /* Fokus pada input */
      .input-style-1 input:focus {
        border-color: #007bff; /* Warna biru */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Efek cahaya */
        outline: none; /* Menghapus outline default */
      }
    </style>
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ========== signin-section start ========== -->
    <section class="signin-section">
      <div class="container-fluid">
        <div class="row g-0 auth-row">
          <div class="col-lg-6">
            <div class="auth-cover-wrapper bg-primary-100">
              <div class="auth-cover">
                <div class="title text-center">
                  <h1 class="text-primary mb-10">Welcome Back</h1>
                  <p class="text-medium">
                  silahkan login untuk melihat data penggajian anda.
                  </p>
                </div>
                <div class="cover-image">
                  <img src="assets/images/auth/signin-image.svg" alt="" />
                </div>
                <div class="shape-image">
                  <img src="assets/images/auth/shape.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-6">
            <div class="signin-wrapper">
              <div class="form-wrapper">
                <h6 class="mb-15">Login Form</h6>
                <p class="text-sm mb-25">
                  Masuk ke akun anda untuk melanjutkan.
                </p>
                <form action="dashboard">
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label for="username" class="form-label">Username</label>
                        <input
                          type="text"
                          class="form-control"
                          id="username"
                          name="username"
                          required
                        />
                      </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                      <div class="input-style-1">
                        <label for="password" class="form-label">Password</label>
                        <input
                          type="password"
                          class="form-control"
                          id="password"
                          name="password"
                          required
                        />
                      </div>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                      <button
                        class="main-btn primary-btn btn-hover w-100 text-center"
                      >
                        Login
                      </button>
                    </div>
                  </div>
                  <!-- end row -->
                </form>
                <div class="singin-option pt-40"></div>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
    </section>
    <!-- ========== signin-section end ========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
