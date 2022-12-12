<?php 
	include_once 'check_session.php';
	include_once '../controller/optimize_images.php';
	$name_post = $_POST['name-post'];
	$detailed_description = $_POST['description'];
	$list_kinds = $_POST['list-kinds'];
	$description = $_POST['description-n'];
	$date = date('d/m/Y');

	// xử lý up ảnh
	$file_name = date('YmdHis', time() );
	$image = new SimpleImage();
	$image->load($_FILES['avatar']['tmp_name']);
	// $image->resizeToWidth(1100);
	// $image->scale(100); // 70% ảnh gốc ban đầu
	// $image->resize(250,400);
	$img_name = $file_name.".jpg";
	$image->save("../assets/img/{$img_name}");
	$link_avt = "/assets/img/{$img_name}";

	// cập nhật thông tin khóa học
	$connect->build_query([
		"table" => "post",
		"ten_cot" => "`name_post`, `avatar`, `date`, `description`,`detailed_description`",
		"gia_tri_cot" => "'$name_post','$link_avt','$date','$description','$detailed_description'"
	])->insert();
	// get id_post
	$get_id_post = $connect->build_query([
	    "table" => "post",
	    "select" => "`id_post`",
	    "where" => "`avatar` = '$link_avt'"
	])->select();
	while ($row = mysqli_fetch_array($get_id_post)) {
		$id_post = $row['id_post'];
	}
	// insert skill của giảng viên
	$connect->build_query([
	    "table" => "skill_teacher",
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