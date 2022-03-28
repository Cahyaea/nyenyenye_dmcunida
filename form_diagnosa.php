<?php
  include_once('koneksi.php');
    $id_pasien = $_GET['id_pasien'];
    $data = mysqli_query($connect, "SELECT d.*, a.*, r.* from data_pasien as d, anamnese as a, registrasi as r where id_pasien='$id_pasien' AND d.id_pasien=r.id AND a.id=r.id_anamnese"); 
    $r = mysqli_fetch_array($data);
    session_start();
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | List Registrasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <!-- <div class="dashboard-main-wrapper"> -->
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <img src="img/dmc.png" width="7%" alt="">
                <a class="navbar-brand" href="#">Darussalam Medical Center | Unida Gontor</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" data-toggle="dropdown">
                                <img src="img/user.png" alt="" class="user-avatar-md rounded-circle">
                            </a> 
                            
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo "".$_SESSION['nama_user']."";?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="index.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                 </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu Layanan
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="admin.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                            </li>
                    
                            <li class="nav-item">
                                <a class="nav-link active" href="buat_dsb.php"><i class="fas fa-address-card"></i>Registrasi Pasien</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="far fa-user"></i>User</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="buat_user.php">Tambah User</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="list_user.php">List User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Diagnosa Pasien</h5>
                            <div class="card-body">
                            <div class="table-responsive">
                            <form action="update_diagnosa_proses.php" method="post">
                                
                                <div class="form-group" >
                                    <input type="number" class="form-control" id="validationServerUsername" name="id_pasien" value="<?php echo $r['id_pasien']; ?>" readonly placeholder="Masukkan ID" required>
                                </div>

                                <div class="form-group" >
                                    <input type="number" class="form-control" id="validationServerUsername" name="nim" value="<?php echo $r['nim']; ?>" readonly placeholder="Masukkan NIM" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="validationServerUsername" name="fullname" value="<?php echo $r['fullname']; ?>" readonly placeholder="Masukkan Nama Lengkap" required>
                                </div>

                                <div class="form-group">
                                <label for="suhu">Riwayat Penyakit:</label><br>
                                    <input type="text" class="form-control" id="validationServerUsername" name="riwayat_penyakit" value="<?php echo $r['riwayat_penyakit']; ?>" readonly placeholder="Masukkan Nama Lengkap" required>
                                </div>

                                <div class="form-group">
                                <label for="suhu">Keluhan pasien saat ini:</label><br>
                                    <input type="text" class="form-control" id="validationServerUsername" name="keluhan" value="<?php echo $r['keluhan']; ?>" readonly placeholder="Masukkan Nama Lengkap" required>
                                </div>
                                
                                <!-- <div class="form-group">
                                <label for="keluhan">Diagnosa pasien:</label><br>
                                    <input type="text" class="form-control" id="validationServerUsername" name="keluhan"  placeholder="Apa Keluhan Anda?" required>
                                </div> -->
                                <?php
                                    include_once('koneksi.php');
                                    
                                    $d = mysqli_query($connect, "SELECT * FROM m_icd10 ORDER BY deskripsi ASC"); 
                                    // $r = mysqli_fetch_array($data);

                                ?>

                                <div class="form-group" id="validationServerUsername">
                                <label for="suhu">Diagnosa pasien:</label><br>
                                    <select class="form-control" id="validationServerUsername" name="m_icd10" required>
                                        <option> Diagnosa Penyakit </option>
                                        <?php if (mysqli_num_rows($d) > 0) { ?>
                                            <?php while ($row = mysqli_fetch_array($d)) { ?>
                                                <option value = "<?php echo $row['kode'] ?>"><?php echo $row['kode'].'-'. $row['deskripsi'] ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm" name="update">Update</button>
                                <a href="buat_dsb.php" class="btn btn-danger btn-sm">Back</a>
                                <br>
                                <br>
                                <br>
                            </form>
                                </div>
                        </div>
                    </div>

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2022 Darussalam Medical Center | UNIDA Gontor
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    <!-- </div> -->
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>