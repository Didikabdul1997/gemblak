<?php  
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
include_once 'includes/user.inc.php';
$pro = new User($db);
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
                            <h2 class="pageheader-title">DATA USER</h2>
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
                                <h5 class="mb-0">DATA USER</p><button class="btn btn-primary" onclick="location.href='./?page=user-baru'">tambah data</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                 <th>No</th>
                 <th>id</th>
                <th>username</th>     
                <th>aksi</th>               
                 <thead>
        </thead>
        <tbody>
    <?php
    $no=1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['id_pengguna'] ?></td>
    	    
    	    <td><?php echo $row['username'] ?></td>
            <td class="text-center">
                    <a href="./?page=user-ubah&id=<?php echo $row['id_pengguna'] ?>" class="btn btn-warning"><span  class="m-r-10 mdi mdi-grease-pencil">edit</span></a>
                    <a href="./?page=user-hapus&id=<?php echo $row['id_pengguna'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="m-r-10 mdi mdi-delete-empty" aria-hidden="true">delete</span></a>
                </td>
            </tr>
    <?php
    }
    ?>
        </tbody>
    </table>
<?php include "footer.php"; ?>
