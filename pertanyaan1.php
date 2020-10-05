 <?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();


$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/responden.inc.php';
$pgn1 = new responden($db);
$pgn1->id = $id;

$pgn1->readOne();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->

 <div class="main-content" id="panel">
  <!-- Main content -->
 <div class="main-content ">
    <!-- Header -->
    <div class="header bg-gradient-primary py-4 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Jawablah pertanyaan di bawah ini</h1>
              <p class="text-lead text-white">
                

                 <?php
            include 'config/koneksi.php';
            
            if(isset($_GET['ket']) && isset($_GET['i'])&& isset($_GET['id']))
            {
                if($_GET['i']==5)
                {
                    header("Location:hasil.php?id=$pgn1->id");
                }
            }
            
            if(empty($_GET['i']))
            {
                $i=1;
            }
            else
            {
                $i=$_GET['i']+1;
            }
            
            $query="SELECT pertanyaan FROM tb_pertanyaan WHERE id_pertanyaan=$i";
            $result=mysqli_query($konek, $query);
            $r=mysqli_fetch_array($result);
            echo $r['pertanyaan'];
            ?>
        
              </p>

 <form>
              
                  <input type="submit" name="ket" class="btn btn-primary my-4" value="Ya">
                
                  <input type="submit" name="ket" class="btn btn-primary my-4" value="Tidak">
                
                <input type="hidden" name="i" value="<?php echo $i ?>" />
       <input type="hidden" name="id" value="<?php echo $pgn1->id ?>" />
            </form>




  <br>
  <br>
  <br>


</div>
  </div>
  </div>
  </div></div>
  
<footer class="footer pt-0 bg-dark">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-center text-muted">
              &copy; 2020 Gemblak
            </div>
          </div>
          
        </div>
      </footer>
  </div>
  </div>
    <?php
                if(isset($_GET['ket']))
                {
                    if($_GET['ket']=='Ya')
                    {
                $i=$_GET['i'];
                $ket=$_GET['ket'];
                $id=$_GET['id'];
                $query="INSERT INTO tb_status VALUES('$i','$ket','$id')";
                mysqli_query($konek,$query);
                }
                }
        ?>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
