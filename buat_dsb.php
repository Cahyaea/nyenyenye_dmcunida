<?php
session_start();
if (!isset($_SESSION['nama_user'])) {
    header('Location: login.php');
}
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
    <div class="dashboard-main-wrapper">
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
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="list.php"><i class="fas fa-list-alt"></i>Kategori Penyakit</a>
                            </li> -->
                            
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fas fa-address-card"></i>Registrasi Pasien</a>
                            </li>
                            
                            <?php
                            if ($_SESSION['kategori_user'] == 1){
                                ?>
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
                            <?php
                            }
                            ?>
                            
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
                            <h5 class="card-header">Registrasi Pasien</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                <a href="form_pasien.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Tambah Data</a>
                                <br> <br>
                                    <table class="table table-striped table-bordered first table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Program Studi</th>
                                                <th>Status</th>
                                                

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    <?php
                                                    require_once('koneksi.php');
                                                    $query  = "SELECT data_pasien.*, tindakan.* FROM data_pasien, tindakan WHERE data_pasien.id_pasien = tindakan.id ";
                                                    $tampil = mysqli_query($connect, $query); 
                                                    $no = 1;
                                                    while ($r=mysqli_fetch_array($tampil)){
                                                    ?>
                                                    <tr>
                                                      <td><?php echo $no?></td> 
                                                      <td><?php echo $r['fullname']?></td>
                                                      <td><?php echo $r['studyprogram']?></td>
                                                      <td><?php echo $r['rujukan']?></td>
                                                      
                                                      <td>
                                                       <?php
                                                       if ($_SESSION['kategori_user'] == 1 || $_SESSION['kategori_user'] == 2){
                                                       ?> 
                                                        <a href="form_anamnesa.php?id_pasien=<?php echo $r['id_pasien']; ?>" class="btn btn-info btn-sm" name="anamnesa">Anamnesis</a>
                                                        <?php
                                                       }

                                                       if ($_SESSION['kategori_user'] == 1 || $_SESSION['kategori_user'] == 3){
                                                        ?>
                                                        <a href="form_diagnosa.php?id_pasien=<?php echo $r['id_pasien']; ?>" class="btn btn-warning btn-sm" name="diagnosa">Diagnosis</a>
                                                        
                                                        <a href="form_tindakan.php?id_pasien=<?php echo $r['id_pasien']; ?>" class="btn btn-secondary btn-sm" name="tindakan">Tindakan</a>
                                                       <?php
                                                       }
                                                       if ($_SESSION['kategori_user'] == 1 || $_SESSION['kategori_user'] == 2){
                                                       ?>
                                                        <a href="view_pasien.php?id_pasien=<?php echo $r['id_pasien']; ?>" class="btn btn-success btn-sm">View</a>
                                                        <?php
                                                       }
                                                        ?>
                                                        
        
                                                      </td>
                                                    </tr>
                                                    <?php
                                                      $no++;
                                                    }
                                                    ?>
                                         </tbody>
                                            
                                    </table>
                                </div>
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
    </div>
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