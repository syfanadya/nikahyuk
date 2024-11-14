<?php 
include "ceklogin.php";
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tulis Komentar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetspesanan/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetspesanan/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetspesanan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetspesanan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetspesanan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetspesanan/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assetspesanan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assetspesanan/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center">
                <img src="assetspesanan/img/logo.png" alt="">
                <span>NikahYuk</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="dashboard.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="dashboard.php#katalog">Katalog</a></li>
                    <li class="dropdown"><a href="dashboard.php#komentar"><span>Komentar</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="semuakomentar.php">Semua Komentar</a></li>
                            <li><a href="tuliskomentar.php">Tulis Komentar</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="dashboard.php#pertanyaan">Pertanyaan</a></li>

                    <li class="dropdown"><a href="statuspesanan.php"><span>Pemesanan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="statuspesanan.php">Status Pesanan</a></li>
                            <li><a href="buatpesanan.php">Buat Pesanan</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Pembayaran</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="inforekening.php">Info Rekening</a></li>
                            <li><a href="submitbukti.php">Upload Bukti Pembayaran</a></li>
                            <li><a href="statuspembayaran.php">Status Pembayaran</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span><?php echo $_SESSION['username'] ?></span></a>
                        <ul>
                            <li>
                                <a href="">
                                    <?php 
                    $sql = "SELECT email FROM users WHERE username='{$_SESSION['username']}'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        $row = mysqli_fetch_assoc($result);
                        $email = $row['email'];
                        echo $email;
                    } else {
                        echo "Username tidak ditemukan.";
                    }
                  ?>
                                </a>
                            </li>
                            <li><a href="logout.php">Keluar</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Komentar</li>
                    <li>Tulis Komentar</li>
                </ol>
                <h2>Tulis Komentar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Pesanan Section ======= -->
        <section id="pesanan-details" class="pesanan-details">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="pesanan-info">
                            <h3>Detail</h3>
                            <ul>
                                <li><a href="semuakomentar.php"><b>Semua Komentar</b></a></li>
                                <li><a href="tuliskomentar.php"><b>Tulis Komentar</b></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-8">

                        <div class="pesanan-form">
                            <form enctype="multipart/form-data" action="proseskomen.php" class="form" method="POST">
                                <div class="row">
                                    <div class="input-group">
                                        <label>Nama</label>
                                        <input type="text" class="input-control" name="nama">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group">
                                        <label>Komentar</label>
                                        <textarea class="input-control" name="komentar"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group">
                                        <button type="submit" class="btn-1">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Pesanan Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assetspesanan/img/logo.png" alt="">
                            <span>NikahYuk</span>
                        </a>
                        <p>Nikahyuk Membantu Anda Membagikan Kabar Bahagia dengan Undangan Pernikahan Digital yang
                            Menarik.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://wa.me/6281358008183" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Tautan Navigasi</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Mengapa Ny</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Katalog</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Pertanyaan</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Komentar</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Layanan Kami</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Undangan Digital</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Desain & Layout Kustom</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Kolaborasi Tim</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Kontak Kami</h4>
                        <p>
                            Bandung<br>
                            Jawa Barat<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 8235 8008 183<br>
                            <strong>Email:</strong> nikahyuk@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>NikahYuk</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by NikahYuk
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetspesanan/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assetspesanan/vendor/aos/aos.js"></script>
    <script src="assetspesanan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetspesanan/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetspesanan/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assetspesanan/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetspesanan/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetspesanan/js/main.js"></script>

</body>

</html>