
<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
include_once 'includes/responden.inc.php';
$pro = new responden($db);
$stmt = $pro->readAll();
?>

    <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-5">
                        <div class="page-header">
                            <h2 class="pageheader-title text-center">Selamat Datang <br>Disistem analisa indeks kepuasan masyarakat (IKM) sebagai sistem pengukuran kepuasan masyarakat terhadap pelayanan juru parkir berlangganan menggunakan metode fuzzy logic mamdani berbasis web</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
          
                    <!-- ============================================================== -->
                </div>
                              
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table multiselects  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">DATA MASYARAKAT</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                 <th>No</th>
                 <th>Nik</th>
                <th>Nama</th>
                <th>Alamat</th>
                
                                        </thead>
                                        <tbody>
                                            
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nik'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                 
            </tr>
<?php
}
?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                  <th>No</th>
                 <th>Nik</th>
                <th>Nama</th>
                <th>Alamat</th>
                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table multiselects  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>