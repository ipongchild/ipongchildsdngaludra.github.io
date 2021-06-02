<!-- sambungkan ke function-->
<?php
    require '../function/function.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title> <?PHP echo "$titlesekolah1"; ?> </title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Sambungkan ke my style custom-->
    <link href="css/my-style.css" rel="stylesheet">


    

        <!-- navbars core CSS -->
        <link href="../page12/navbars/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="navbar.css" rel="stylesheet">

        <!-- animasi css AOS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>


    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark navbar-background" aria-label="Third navbar example">
                <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong>SDN GALUDRA</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample03">
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="#">Agenda Kegiatan</a></li>
                        <li><a class="dropdown-item" href="#">Libur Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Unduhan</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="#">RPP</a></li>
                        <li><a class="dropdown-item" href="#">Kalender Pendidikan</a></li>
                        <li><a class="dropdown-item" href="#">KKO</a></li>
                        <li><a class="dropdown-item" href="#">Teori Para Ahli</a></li>
                        <li><a class="dropdown-item" href="#">Alat Peraga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Galeri</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li><a class="dropdown-item" href="#">Album Foto</a></li>
                        <li><a class="dropdown-item" href="#">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-warning" type="submit">Login</button>
                    </form>
                </div>
                </div>
            </nav>
        </header>

        <div class="top-wrapper">
            <div class="container">
                <h1>SD NEGERI GALUDRA.</h1>
                <h1>KREATIFITAS TANPA BATAS.</h1>
                <p>Progate adalah platform online untuk belajar coding.</p>
                <p>Kami menawarkan lingkungan pemograman yang lengkap untuk mempermudah Anda memulai.</p>
                <div class="btn-wrapper">
                    <a class="btn btn-warning" href="#" class="btn signup">Daftar dengan Email</a>
                    <p>atau</p>
                    <a class="btn btn-warning" href="#" class="btn facebook"><span class="fa fa-facebook"></span>Daftar dengan Facebook</a>
                    <a href="#" class="btn twitter"><span class="fa fa-twitter"></span>Daftar dengan Twitter</a>
                </div>
            </div>
        </div>
        <div class="lesson-wrapper">
            <div class="container">
                <div class="heading" data-aos="fade-right" data-aos-duration="2000">
                    <h2>Apa Fungsi website sekolah?</h2>
                    <p> <?PHP echo "$tentang_aplikasi1"; ?> </p>
                </div>

                <!-- Content Row -->
                <div class="row" data-aos="fade-down" data-aos-duration="2000">

                <!-- First Column -->
                <div class="col-lg-4">

                    <!-- Custom Text Color Utilities -->
                    <div class="card shadow mb-4 card-background-sisforsaga">
                        <a href="login.php">
                        <button type="button" class="btn btn-grad btn-grad:hover text-white">Menejemen Sekolah
                            <div class="row no-gutters align-items-center text-warning">
                                <div class="col mr-2">
                                    <span class="icon">
                                        <img src="../img/svg/building.svg">
                                    </span>
                                    <span class="text-xs font-weight-bold text-uppercase mb-1"><strong>Sisforsaga</strong></span>
                                </div>
                            </div>
                        </button></a>
                    </div>

                </div>
                <!-- /.First Column -->

                <!-- Second Column -->
                <div class="col-lg-4">

                    <!-- Background Gradient Utilities -->
                    <div class="card shadow mb-4 card-background-news">
                        <a href="berita.php">
                        <button type="button" class="btn btn-grad btn-grad:hover text-white">Berita Sekolah
                            <div class="row no-gutters align-items-center text-warning">
                                    <div class="col mr-2">
                                        <span class="icon">
                                            <img src="../img/svg/calendar2-minus.svg">
                                        </span>
                                        <span class="text-xs font-weight-bold text-uppercase mb-1"><strong>Kegiatan & Pengumuman</strong></span>
                                    </div>
                                </div>
                            </button></a>
                    </div>

                </div>
                <!-- /.Second Column -->

                <!-- Third Column -->
                <div class="col-lg-4">

                    <!-- Grayscale Utilities -->
                    <div class="card shadow mb-4 card-background-book">
                        <a href="ebook.php">
                        <button type="button" class="btn btn-grad btn-grad:hover text-white">E-Book
                            <div class="row no-gutters align-items-center text-warning">
                                <div class="col mr-2">
                                    <span class="icon">
                                    <img src="../img/svg/book-half.svg">
                                    </span>
                                    <span class="text-xs font-weight-bold text-uppercase mb-1"><strong>Pembelajaran</strong></span>
                                </div>
                            </div>
                        </button></a>
                    </div>
                </div>
                <!-- /.Third Columnn -->

                </div>
                <!-- /.Content Row -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <br>
                            <br>
                            <br>
                            <br>
                            <h3 data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">Mengapa Website Sekolah Diperlukan?</h3>
                            <p align="justify" style="text-indent: 70px;" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="300">
                                <?PHP echo "$tentang_aplikasi2"; ?></p>
                        </div>
                        <div class="col-sm-6" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="500">
                            <img width="100%" width="100%" src="../img/animations/undraw_Faq_re_31cw.svg">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <!-- Web Sekolah -->
                <div class="card shadow mb-4" data-aos="fade-left" data-aos-offset="300">
                    <div class="card-body" style="background-color:#f7f7f7">
                        <div class="row">
                            <div class="col-sm-6" data-aos-offset="700">
                                <br>
                                <br>
                                <br>
                                <br>
                                <h3 data-aos="fade-left" data-aos-duration="3000">Mengapa Website Sekolah Diperlukan?</h3>
                                <p align="justify" style="text-indent: 70px;" data-aos="fade-left" data-aos-duration="3000">
                                    <?PHP echo "$tentang_aplikasi2"; ?></p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="500">
                                <img width="100%" width="100%" src="../img/animations/undraw_Faq_re_31cw.svg">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <!-- Sambutan KS -->
                <div class="card shadow mb-4">
                    <div class="card-body" style="background-color:#f7f7f7">
                        <div class="row">
                            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="3000">
                                <img width="40%" width="40%" src="../img/album/gtk/ahmad.JPG">
                                <p>Ahmad Badri Sama, S.Pd.,M.M.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-left" data-aos-duration="3000">
                                <br>
                                <h3>Sambutan Kepala Sekolah</h3>
                                <br>
                                <h6 align="left">
                                    <?PHP echo "$sambutan1"; ?></h6>
                                <p align="justify" style="text-indent: 70px;">
                                    <?PHP echo "$sambutan2"; ?></p>
                                    <a href="#" class="btn btn-grad-button btn-icon-split">
                                        <span class="icon text-white-50">
                                            <img src="../img/svg/arrow-right.svg"></img>
                                        </span>
                                        <span class="text">Baca Selengkapnya</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7" style="background-color:#f7f7f7">
                        <!-- Profil Sekolah -->
                        <div class="card shadow mb-4">
                            <div class="card-body" style="background-color:#f7f7f7" data-aos="flip-left" data-aos-duration="3000">
                                <div class="row">
                                    <h3 align="left" data-aos="fade-left" data-aos-duration="3000">Profil Sekolah</h3>
                                    <div class="col-sm-6" data-aos="fade-left" data-aos-duration="3000">
                                        <p align="justify" style="text-indent: 70px;">
                                            <?php echo "$sekolah"?> didirikan tahun 1979 diatas sebidang tanah dengan luas 2008 m2 dengan status kepemilikan tanah milik sekolah. 
                                            <?php echo "$sekolah"?> berada di daerah pedesaan dengan dikelilingi perbukitan dan persawahan milik masyarakat sekitar.
                                            <?php echo "$sekolah"?> berlokasi diwilayah desa Sukaresmi dengan perbatasan Kecamatan Sukaresmi dan Cikalongkulon.
                                            Jarak <?php echo "$sekolah"?> dengan pusat pemerintahan kecamatan Sukaresmi kira-kira 9,2 KM.
                                        </p>
                                        <div class="card shadow mb-4">
                                            <div class="card-body">
                                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <!-- memulai carousel -->
                                                        <div class="carousel-item active"> 
                                                            <img src="../img/album/gedung/selasar.jpg" 
                                                                        width="100%" 
                                                                        style="height:40%;"
                                                                        alt="0">
                                                        </div>
                                                        <div class="carousel-item"> 
                                                            <img src="../img/album/gedung/gedung tampak depan.jpg" 
                                                                        width="100%" 
                                                                        style="height:40%;"
                                                                        alt="0">
                                                        </div>
                                                        <div class="carousel-item end"> 
                                                            <img src="../img/album/gedung/samping gedung.jpg" 
                                                                        width="100%" 
                                                                        style="height:40%;"
                                                                        alt="0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-aos="fade-right" data-aos-duration="3000">
                                        <p align="justify" style="text-indent: 70px;">
                                            <?php echo "$sekolah"?> berstatus sekolah negeri yang dikelola oleh pemerintah daerah kabupaten Cianjur Jawa Barat. Sejak adanya Bantuan Operasional Sekolah (BOS) sekolah tidak lagi memungut iuran atau biaya operasional dari orang tua/ wali siswa dan sepenuhnya gratis tanpa dipungut biaya. 
                                            Alhamdulillah sejak berdirinya sekolah ini sudah menorehkan berbagai prestasi baik dibidang akademik maupun bidang non akademik.
                                            Walaupun demikian kami masih terus berjuang untuk mencapai hasil yang lebih maksimal, karena kami menyadari bahwasanya kami masih banyak kekurangan baik sarana dan prasarana ataupun pelayanan pendidikan guna mencapai SNP yang lebih baik lagi terutama dalam mencerdaskan siswa/i <?php echo "$sekolah"?>.
                                        </p>
                                        <a href="#" class="btn btn-grad-button btn-icon-split">
                                            <span class="icon text-white-50">
                                                <img src="../img/svg/arrow-right.svg"></img>
                                            </span>
                                            <span class="text">Baca Selengkapnya</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Roitation Utilities -->
                    <div class="col-xl-4 col-lg-5" data-aos="zoom-in" data-aos-duration="3000">
                        <div class="card shadow mb-4">
                            <div class="card-body text-center shadow mb-4" style="background-color:#f7f7f7">
                                <h3>Lokasi Sekolah</h3>
                                <h4 class="small font-weight-bold" style="text-align:center"> Desa Sukaresmi, Kec. Sukaresmi, Kabupaten Cianjur, Jawa Barat (43254) </h4>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1023.3436496716771!2d107.1519761!3d-6.7277617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ac4d961bc399%3A0xfbaf70c7abec8cd4!2sSDN%20Galudra!5e1!3m2!1sid!2sid!4v1612603281864!5m2!1sid!2sid" 
                                    width="100%" 
                                    height="448px" 
                                    frameborder="0" 
                                    style="border:0;" 
                                    allowfullscreen="10%" 
                                    aria-hidden="false" 
                                    tabindex="10"
                                    border="4">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>




