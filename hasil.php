 <?php 
error_reporting(0);
include "config/koneksi.php";


include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();


$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/responden.inc.php';
$pgn1 = new responden($db);
$pgn1->id = $id;

$pgn1->readOne();
$pro = new responden($db);


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
 <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container-fluid">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">TERIMA KASIH</h1>
              <p class="text-lead text-white">
                        <h1 class="text-white">Telah Ikut Berpartisipasi Dalam Pengawasan Juru Parkir Berlangganan</h1>
                        </h3>
                    </h2>
                    
<br>
                      
              
                
                   
                  
                    <?php
                        $query="select tb_status.id_pertanyaan,tb_pertanyaan.id_pertanyaan,tb_pertanyaan.pertanyaan from tb_status,tb_pertanyaan where tb_status.id_pertanyaan=tb_pertanyaan.id_pertanyaan and status='Iya'";
                        $result=mysqli_query($konek,$query);
                        while ($r=mysqli_fetch_array($result))
                        {
                            echo $r['pertanyaan'].", ";
                            
                            echo "<br>";
                            
                        }
                    ?>

                    <?php
                        $query="SELECT * FROM tb_status where nik=$pgn1->id ORDER by id_pertanyaan ASC";
                        $result=mysqli_query($konek, $query);
                        $i=1;
                        while ($r=mysqli_fetch_array($result))
                        {
                            $tb_pertanyaan[$i]=$r['id_pertanyaan'];
                            $status[$i]=$r['status'];   
                            $i++;
                            // $status[$r['id_pertanyaan']]=$r['status'];
                        }
                        // var_dump($status); die;
                        $jawaban;
                        $a1;
                        $a2;
                        $a3;
                        $a4;
                        $a5;
                        $a6;
                        $a7;
                        $a8;
                        $a9;
                        $a10;
                        
                        if($status[1]=='Ya'){
                            $a1=1;
                        }else if($status[1]=='Tidak'){
                            $a1=0;
                        }
                        
                        if($status[2]=='Ya'){
                            $a2=1;
                        }else if($status[2]=='Tidak'){
                            $a2=0;
                        }
                        
                        if($status[3]=='Ya'){
                            $a3=1;
                        }else if($status[3]=='Tidak'){
                            $a3=0;
                        }
                        
                        if($status[4]=='Ya'){
                            $a4=1;
                        }else if($status[4]=='Tidak'){
                            $a4=0;
                        }
                        
                        if($status[5]=='Ya'){
                            $a5=1;
                        }else if($status[5]=='Tidak'){
                            $a5=0;
                        }
                        
                        if($status[6]=='Ya'){
                            $a6=1;
                        } else if($status[6]=='Tidak'){
                            $a6=0;
                        }
                        
                        if($status[7]=='Ya'){
                            $a7=1;
                        }else if($status[7]=='Tidak'){
                            $a7=0;
                        }
                        
                        if($status[8]=='Ya'){
                            $a8=1;
                        }else if($status[8]=='Tidak'){
                            $a8=0;
                        }
                        
                        if($status[9]=='Ya'){
                            $a9=1;
                        }else if($status[9]=='Tidak'){
                            $a9=0;
                        }

                        if($status[10]=='Ya'){
                            $a10=1;
                        }else if($status[10]=='Tidak'){
                            $a10=0;
                        }
                        
                        

                        $jawaban=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
                        // echo($jawaban); die;
                        if ($jawaban>=5) {
                            $x=(1*8.87)+91.13;
                        }
                            else if ($jawaban>=4) {
                            $x=(1*18.74)+62.51;
                        }
                           else if ($jawaban>=3) {
                             $x=(1*18.74)+43.76;
                        }
                            else if ($jawaban>=2) {
                             $x=(1*18.74)+25;
                        }
                            else if ($jawaban>=1) {
                            $x=(1*18.75)+25;
                        }
                        
                        
                        
                        
                        

                            $pro->nik = $pgn1->id;
                            $pro->has = $jawaban;
                            $pro->hasil();
                            $pro->nik = $pgn1->id;
                            $pro->has = $x;
                            $pro->hasilakhir();

                            


                        ?> 
                    </div>
                    </div>
                
            
        </table>
        <br>
        <form method="post">
            <input type="submit" name="beres" value="Selesai" class="btn btn-primary my-4"/>
        </form>
        <?php
            if(isset($_POST['beres']))
            {
                $query="DELETE from tb_status";
                mysqli_query($konek, $query);
                header("Location: index.php");
            }
        ?>
        </div>

    </body>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
</html>
