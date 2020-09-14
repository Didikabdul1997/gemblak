<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
if($_POST){
  if(empty($_POST['nama'])){

    echo "<script>alert('Isi Blok');location.href='index.php';</script>";
  }else{
include_once 'includes/responden.inc.php';
  $eks = new responden($db);

$eks->nik = $_POST['nik'];
  $eks->nama = $_POST['nama'];
  $eks->alamat = $_POST['alamat'];
  $eks->jk = $_POST['jk'];
  $eks->pekerjaan = $_POST['pekerjaan'];
  
  if($eks->insert()){
    echo "<script>document.location.href='pertanyaan1.php?id=$eks->nik'</script>";
?>

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
}
?>
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-info py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">SELAMAT DATANG DI INDEKS KEPUASAN MASYARAKAT </h1>
              <p class="text-lead text-white">pelayanan juru parkir berlangganan di kabupaten bojonegoro</p>


          
              <div class="text-center text-muted mb-4">
               
              </div>
              <form method="post">
                <div class="form-group">
               <div class="input-group input-group-merge input-group-alternative">
                    
                    <input type="number" class="form-control" placeholder="NIK" type="text"id="nik"  name="nik">
                </div>
              </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    
                    <input type="text" class="form-control" placeholder="Nama Lengkap" type="text"id="nama" name="nama">
                  </div>
                </div>
                
                
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    
                    <input class="form-control" placeholder="Alamat" type="text"id="alamat" name="alamat">
                  </div>
                </div>
              
               <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
            <select class="form-control"id="jk" name="jk">
              <option value='Laki-Laki'>Laki-Laki</option>
              <option value='Perempuan'>Perempuan</option>
            </select>
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <select class="form-control" placeholder="pekerjaan" id="pekerjaan" name="pekerjaan">
              <option value='wiraswasta'>wiraswasta</option>
              <option value='swasta'>swasta</option>
              <option value='Pns'>Pns</option>
              <option value='Mahasiswa'>Mahasiswa</option>
              <option value='lainnya'>lainnya</option>
            </select>
                    
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary my-4">Mulai</button>
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