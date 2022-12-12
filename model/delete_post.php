<?php 
	include_once 'check_session.php';
	$id_post = $_GET['id'];
	$connect->build_query([
		"table" => "post",
		"where" => "id_post = '{$id_post}'"
	])->delete();
	header('location: ../admin/dashbroad-post.php');
?>