<?php
$page=htmlspecialchars(@$_GET['page']);

switch ($page){
    case null:
        include 'body.php';
        break;
    case 'beranda':
        include 'body.php';
        break;
    case 'masyarakat':
        include 'alternatif.php';
        break;
         case 'alternatif-ubah':
        include 'alternatif-ubah.php';
        break;
         case 'alternatif-hapus':
        include 'alternatif-hapus.php';
        break;
         case 'kuisioner':
        include 'kuisioner.php';
        break;
         case 'kuisioner-ubah':
        include 'kuisioner-ubah.php';
        break;
         case 'hasil':
        include 'hasil.php';
        break;
         case 'user':
        include 'user.php';
        break;
         case 'user-baru':
        include 'user-baru.php';
        break;
         case 'user-ubah':
        include 'user-ubah.php';
        break;
         case 'user-hapus':
        include 'user-hapus.php';
        break;
    default:
        include 'page/404.php';
}

