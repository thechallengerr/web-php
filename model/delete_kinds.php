<?php 
	include_once 'check_session.php';
	$id_kinds = $_GET['id'];
	$connect->build_query([
		"table" => "kinds",
		"where" => "id_kinds = '{$id_kinds}'"
	])->delete();
	header('location: ../admin/dashbroad-kinds.php');
?>