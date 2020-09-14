<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();

?>
        <<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Form Ubah </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        </div>
                    </div>
                </div>
    <?php
    if($_POST){
    
    include_once 'includes/user.inc.php';
    $eks = new User($db);

   
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);
    $eks->st = $_POST['st'];

    if($eks->pw == md5($_POST['up'])){
    
    if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="./?page=user">lihat semua data</a>.
</div>
<?php
    }
    
    else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
    }

    } else{
?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Password!</strong> Kata sandi yang anda masukkan tidak sama antara Password dan Ulangi Password
</div>
<?php   
    }
}
?>

<div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">tambah user</h5>
                                <div class="card-body">
                                    <form method="post">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" required>
                  </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                    <label for="pw">Password</label>
                    <input type="password" class="form-control" id="pw" name="pw" required>
                  </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                    <label for="up">Ulangi Password</label>
                    <input type="password" class="form-control" id="up" name="up" required>
                  </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

            <label for="st">status</label>
            <select class="form-control" id="st" name="st">
              <option value='admin'>admin</option>
            </select>
          </div>
        </div>
      </div>
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" onclick="location.href='./?page=user'" class="btn btn-success">Kembali</button>
                </div>
                </form>
              
