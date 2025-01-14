<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="<?php echo base_url("LogoPSS.png"); ?> rel=" icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=<?php echo base_url("admin/vendor/bootstrap/css/bootstrap.min.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("admin/vendor/bootstrap-icons/bootstrap-icons.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("admin/vendor/boxicons/css/boxicons.min.css"); ?>rel="stylesheet">
    <link href=<?php echo base_url("admin/vendor/quill/quill.snow.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("admin/vendor/quill/quill.bubble.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("admin/vendor/remixicon/remixicon.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("admin/vendor/simple-datatables/style.css"); ?>rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=<?php echo base_url("admin/css/style.css"); ?> rel="stylesheet">

</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <img src="<?php echo base_url("LogoPSS.png"); ?>" style="width:100px">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <span class="d-none d-lg-block">PSS SLEMAN</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form action="/admin/login" method="post" class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>


                                        <div class="col-12">
                                            <button class="btn btn-success w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">
                                                <?php
                                                if (isset($data['error'])) {
                                                    echo $data['error'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/vendor/chart.js/chart.umd.js"></script>
    <script src="admin/vendor/echarts/echarts.min.js"></script>
    <script src="admin/vendor/quill/quill.min.js"></script>
    <script src="admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="admin/js/main.js"></script>

</body>

</html>