<?php 
	include_once 'check_session.php';
	$id_infor_user = $_GET['id'];
	$connect->build_query([
		"table" => "infor_user",
		"where" => "id_infor_user = '{$id_infor_user}'"
	])->delete();
	header('location: ../admin/dashbroad-infor-user.php');
?>