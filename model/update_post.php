<?php
	include_once 'check_session.php';
	include_once '../controller/optimize_images.php';
	$name_post = $_POST['name-post'];
	$detailed_description = $_POST['description'];
	$list_kinds = $_POST['list-kinds'];
	$description = $_POST['description-n'];
	$date = date('d/m/Y');

	$id_post = $_POST['id-post'];
	$link_avt = $_POST['avatar-n'];
	// xử lý up ảnh
	if ($_FILES['avatar']['error'] == 0) {
		$file_name = date( 'YmdHis', time() );
		$image = new SimpleImage();
		$image->load($_FILES['avatar']['tmp_name']);
		// $image->resizeToWidth(500);
		// $image->scale(50); // 50% ảnh gốc ban đầu
		// $image->resize(250,400);
		$img_name = $file_name.".jpg";
		$image->save("../assets/img/{$img_name}");
		$link_avt = "/assets/img/{$img_name}";
	}
	// cập nhật thông tin giảng viên
	$connect->build_query([
		"table" => "post",
		"set" => "`name_post`='$name_post', `avatar`='$link_avt', `date`='$date', `description`='$description',`detailed_description`='$detailed_description'",
		"where" => "id_post = '$id_post'"
	])->update();
	// insert kinds của giảng viên
	$connect->build_query([
	    "table" => "kinds_post",
	    "where" => "`id_post` = '$id_post'"
	])->delete();
	foreach ($list_kinds as $value) {
		$connect->build_query([
		    "table" => "kinds_post",
		    "ten_cot" => "`id_post`,`name_kinds`",
		    "gia_tri_cot" => "'{$id_post}','{$value}'"
		])->insert();
	}
	header('location: ../admin/dashbroad-post.php');
?>