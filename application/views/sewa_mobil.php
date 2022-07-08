<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>RentalMOBIL</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png" type="image/png') ?>">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css') ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/LineIcons.css') ?>">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/default.css') ?>">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

</head>

<body class="bg-primary">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="<?php echo base_url('assets/images/logo.svg" alt="Logo') ?>">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                            aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll"
                                        href="<?= base_url('Home') ?>#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="
                                        <?= base_url('Home') ?>#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="
                                        <?= base_url('Home') ?>#pricing">Pricing</a></li>
                                <li class="nav-item"><a class="page-scroll" href="
                                        <?= base_url('Home') ?>#team">Team</a></li>
                                <li class="nav-item"><a class="page-scroll" href="
                                        <?= base_url('Home') ?>#contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href=" <?= base_url('Login') ?>">Login</a></li>
                            </ul>
                        </div>

                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <div class="card card-primary" style="margin-top: 100px;">
        <div class="m-3">
            <div class="card-header">
                <h3 class="card-title">Sewa Mobil</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= base_url('sewa_mobil/tambah_aksi') ?>" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <input type="date" name="tgl_akhir" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" name="tjn" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>No Ktp</label>
                        <input type="text" name="no_ktp" class="form-control" placeholder="">
                    </div>


                    <div class="form-group">
                        <label>Pilih Mobil</label>
                        <select class="form-control" name="mobil_id">
                            <option value="1">Rush</option>
                            <option value="2">Xpander</option>
                            <option value="1">Ertiga</option>
                            <option value="2">Mobilio</option>

                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img
                                src="<?php echo base_url('assets/images/logo.svg" alt="Logo') ?>"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@rental mobil.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by<a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with
                            <a rel="nofollow" href="https://ayroui.com">Ayro UI</a>
                        </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.7.1.min.js') ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url('assets/js/slick.min.js') ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?php echo base_url('assets/js/ajax-contact.js') ?>"></script>

    <!--====== Isotope js ======-->
    <script src="<?php echo base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/isotope.pkgd.min.js') ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/scrolling-nav.js') ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>