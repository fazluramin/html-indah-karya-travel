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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Data Reservasi Tiket</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Kelola Informasi Kontak</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Kelola User</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Kelola Kontak</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Laporan</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
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
                            <a class="js-arrow" href="dashboard_admin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="admin_reservasi.php">
                                <i class="fas fa-chart-bar"></i>Data Reservasi Tiket</a>
                        </li>
                        <li>
                            <a href="admin_kelola_kontak.php">
                                <i class="fas fa-table"></i>Kelola Informasi Kontak</a>
                        </li>
                        <li>
                            <a href="admin_kelola_user.php">
                                <i class="far fa-check-square"></i>Kelola User</a>
                        </li>
                        <li>
                            <a href="admin_kelola_jadwal.php">
                                <i class="fas fa-calendar-alt"></i>Kelola Penjadwalan</a>
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
                                            <a class="js-acc-btn" href="#">Administrator</a>
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
                                                        <a href="dashboard_admin.php">Administrator</a>
                                                    </h5>
                                                    <span class="email">admin@admin.com</span>
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
                        <h2>Kelola Data Kontak Cabang
                            <label>
                                                        <a class='btn btn-info btn-xs hvr-icon-float-away ' href='admin_laporan.php'>
                                                            <i class='fa fa-eye'></i> 
                                                        </a>
                                                    </label>
                        </h2>
                        <hr>

                        <div class="col-md-12">
                            <div class="col-md-4">
                            <div class="row">
                                <h4>Bulan :</h4>
                                    <span> 
                                        <select>
                                            <option value="juli">Juni</option>
                                            <option>Juli</option>
                                            <option>Agustus</option>
                                        </select>
                                    </span>
                            </div>
                            </div>

                            <div class="col-md-4">
                            <div class="row">
                                <h4>Tahun : </h4>
                                <input type="number" name="tahun" placeholder="2018" value="2018" style="text-align: center">
                            </div>
                                
                            </div>
                        </div>

                        <?php 
                    function tabel (){ ?>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Nama Penumpang</th>
                                                <th>Kode Pemesanan</th>
                                                <th>Rute</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>13-06-2018</td>
                                                <td>Fadila</td>
                                                <td>13-06-0001</td>
                                                <td class="denied">Transaksi Batal</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-warning btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-hdd-o'></i>
                                                        </a>
                                                    </label>
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>13-06-2018</td>
                                                <td>087899395544</td>
                                                <td>13-06-0002</td>
                                                <td class="process">Transaksi Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-warning btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-hdd-o'></i>
                                                        </a>
                                                    </label>
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>13-06-2018</td>
                                                <td>Raihan</td>
                                                <td>13-06-0003</td>
                                                <td class="process">Transaksi Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-warning btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-hdd-o'></i>
                                                        </a>
                                                    </label>
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>13-06-2018 </td>
                                                <td>Rohaya</td>
                                                <td>13-06-0004</td>
                                                <td class="process">Transaksi Berhasil</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-warning btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-hdd-o'></i>
                                                        </a>
                                                    </label>
                                                    <label>
                                                        <a class='btn btn-danger btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>13-06-2018</td>
                                                <td>Pandawa</td>
                                                <td>13-06-0005</td>
                                                <td class="denied">Transaksi Gagal</td>
                                                <td style="text-align: center;">
                                                    <label>
                                                        <a class='btn btn-warning btn-xs hvr-icon-float-away ' href='#'>
                                                            <i class='fa fa-hdd-o'></i>
                                                        </a>
                                                    </label>
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
