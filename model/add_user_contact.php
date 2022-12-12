<?php
	include_once 'check_session.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$message = $_POST['message'];
	$list_bee = $_POST['list-bee'];
	$message_2 = "";
	foreach ($list_bee as $value) {
		$message_2 = $message_2 . "$value , ";
	}
	$message = $message_2 ."\n". $message;
	$connect->build_query([
		"table" => "infor_user",
		"ten_cot" => "`name`, `email`, `phone_number`, `message`,`status`",
		"gia_tri_cot" => "'{$name}','{$email}','{$phone_number}','{$message}','0'"
	])->insert();
	header('location: /thanks.php');
?>