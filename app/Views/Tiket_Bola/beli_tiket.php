<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Pemesanan</title>
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
        <div class="container-fluid d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-start justify-content-sm-start justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start" id="container-header" style="background: url(&quot;<?php echo base_url("Tiket/img/HEADLINE.png"); ?> &quot;) right / cover;"><img id="image1" src=<?php echo base_url("Tiket/img/logoo.png"); ?>>
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
    <section class="highlight-blue" style="background: url(&quot;<?php echo base_url("Tiket/img/sleman.jpg"); ?> &quot;) top / cover repeat;padding: 237px 0;">
        <div class="container">
            <div class="intro">
                <h1 class="text-center" style="font-size: 55.88px;">PEMESANAN TIKET</h1>
                <p class="text-center">ISI PEMESANAN ---&gt; KONFIRMASI ---&gt; KIRIM</p>
            </div>
            <div class="buttons"></div>
        </div>
    </section>
    <section class="contact-clean" style="background: #003825;">
        <h1 style="color: rgb(255,255,255);margin-right: 0px;margin-left: 73px;margin-top: -47px;">Isilah pemesanan ini dengan tepat</h1><img src=<?php echo base_url("Tiket/img/garis.png"); ?> style="width: 985px;height: 150px;margin: -126px -89px -253px 0px;margin-bottom: -406px;margin-top: -286px;margin-right: -89px;margin-left: -46px;object-fit: cover;" width="985" height="599">
        <form action="/proses_pembelian" method="post" style="background: #003825;color: var(--bs-gray-100);margin-top: 100px;margin-left: 34.5px;">
            <div class="mb-3"><input class="form-control" type="text" id="nama" name="nama" placeholder="Nama" style="color: var(--bs-gray-dark);"></div>
            <div class="mb-3"><input class="form-control" type="text" name="nik" placeholder="NIK" style="color: var(--bs-gray-dark);"></div>
            <div class="mb-3"><input class="form-control" type="text" name="nomor_hp" placeholder="Nomor HP" style="color: var(--bs-gray-dark);"></div>
            <div class="mb-3"><input class="form-control " type="email" name="email" placeholder="Email" style="color: var(--bs-gray-dark);"></div>
            <div class="mb-3"><label class="form-label" for="liga" style="margin-right: 10px;">Liga:</label><input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="liga" name="liga" value="<?php echo $event['liga']; ?>" readonly="true"></div>
            <div class="mb-3" style="display:none;"><label class="form-label" for="id" style="margin-right: 10px;">Id event:</label><input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="id" name="id_event" value="<?php echo $event['id_event']; ?>" readonly="true"></div>
            <div class="mb-3" style="display:none;"><input class="form-control" type="text" id="kode_tiket" name="kode_tiket" value="<?php echo $event['kode_tiket']; ?>" style="color: var(--bs-gray-dark);"></div>

            <div class="mb-3"><label class="form-label" for="event" style="margin-right: 10px;">Event:</label><input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="event" name="nama_event" value="<?php echo $event['nama_event']; ?>" readonly="true"></div>
            <div class="mb-3"><label class="form-label" for="waktu" style="margin-right: 10px;">Tanggal dan Waktu:</label><input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="waktu" name="waktu" value="<?php echo $event['jadwal_club']; ?>" readonly="true"></div>
            <div class="mb-3"><label class="form-label" for="stadion" style="margin-right: 10px;">Stadion:</label><input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="stadion" name="stadion" value="<?php echo $event['tempat_pertandingan']; ?>" readonly="true"></div>
            <div class="mb-3">
                <label class="form-label" for="tribun" style="margin-right: 10px;">Tribun:</label>
                <select class="form-select" name="tribun" id="tribun" onchange="updateHarga()">
                    <option harga="<?= $event['harga_tiket']; ?>" value="Utara">Utara</option>
                    <option harga="<?= $event['harga_tiket']; ?>" value="Selatan">Selatan</option>
                    <option harga="<?= $event['harga_tiket']; ?>" value="Timur">Timur</option>
                    <option harga="<?= $event['harga_tiket']; ?>" value="Barat">Barat</option>
                    <option harga="<?= $event['harga_tiket']; ?>" value="VIP">VIP</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="harga" style="margin-right: 10px;">Harga Tiket:</label>
                <input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="harga" name="harga_tiket" value="<?= $event['harga_tiket']; ?>" readonly="true">
            </div>

            <div class="mb-3">
                <label class="form-label" for="jumlah" style="margin-right: 10px;">Jumlah Pemesanan Tiket:</label>
                <input style="color: var(--bs-gray-dark);" class="form-control" type="number" name="jumlah_tiket" id="jumlah" oninput="naikjumlah()">
            </div>

            <div class="mb-3">
                <label class="form-label" for="total" style="margin-right: 10px;">Total harga:</label>
                <input style="color: var(--bs-gray-dark);" class="form-control" type="text" id="total" name="harga_total" value="<?= $event["harga_tiket"] ?>" readonly="true">
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                function updateHarga() {
                    var selectElement = document.getElementById("tribun");
                    var hargaElement = document.getElementById("harga");
                    var hargaTiket = parseInt($("#tribun").find(":selected").attr("harga"));

                    hargaElement.value = hargaTiket;
                    naikjumlah();
                }

                function naikjumlah() {
                    var k = $("#jumlah").val();
                    var x = parseInt($("#tribun").find(":selected").attr("harga"));
                    var y = k * x;
                    document.getElementById('total').value = y;
                }
            </script>
            <div class="mb-3"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">PESAN</button></div>
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
    <script src=<?php echo base_url("Tiket/bootstrap/js/bootstrap.min.js"); ?>></script>
</body>

</html>