<!-- Roitation Utilities -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Laman</h6>
        </div>
        <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                src="img/undraw_To_do_re_jaef.svg" alt="">
        </div>
        <hr>
        <div class="card-body text-center shadow mb-4 bg-gray-200"> 
            <div class="card shadow mb-6 py-3 border-bottom-secondary bg-gradient-success text-white p-3 rotate-15 d-inline-block my-4" style="text-shadow: 1px 1px 9px black"> Daftar Laman :
                <div> <a href="#" class="card shadow mb-4 py-3 border-bottom-warning text-warning p-3 rotate-15 d-inline-block my-4" style="background-color: #32232D;"><i class="fa fa-minus-circle" aria-hidden="true"></i>Visi dan Misi</a></div>
                <div class="card shadow mb-4 py-3 border-bottom-warning bg-gradient-info text-warning p-3 rotate-n-10 d-inline-block my-4"><i class="fa fa-minus-circle" aria-hidden="true"></i>Profil Sekolah</div>
                <div class="card shadow mb-4 py-3 border-bottom-warning bg-gradient-info text-warning p-3 rotate-15 d-inline-block my-4"><i class="fa fa-minus-circle" aria-hidden="true"></i>Map</div>
                <div class="card shadow mb-4 py-3 border-bottom-warning bg-gradient-info text-warning p-3 bg-primary rotate-n-15 d-inline-block my-4"><i class="fa fa-minus-circle" aria-hidden="true"></i>Peserta Didik</div>
                <div class="card shadow mb-4 py-3 border-bottom-warning bg-gradient-info text-warning p-3 rotate-10 d-inline-block my-4"><i class="fa fa-minus-circle" aria-hidden="true"></i>Contack</div>
                <div class="card shadow mb-4 py-3 border-bottom-warning bg-gradient-info text-warning p-3 bg-secondary rotate-10 d-inline-block my-4"><i class="fa fa-minus-circle" aria-hidden="true"></i>Aplikasi</div>
            </div>
        </div>
    </div>
