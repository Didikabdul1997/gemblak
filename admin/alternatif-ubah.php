<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/responden.inc.php';
$eks = new responden($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->nm = $_POST['nm'];
	$eks->almt = $_POST['almt'];
	$eks->jk = $_POST['jk'];
	$eks->pkjn = $_POST['pkjn'];
	
	if($eks->update()){
		echo "<script>location.href='./?page=masyarakat'</script>";
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
                                                <label for="nm">NAMA</label>
                                                <input type="text" class="form-control" id="nm" name="nm" value="<?php echo $eks->nm; ?>"required>
                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="almt">ALAMAT</label>
                                                <input type="text" class="form-control" id="almt" name="almt" value="<?php echo $eks->almt; ?>"required>
                                                
                                            </div>
                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="jk">JENIS KELAMIN</label>
                                                <select class="form-control" id="jk" name="jk" value="<?php echo $eks->jk; ?>" required>
                                                <option value='Laki-Laki'>Laki-Laki</option>
              <option value='Perempuan'>Perempuan</option>
          </select>
                                            </div>

                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="pkjn">PEKERJAAN</label>
                                                <select class="form-control" id="pkjn" name="pkjn" value="<?php echo $eks->pkjn; ?>" required>
                                                	<option value='wiraswasta'>wiraswasta</option>
              <option value='swasta'>swasta</option>
              <option value='Pns'>Pns</option>
              <option value='Mahasiswa'>Mahasiswa</option>
              <option value='lainnya'>lainnya</option>
          </select>
                                                
                                            </div>
                                           </div>
                                       </div>
                                               <div class="form-row"> 
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">ubah</button>
                                   <button class="btn btn-success" onclick="location.href='./?page=masyarakat'">kembali</button>
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
    
		
