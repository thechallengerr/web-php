<?php
	if (isset($_GET['id'])) {
        $id_post = $_GET['id'];
	    $get_infor = $connect->build_query([
	        "table" => "post",
	        "select" => "*",
	        "where" => "id_post = '{$id_post}'"
	    ])->select();
	    while ($row = mysqli_fetch_array($get_infor)) {
	    	$name = $row['name_post'];
	    	$avatar = $row['avatar'];
	    	$date = $row['date'];
	    	$description = $row['description'];
	    	$detailed_description = $row['detailed_description'];
	    }
    } else {
    	header('Location: /index.php');
    }
?>