</div>



                <div class="lessons">
                    <div class="lesson">
                        <div class="lesson-icon">
                            <a class="btn btn-warning" href="#" class="btn signup">Menejemen Sekolah <img class="rounded-circle" src="../img/book.svg"></a>
                            <p>HTML & CSS</p>
                        </div>
                        <p class="text-contents">Bahasa yang digunakan untuk membuat dan mendesain tampilan situs web Anda. </p>
                    </div>
                    <div class="lesson">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/jQuery.png">
                            <p>jQuery</p>
                        </div>
                        <p class="text-contents">Library JavaScript yang cepat, kaya akan fitur, dan mudah digunakan yang menangani animasi dan permintaan Ajax.</p>
                    </div>
                    <div class="lesson">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/ruby.png">
                            <p>Ruby</p>
                        </div>
                        <p class="text-contents">Bahasa dinamis, serba guna yang sederhana dan produktif. Ruby sering digunakan untuk membuat aplikasi web yang responsive.</p>
                    </div>
                    <div class="lesson">
                        <div class="lesson-icon">
                            <img src="https://prog-8.com/images/html/advanced/php.png">
                            <p>PHP</p>
                        </div>
                        <p class="text-contents">Bahasa skrip open source yang dapat disematkan ke dalam HTML, dan cocok untuk pengembangan web.</p>
                    </div>
                </div>
            </div>
        </div>





        
        <div class="message-wrapper">
            <div class="container">
                <div class="heading">
                    <h2>Apakah anda siap untuk menjadi programer yang handal?</h2>
                    <h3>Ayo belajar coding, ayo belajar menjadi lebih kreatif!</h3>
                </div>
                <span class="btn message">Mulai Belajar</span>
            </div>
        </div>


        




        <footer style="background-color: #1d1160;">
        <div class="container">
            <p><strong><?PHP echo "$sekolah"; ?></strong></P>
            <img src="https://prog-8.com/images/html/advanced/footer_logo.png">
            <p>Learn to code, learn to be creative.</p>
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kontak</div>
            <a href="https://wa.widget.web.id/be35b5" target="_blank"><img src="../home_page/img/—Pngtree—whatsapp icon whatsapp logo_3584844.png"
                width="46" height="46"/>0859 3866 2929</a>
            <a href="mailto:sdnegerigaludra@gmail.com" target="_blank"><img src="../home_page/img/pngegg.png"
                width="28" height="28"/> sdnegerigaludra@gmail.com</a>
        </div>
        </footer>




        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
         -->
        
        <!-- Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        
        <script src="../page12/navbars/bootstrap.bundle.min.js"></script>

        <!-- animasi js AOS -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>


    </body>
</html>
