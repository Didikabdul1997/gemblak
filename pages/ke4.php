<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/alternatif.inc.php';
$pgn1 = new Alternatif($db);
$pgn1->id = $id;

$pgn1->readOne();
include_once 'includes/kriteria.inc.php';
$pgn2 = new Kriteria($db);
include_once 'includes/nilai.inc.php';
$pgn3 = new Nilai($db);
if($_POST){
  
  include_once 'includes/rangking.inc.php';
  $eks = new rangking($db);

  $eks->ia = $_POST['ia'];
   
    $eks->ik = $_POST['ik'];
    $eks->nun = $_POST['nun'];
  if($eks->insert()){
     echo "<script>document.location.href='pertanyaan.php'</script>";
?>

<?php
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="rangking.php">lihat semua data</a>.
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
}
?>
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>


            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
               
              </div>
              <form method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    
                    <input class="form-control" id="ia" name="ia" value="<?php echo $pgn1->id; ?>">
                  </div>
                
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <select class="form-control" id="ik" name="ik">
                    	<?php
            $stmt2 = $pgn2->readAll();
            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
              extract($row2);
              echo "<option value='{$id_kriteria}'>{$nama_kriteria}</option>";
            }
              ?>
            </select>
                  </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="nun" name="nun" placeholder="Masukkan Nilai UN Anda" type="text">
                  </div>
                </div>
                
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
   
  </div>