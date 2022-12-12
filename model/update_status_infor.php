<?php
	include '../model/check_session.php';
	$id_infor_user = $_GET['id'];
	$connect->build_query([
		"table" => "infor_user",
		"set" => "`status` = '1'",
		"where" => "`id_infor_user` = '{$id_infor_user}'"
	])->update();
	header('location: /admin/index.php');
?>