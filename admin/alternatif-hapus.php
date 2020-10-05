<?php
include_once "includes/config.php";
$database = new Config();
$db = $database->getConnection();

include_once 'includes/responden.inc.php';
$pro = new responden($db);
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;
	
if($pro->delete()){
	echo "<script>location.href='./?page=masyarakat';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data');location.href='./?page=masyarakat';</script>";
		
}
?>
