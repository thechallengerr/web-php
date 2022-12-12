<?php
	$get_kinds = $connect->build_query([
		"table" => "kinds_post",
		"select" => "*",
		"where" => "id_post = '$id_post'"
	])->select();
	while ($row = mysqli_fetch_array($get_kinds)) {
		echo "<span class='badge badge-danger badge-pill'>{$row['name_kinds']}</span>";
	}
?>