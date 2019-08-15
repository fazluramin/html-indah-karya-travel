<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Member</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Soejonoe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Soejonoe</a>
                                            </h5>
                                            <span class="email">soejonoe@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">Navigasi:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <span>Soejonoe</span>, Welcome back</h1>
                                <p>Pemesanan Tiket Anda Sudah Di <strong>Proses</strong> </p>
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search" placeholder="Cari data &amp; Informasi...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <!-- ALERT-->
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">Pesanan Tiket Anda Untuk Keberangkatan dari : PKU , Ke : BKN Telah Diproses</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                    <!-- END ALERT-->
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="dashboard_member.php">
                                                <i class="fa fa-tachometer-alt"></i>Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="member_pesan.php">
                                                <i class="fa  fa-phone-square"></i>Pemesanan Tiket</a>
                                        </li>
                                        <li>
                                            <a href="member_tentang.php">
                                                <i class="fa fa-info"></i>Tentang Indah Karya</a>
                                        </li>
                                        <li class="has-sub">
                                            <a class="js-arrow" href="member_cara.php">
                                                <i class="fas fa-trophy"></i>Cara Reservasi
                                            </a>
                                        </li>
                                        <li class="has-sub">
                                            <a class="js-arrow" href="member_kontak.php">
                                                <i class="fas fa-smile-o"></i>Kontak Kami
                                            </a>   
                                        </li> 
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Arsip Data Pemesanan Anda : Semua Data</h2>
                                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Kode Pemesanan</th>
                                                <th>Tanggal</th>
                                                <th>Rute</th>
                                                <th>status</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TBH/18.05-0201</td>
                                                <td>13-05-2018</td>
                                                <td>TBH-PKU</td>
                                                <td class="process">Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PKU/23.05-0004</td>
                                                <td>20-05-2018</td>
                                                <td>PKU-TBH</td>
                                                <td class="process">Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TBH/24.05-0032</td>
                                                <td>27-06-2018</td>
                                                <td>TBH-PKU</td>
                                                <td class="process">Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PKU/29.05-0045 </td>
                                                <td>05-07-2018</td>
                                                <td>PKU-TBH</td>
                                                <td class="process">Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TBH/4.07-0099</td>
                                                <td>14-07-2018</td>
                                                <td>TBH-BKN</td>
                                                <td class="denied">Dibatalkan</td>
                                                <td style="text-align: center;">

                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 PT.Indah Karya Madani. All rights reserved. Template by <a href="#">PT. Indah Karya Madani</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->