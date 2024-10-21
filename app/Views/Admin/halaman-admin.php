<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="logoPSS.png" rel="icon">
  <!-- Favicons -->
  <link href=<?php echo base_url("assets/img/cropped-SITE-Icon-1%20(1).png"); ?> rel="icon">
  <link href=<?php echo base_url("assets/img/cropped-SITE-Icon-1%20(1).png"); ?> rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=<?php echo base_url("admin/vendor/bootstrap/css/bootstrap.min.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("admin/vendor/bootstrap-icons/bootstrap-icons.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("admin/vendor/boxicons/css/boxicons.min.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("admin/vendor/quill/quill.snow.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("admin/vendor/quill/quill.bubble.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("admin/vendor/remixicon/remixicon.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("admin/vendor/simple-datatables/style.css"); ?> rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=<?php echo base_url("admin/css/style.css"); ?> rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src=<?php echo base_url("assets/img/logo.png"); ?> alt="">
        <span class="d-none d-lg-block">Halaman Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">





        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>



          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">



          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src=<?php echo base_url("admin/img/messages-1.jpg"); ?> alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src=<?php echo base_url("admin/img/messages-2.jpg"); ?> alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src=<?php echo base_url("admin/img/messages-3.jpg"); ?> alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src=<?php echo base_url("admin/img/profile-img.jpg"); ?> alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="/admin/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin/halaman_admin">
          <i class="ri-shopping-cart-2-line"></i>
          <span>Pemesanan</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/tambah_event">
          <i class="bi bi-menu-button-wide"></i>
          <span>Tambah Event</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/tambah_tiket">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Tambah Tiket</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->





      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->




    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="halaman-admin.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pemesanan</h5>


                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">No Invoice</th>
                      <th scope="col">Kode Tiket</th>
                      <th scope="col">NIK</th>
                      <th scope="col">Tanggal Nota</th>
                      <th scope="col"> Tribun</th>
                      <th scope="col"> Harga Total</th>
                      <th scope="col"> Jumlah Tiket</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $hitung = 1; ?>
                    <?php foreach ($memesan as $row) : ?>

                      <tr>
                        <th scope="row"><?php echo $hitung; ?></th>
                        <td><?php echo $row['no_invoice']; ?> </td>
                        <td><?php echo $row['kode_tiket']; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['tanggal_nota']; ?></td>
                        <td><?php echo $row['tribun']; ?></td>
                        <td><?php echo $row['harga_total']; ?></td>
                        <td><?php echo $row['jumlah_tiket']; ?></td>
                      </tr>
                      <?php $hitung = $hitung + 1; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src=<?php echo base_url("admin/vendor/apexcharts/apexcharts.min.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/chart.js/chart.umd.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/echarts/echarts.min.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/quill/quill.min.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/simple-datatables/simple-datatables.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/tinymce/tinymce.min.js"); ?>></script>
  <script src=<?php echo base_url("admin/vendor/php-email-form/validate.js"); ?>></script>

  <!-- Template Main JS File -->
  <script src=<?php echo base_url("admin/js/main.js"); ?>></script>

</body>

</html>