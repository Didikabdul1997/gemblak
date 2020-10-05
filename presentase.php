<?php 




include_once 'config/koneksi.php';

$query="SELECT SUM(hasil_akhir) as hasil FROM responden";
                        $result=mysqli_query($konek, $query);
$querya="SELECT nik FROM responden";
$result1=mysqli_query($konek, $querya);
                        $total_data=mysqli_num_rows($result1);
                        while ($r=mysqli_fetch_array($result))
                        {
                            $total_presentase=$r['hasil'];
        $totalll= $total_presentase/$total_data;              
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
              <h1 class="text-white">Terimakasih</h1>
              <p class="text-lead text-white">
                        Rumus presentase <?php echo  $total_presentase ?> dibagi <?php echo  $total_data ?>
                        </h3>
                    </h2>
                 
         <hr>           
<br>
                    <p class="text-lead text-white">   
              
                iki hasil.e
                <br>
                  
                   <?php echo  $totalll ?>



                     <?php
                }
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
