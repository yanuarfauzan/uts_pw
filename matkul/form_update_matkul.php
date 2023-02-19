<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Perkuliahan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="dashboard.php">Dashboard</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="../view/dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed" href="../view/home_matkul.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Mata Kuliah
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>

                        <a class="nav-link collapsed" href="../view/home_materi.php" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Materi Kuliah
                            <div class="sb-sidenav-collapse-arrow"></i></div>
                        </a>


            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Form Edit Matkul
                        </div>
                        <div class="card-body"><?php
                                                //require_once("../auth.php");
                                                include("../config/config.php");
                                                // if( isset($_POST['kodeMatkul']) ){
                                                // // kalau tidak ada nik di query string
                                                //     header('Location: ../insert/data_Users.php');
                                                // }
                                                //deklarasikan variabel $nik dari nik
                                                $id = $_GET['id'];
                                                // buat query untuk ambil data dari database
                                                $sql = mysqli_query($connect, "SELECT * FROM matkul WHERE id = '$id'");
                                                // $query = mysqli_query($sambung, $sql);
                                                $tb_matkul = mysqli_fetch_assoc($sql);
                                                // jika data yang di-edit tidak ditemukan
                                                if (mysqli_num_rows($sql) < 1) {
                                                    die("data tidak ditemukan...");
                                                }
                                                ?>
                            <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
                            <div class="content">
                                <form action="fungsi_update_matkul.php" method="POST">
                                    <fieldset>
                                        <p hidden="true">
                                            <label for="kodeMatkul">Id: </label>
                                            <input type="text" name="id_matkul" value="<?php echo $tb_matkul['id'] ?>" />
                                        </p>
                                        <p>
                                            <label for="kodeMatkul">Kode Matkul: </label>
                                            <input type="text" name="kode_matkul" value="<?php echo $tb_matkul['kd_mk'] ?>" />
                                        </p>
                                        <p>
                                            <label for="matkul">Mata Kuliah : </label>
                                            <input type="text" name="nama_matkul" placeholder="nama matkul" value="<?php echo
                                                                                                                    $tb_matkul['mk'] ?>" />
                                        </p>
                                        <p>
                                            <label for="deskMk">Deskripsi Matakuliah : </label>
                                            <textarea name="desk_matkul"><?php echo $tb_matkul['desk_mk'] ?></textarea>
                                        </p>
                                        <p>
                                            <button class="btn btn-primary" name="edit">Simpan</button>
                                        </p>
                                        <p>
                                            <button class="btn btn-primary" name="no_edit">Gajadi</button>
                                        </p>
                                    </fieldset>
                                </form>
                                <br>
                            </div>
                            <!-- <?php include("../view/view_footer.php"); ?> -->