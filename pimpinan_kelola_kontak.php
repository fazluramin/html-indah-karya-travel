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
    <title>Dashboard</title>

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
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard_pimpinan.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="admin_kelola_kontak.php">
                                <i class="fas fa-table"></i>Lihat Informasi Kontak</a>
                        </li>
                        <li>
                            <a href="admin_kelola_jadwal.php">
                                <i class="fas fa-calendar-alt"></i>Lihat Jadwal & Rute</a>
                        </li>
                        <li>
                            <a href="admin_laporan.php">
                                <i class="fas fa-map-marker-alt"></i>Laporan</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-copy"></i>Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                       <li class="has-sub">
                            <a class="js-arrow" href="dashboard_pimpinan.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="pimpinan_kelola_kontak.php">
                                <i class="fas fa-table"></i>Lihat Informasi Kontak</a>
                        </li>
                        <li>
                            <a href="pimpinan_kelola_jadwal.php">
                                <i class="fas fa-calendar-alt"></i>Lihat Jadwal & Rute</a>
                        </li>
                        <li>
                            <a href="pimpinan_laporan.php">
                                <i class="fas fa-map-marker-alt"></i>Laporan</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-copy"></i>Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari data &amp; Laporan..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap"></div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Pimpinan</a>
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
                                                        <a href="dashboard_admin.php">pimpinan</a>
                                                    </h5>
                                                    <span class="email">pimpinan@pimpinan.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="dashboard_admin.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="index.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h2>Lihat Data Kontak Cabang</h2>
                <?php 
                	function tabel (){ ?>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Alamat</th>
                                                <th>No. Telepon</th>
                                                <th>Keterangan</th>
                                                <th>status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jl. Sudirman No.30</td>
                                                <td>087689095544</td>
                                                <td>Kantor Cabang TBH</td>
                                                <td class="denied">Tutup</td>
                                           
                                            </tr>
                                            <tr>
                                                <td>Jl. Pattimura No.988</td>
                                                <td>087899395544</td>
                                                <td>Kantor Cabang BK</td>
                                                <td class="process">Buka</td>
                                    
                                            </tr>
                                            <tr>
                                                <td>Jl. Tambusai No.298 E</td>
                                                <td>08998987344</td>
                                                <td>Kantor Cabang INH</td>
                                                <td class="process">Buka</td>
                        
                                            </tr>
                                            <tr>
                                                <td>Jl. Cut Nyak Dien No.34 </td>
                                                <td>082289836655</td>
                                                <td>Kantor Cabang PKU</td>
                                                <td class="process">Buka</td>
                                    
                                            </tr>
                                            <tr>
                                                <td>Jl. Pahlawan No.200 F</td>
                                                <td>08933433234</td>
                                                <td>Kantor Cabang PSP</td>
                                                <td class="denied">Tutup</td>
                                 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    <?php } ?>


	<?php 
    if (isset($_GET['aksi'])){
              switch($_GET['aksi']){
                case "kelola":
                  
                  tabel();
                  break;
                case "update":
                  update();
                  tabel();
                  break;

                default:
                  echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
                  tambah();
                  tampil_data();
              }
            } else {
              tabel();
            }
    ?>    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Indah Karya Travel. All rights reserved. Template by <a href="#">PT. Indah Karya Travel</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

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
