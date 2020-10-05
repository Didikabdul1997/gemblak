<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/user.inc.php';
$eks = new User($db);

$eks->id = $id;

$eks->readOne();

?>
      <div class="dashboard-wrapper">
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

    
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);
    
    if($eks->update()){
        echo "<script>location.href='./?page=user'</script>";
    } else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
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
                                <h5 class="card-header">UBAH RESPONDEN</h5>
                                <div class="card-body">
                                    <form method="post">
 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" value="<?php echo $eks->un; ?>">
                  </div>
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                    <label for="pw">Password</label>
                    <input type="text" class="form-control" id="pw" name="pw" value="<?php echo $eks->pw; ?>">
                  </div>
                    </div>
                                           </div>
                                       </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <button type="button" onclick="location.href='./?page=user'" class="btn btn-success">Kembali</button>
                </div>
                </form>
              
  