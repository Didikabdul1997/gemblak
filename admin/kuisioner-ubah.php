<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/kuisioner.inc.php';
$eks = new kuisioner($db);

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

	$eks->kt = $_POST['kt'];
	
	if($eks->update()){
		echo "<script>location.href='./?page=kuisioner'</script>";
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

            	  
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
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
                                                <label for="kt">Nama kuisioner</label>
                                                <input type="text" class="form-control" id="kt" name="kt" value="<?php echo $eks->kt; ?>"required>
                                                
                                            </div>

                                            </div>
                                           </div>
                                       </div>
                                               <div class="form-row"> 
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">ubah</button>
                                   <button class="btn btn-success" onclick="location.href='./?page=kuisioner'">kembali</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>

    
		