<?php
	include_once 'check_session.php';
	$name_kinds = $_POST['name-kinds'];
	$connect->build_query([
		"table" => "kinds",
		"ten_cot" => "name_kinds",
		"gia_tri_cot" => "'{$name_kinds}'"
	])->insert();
	header('location: ../admin/dashbroad-kinds.php');
?>