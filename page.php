<?php
$page=htmlspecialchars(@$_GET['page']);

switch ($page){
    case null:
        include 'ke1.php';
        break;
    case 'ke2':
        include 'ke2.php';
        break;
        case 'ke3':
        include 'ke3.php';
        break;
        case 'ke4':
        include 'ke4.php';
        break;
        case 'pertanyaan':
        include 'pertanyaan.php';
        break;
        case 'kriteria-ubah':
        include 'kriteria-ubah.php';
        break;
        case 'pengguna':
        include 'user.php';
        break;
        case 'user-ubah':
        include 'user-ubah.php';
        break;
        case 'prangking':
        include 'rangking.php';
        break;
    default:
        include 'examples/icon.html';
}