<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();

include_once 'includes/responden.inc.php';
$eks = new responden($db);
$stmt = $eks->readAll();

$hasil=0;
?>
<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                  <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">DATA HASIL </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                 <div class="row">
                                        

         <?php
  
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $hasil+=$row['hasil_akhir'];
    $total=$hasil/300*100;


   }
?>
               <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card center">
                               <center> <h1 class="card-header">BERDASARKAN HASIL TOTAL <br> DARI 100 RESPONDEN <br> WARGA BOJONEGORO <BR> TENTANG KEPUASAN PARKIR BERLANGGANAN <P> YANG ADA DI BOJONEGORO<BR> 


                                <?php if ($total>=81.26) {
                            echo "TINGKAT KEPUASAN ADALAH   : SANGAT BAIK ";
                            echo "<br>";
                            echo "Dengan Presentase : ", $total;
                        }
                        else if ($total>=62.51) {
                            echo "TINGKAT KEPUASAN ADALAH  :BAIK";
                            echo "<br>";
                            echo "Dengan Presentase : ", $total;
                        }
                            else if ($total>=43.76) {
                            echo "TINGKAT KEPUASAN ADALAH  : KURANG BAIK";
                            echo "<br>";
                            echo "Dengan Presentase : ", $total;
                        }
                         else if ($total>=25.00) {
                            echo "TINGKAT KEPUASAN ADALAH : TIDAK BAIK";
                            echo "<br>";
                            echo "Dengan Presentase : ", $total;
                        }?></h1>
                             
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
    
        
