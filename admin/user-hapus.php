<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
$database = new Config();
$db = $database->getConnection();

	include_once 'includes/user.inc.php';

	$pro = new User($db);
	
	$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
	$pro->id = $id;
	
	if($pro->delete()){
		echo "<script>alert('Berhasil Hapus Data');location.href='./?page=user';</script>";
	}
	
	else{
		echo "<script>alert('Gagal Hapus Data');location.href='./?page=user';</script>";
		
	}
?>
