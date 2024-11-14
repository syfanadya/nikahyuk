<?php 
include "ceklogin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./cssdashboard/style.css" />
    <!-- font awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="shortcut icon" href="./asetdashboard/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="body-home-page">
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo"><img src="./asetdashboard/logo.png" alt="" /></a>

        <div class="navbar-nav-home">
            <a href="#mengapa">Mengapa Ny</a>
            <a href="#katalog">Katalog</a>
            <a href="statuspesanan.php">Pemesanan</a>
            <a href="inforekening.php">Pembayaran</a>
            <a href="semuakomentar.php">Komentar</a>
            <a href="#pertanyaan">Pertanyaan</a>
        </div>

        <div class="navbar-extra-home">
            <a href="#">
                <?php echo $_SESSION['username'] ?>
            </a>
            <a href="logout.php">
                KELUAR
            </a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->




    <div class="home-text">
        <pre class="pre1">
        Jadikan
        Momen Bahagiamu
        Lebih Spesial
        Dengan Undangan
        Pernikahan Digital !!
      </pre>
        <pre class="pre2">
        Undangan pernikahan digital memungkinkan
        kamu untuk mengirim undangan ke seluruh
        dunia tanpa batasan jarak dan waktu.
      </p>
      </pre>
    </div>

    <section class="hero" id="home">
        <main class="content">
            <img class="img-home1" src="./asetdashboard/home-1.png" alt="">
            <img class="img-home2" src="./asetdashboard/home-2.png" alt="">
        </main>
    </section>



    <!-- mengapa ny start -->
    <section id="mengapa" class="mengapa">
        <div class="mengapa-slide">
            <pre class="mengapa-pre1">
Mengapa Menggunakan
Undangan Digital
        </pre>

            <img class="img-mengapa1" src="./asetdashboard/mengapa1.png" alt="">
            <p class="mengapa-p1">Praktis</p>
            <pre class="mengapa-pre2">
Kamu dapat memesan undangan kapan saja dan di mana saja
hanya melalui ponsel, dengan memasukkan data yang 
diperlukan, dan undangan siap untuk dibagikan.
        </pre>
        </div>

        <!-- ===================================================================== -->

        <div class="mengapa-slide">
            <pre class="mengapa-pre1">
Mengapa Menggunakan 
Undangan Digital
        </pre>

            <img class="img-mengapa1" src="./asetdashboard/mengapa2.png" alt="">
            <p class="mengapa-p1">Ramah Lingkungan </p>
            <pre class="mengapa-pre2">
Kamu bisa mengurangi limbah sampah plastik 
dan kertas dengan menggunakan undangan 
berbasis website.  
        </pre>
        </div>

        <!-- ===================================================================== -->

        <div class="mengapa-slide">
            <pre class="mengapa-pre1">
Mengapa Menggunakan
Undangan Digital
        </pre>

            <img class="img-mengapa1-slide3" src="./asetdashboard/mengapa3.png" alt="">
            <p class="mengapa-p1">Hemat Biaya dan Waktu </p>
            <pre class="mengapa-pre2">
Undangan pernikahan digital memungkinkan kamu 
untuk  mengirim undangan kepada tamu 
undangan tanpa batas.  
        </pre>
        </div>

        <button id="prevButton" class="prevButton"><img src="./asetdashboard/left2.png" alt=""></button>
        <button id="nextButton" class="nextButton"><img src="./asetdashboard/right.png" alt=""></button>

    </section>
    <!-- mengapa ny end -->



    <!-- katalog start -->
    <section id="katalog" class="katalog">

        <div class="pembungkus">
            <p class="katalog-text">Katalog Desain Undangan</p>

            <div class="content">
                <div class="container-katalog">
                    <p class="title-katalog">Classic</p>
                    <img class="img-katalog" src="./asetdashboard/des1.png" alt="">
                    <a class="target-katalog" href="./targetdesain/desain4.php">LIHAT DETAIL</a>
                </div>
                <div class="container-katalog">
                    <p class="title-katalog">Blue Blossom</p>
                    <img class="img-katalog" src="./asetdashboard/des2.png" alt="">
                    <a class="target-katalog" href="./targetdesain/desain5.php">LIHAT DETAIL</a>
                </div>
                <div class="container-katalog">
                    <p class="title-katalog">Golden</p>
                    <img class="img-katalog" src="./asetdashboard/des3.png" alt="">
                    <a class="target-katalog" href="./targetdesain/desain6.php">LIHAT DETAIL</a>
                </div>
            </div>
    </section>
    <!-- katalog end -->

    <!-- komentar start -->
    <section id="komentar" class="komentar">
        <div class="title">
            <h2>Komentar</h2>
        </div>
        <div class="container" data-aos="fade-up">

            <header class="section-header">


                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <?php 
                require_once "config.php";
                $sql = "SELECT 
                        id_komentar,  
                        nama,
                        komentar
                        FROM komentar
                        ORDER BY id_komentar DESC";
                $result = mysqli_query($conn, $sql);
                $nomor = 0;
                while ($row = mysqli_fetch_array($result)) {
                $nomor++;
                ?>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>

                                <div class="profile mt-auto">
                                    <h3><?php echo $row[1]; ?></h3>
                                    <p>
                                        <?php echo $row[2]; ?>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <?php
                }
                ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

        </div>

    </section>
    <!-- komentar end -->

    <!-- pertanyaan start -->
    <section id="pertanyaan" class="pertanyaan">
        <div class="tanya">
            <p class="pertanyaan-title">Pertanyaan</p>
            <div class="box">
                <div class="box-pertanyaan">
                    <p class="ditanya">Bagaimana cara memesan undangan ? </p>
                    <p class="jawab">Silahkan registrasi dan login terlebih dahulu, lalu lihat desain-desain
                        menarik dikatalog , pilih salah satu lalu pesan akan diarahkan mengisi data-data,
                        setelah mengirim data lakukan pembayaran yang sudah tertera, sesudah pembayaran sukses
                        tunggu pesanan anda beberapa hari setelah pembayaran.
                    </p>
                </div>
                <div class="box-pertanyaan">
                    <p class="ditanya">Apakah undangan dapat di revisi jika ada perubahan ? </p>
                    <p class="jawab">Ya, undangan bisa direvisi melalui chat customer servise/whatsapp tertera.</p>
                </div>
                <div class="box-pertanyaan">
                    <p class="ditanya">Berapa lama masa aktif undangan website ? </p>
                    <p class="jawab">Undangan website tetap aktif walaupun acara pernikahan sudah selesai, aktif 3-5
                        tahun kedepan setelah pesanan undangan nikah digital selesai.</p>
                </div>
                <div class="box-pertanyaan">
                    <p class="ditanya">Bagaimana cara membagikan undangan kepada tamu undangan ? </p>
                    <p class="jawab">Sesudah pesanan undangan anda selesai kami akan mengirim berupa link website
                        udangan digital yang dipesan, anda hanya menyebarkan link undangan pernikahan dengan handphone
                        melalui media sosial seperti whatsapp, facebook, instagram, dll.</p>
                </div>
            </div>
            <a href="#"><i data-feather="arrow-up"></i></a>
        </div>
    </section>
    <!-- pertanyaan end -->

    <script>
    feather.replace()
    </script>
    <script src="./jsdashboard/script.js"></script>
</body>

</html>