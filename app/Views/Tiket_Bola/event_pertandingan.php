<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Event Pertandingan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="logoPSS.png" rel="icon">
    <link rel="stylesheet" href=<?php echo base_url("Tiket/bootstrap/css/bootstrap.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/fonts/ionicons.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/Contact-Form-Clean.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/Features-Boxed.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/Footer-Dark.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/header.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/Highlight-Blue.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/Navigation-Clean.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/css/untitled-2.css"); ?>>
</head>

<body>
    <header>
        <div class="container-fluid d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start" id="container-header" style="background: url(&quot;assets/img/HEADLINE.png&quot;) right / cover;"><img id="image1" src="assets/img/logoo.png">
            <div>
                <h1 id="heading1" style="color: var(--bs-gray-100);">PSS SLEMAN</h1>
                <h1 id="heading2" style="color: var(--bs-gray-100);">OFFICIAL WEBSITE</h1>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-dark navigation-clean" style="color: var(--bs-white);">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto" style="color: var(--bs-white);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link " href='/halaman_customer' style="color: var(--bs-white);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/event_pertandingan" style="color: var(--bs-white);">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="/jadwal_pertandingan" style="color: var(--bs-white);">Jadwal Pertandingan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--bs-white);">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="highlight-blue" style="background: url(&quot;<?php echo base_url("Tiket/img/sleman.jpg"); ?>&quot;) top / cover repeat;padding: 200px 0px;">
        <h1 class="text-center" style="font-size: 45.88px;">EVENT PERTANDINGAN</h1>
        <div class="container">
            <div class="intro">
                <p class="text-center">HOME ---&gt; EVENT PERTANDINGAN --&gt; PESAN TIKET</p>
            </div>
            <div class="buttons"></div>
        </div>
    </section>
    <section class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Liga 1</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row justify-content-center features">


                <?php foreach ($event as $row) : ?>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><img src=<?php echo base_url("assets/img/" . $row['gambar']); ?>>
                            <h3 class="name"><?php echo $row['nama_event']; ?></h3>
                            <p class="description"><?php echo $row['jadwal_club']; ?></p>
                            <a class="learn-more" href='event/<?php echo $row['id_event']; ?>/beli-tiket'>Beli Tiket »</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2023</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>