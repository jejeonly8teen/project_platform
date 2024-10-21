<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Konfirmasi</title>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/bootstrap/css/bootstrap.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/fonts/ionicons.min.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/Contact-Form-Clean.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/Features-Boxed.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/Footer-Dark.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/header.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/Highlight-Blue.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/Navigation-Clean.css"); ?>>
    <link rel="stylesheet" href=<?php echo base_url("Tiket/assets/css/untitled-2.css"); ?>>
</head>

<body>
    <header>
        <div class="container-fluid d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start" id="container-header" style="background: url(&quot;assets/img/HEADLINE.png&quot;) right / cover;"><img id="image1" src="assets/img/cropped-SITE-Icon-1%20(1).png">
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
    <section class="highlight-blue" style="background: url(&quot;assets/img/sleman.jpg&quot;) top / cover repeat;padding: 200px 0px;">
        <h1 class="text-center" style="font-size: 45.88px;">KONFIRMASI PESANAN</h1>
        <div class="container">
            <div class="intro">
                <p class="text-center">ISI PEMESANAN ---&gt; KONFIRMASI&nbsp; ---&gt; KIRIM</p>
            </div>
            <div class="buttons"></div>
        </div>
    </section>
    <section class="contact-clean" style="background: #003825;padding-bottom: 156px;">
        <h1 style="color: rgb(255,255,255);margin-left: 9%;">Mohon diisi dengan benar</h1><img src="assets/img/garis.png" style="width: 100%;height: 150px;margin-top: -272px;margin-right: -14px;margin-bottom: -411px;object-fit: cover;margin-left: -30px;">
        <form method="post" style="background: rgba(255,255,255,0);color: var(--bs-gray-100);width: 70%;height: 362.391px;padding: 10px;padding-left: 9px;margin-left: 8%;margin-top: 40px;padding-right: 10px;padding-bottom: 6px;margin-right: 396.5px;margin-bottom: 9px;">
            <h2 class="text-center"></h2><label class="form-label">Tanggal Pesan :&nbsp;</label>
            <div class="mb-3"><input class="form-control" type="date" name="tgl" style="color: var(--bs-body-color);width: 90%;"></div><label class="form-label">Email :&nbsp;</label>
            <div class="mb-3"><input class="form-control" type="text" id="email" name="email" placeholder="E-Mail" style="color: rgb(0,0,0);width: 90%;"></div><label class="form-label">Kode Keamanan :&nbsp;</label>
            <div class="mb-3"><input class="form-control" type="text" name="kode_keamanan" placeholder="Kode Keamanan" style="color: rgb(0,0,0);width: 90%;"></div><label class="form-label">Upload Bukti Pembayaran :&nbsp;</label><input class="form-control" type="file" style="padding-left: 18px;margin-left: 0px;width: 255px;">
            <div class="mb-3"></div>
            <div class="mb-3"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><button class="btn btn-primary" id="reset" type="submit">RESET</button><button class="btn btn-primary" id="kirim" type="submit">kIRIM</button></div>
        </form>
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