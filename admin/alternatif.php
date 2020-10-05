
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">DATA MASYARAKAT</h2>
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
                <th>jenis kelamin</th>
                <th>pekerjaan</th>
                 <th>Hasil kuisioner</th>
                  <th>Hasil akhir</th>
                <th>Aksi</th>
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
                 <td><?php echo $row['jenis_kelamin'] ?></td>
                  <td><?php echo $row['pekerjaan'] ?></td>
                 <td><?php echo $row['hasil_kuisioner'] ?></td>
                  <td><?php echo $row['hasil_akhir'] ?></td>
                <td class="text-center">
                    <a href="./?page=alternatif-ubah&id=<?php echo $row['nik'] ?>" class="btn btn-warning"><span  class="m-r-10 mdi mdi-grease-pencil">edit</span></a>
                    <a href="./?page=alternatif-hapus&id=<?php echo $row['nik'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="m-r-10 mdi mdi-delete-empty" aria-hidden="true">delete</span></a>
                </td>
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
                <th>jenis kelamin</th>
                <th>pekerjaan</th>
                 <th>Hasil kuisioner</th>
                  <th>Hasil akhir</th>
                <th>Aksi</th>
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