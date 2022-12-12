<?php 
	function thong_ke($table) {
		$connect = new connection();
		$get_count = $connect->build_query([
			"table" => "$table",
			"select" => "count(*) as count"
		])->select();
		while ($row = mysqli_fetch_array($get_count)) {
			$count = $row['count'];
		}
		if ($count < 10) {
			return "0".$count;
		}
		return $count;
	}
	function thong_ke_status($table,$column) {
		$connect = new connection();
		$get_count = $connect->build_query([
			"table" => "$table",
			"select" => "count(*) as count",
			"where" => "$column = 0"
		])->select();
		while ($row = mysqli_fetch_array($get_count)) {
			$count = $row['count'];
		}
		if ($count < 10) {
			return "0".$count;
		}
		return $count;
	}
?>