<?php 
include_once '../model/check_session.php';
function get_so_luong($cot) {
	$connect = new connection();
	$get_so_luong = $connect->build_query([
		"table" => "kinds",
		"select" => "count(*) as so_luong"
	])->select();
	while ($row = mysqli_fetch_array($get_so_luong)) {
        $so_luong = $row['so_luong'];
	}
	// tính số lượng 2 cột
	$sl_cot_1 = floor($so_luong/2);
	$sl_cot_2 = $so_luong - $sl_cot_1;
	// Nếu = 1 thì là cột 1
	// Nếu = 2 thì là cột 2
	if ($cot == 1) {
		return $cot_1 = "0, $sl_cot_1";
	} else {
		return $cot_2 = "$sl_cot_1, $sl_cot_2";
	}
	// limit 0, 2;
	// limit 2, 2;
}
function get_kinds($limit) {
	$connect = new connection();
	$get_kinds = $connect->build_query([
		"table" => "kinds",
		"select" => "name_kinds,id_kinds",
		"orderby" => "id_kinds",
		"limit" => "$limit"
	])->select();
	echo "<div class='col-sm-4 col-sm-offset-1 checkbox-radios'>";
	while ($row = mysqli_fetch_array($get_kinds)) {
		echo "<div class='form-check'>
                <label class='form-check-label'>
                    <input class='form-check-input' type='checkbox' name='list-kinds[]' value='{$row['name_kinds']}'>
                    <span class='form-check-sign'></span>
                    {$row['name_kinds']}
                </label>
            </div>";
	}
	echo "</div>";
}
function get_kinds_post($limit,$id) {
	$connect = new connection();
	$array = [];
	$array2 = [];
	$get_all_kinds = $connect->build_query([
		"table" => "kinds",
		"select" => "name_kinds",
		"orderby" => "id_kinds",
		"limit" => "$limit"
	])->select();
	while ($row = mysqli_fetch_array($get_all_kinds)) {
		$kinds = $row['name_kinds'];
		$array[] = $kinds;
	}
	$get_kinds_post = $connect->build_query([
		"table" => "kinds_post",
		"select" => "name_kinds",
		"where" => "id_post = $id"
	])->select();
	while ($row = mysqli_fetch_array($get_kinds_post)) {
		$kinds = $row['name_kinds'];
		$array2[] = $kinds;
	}
	echo "<div class='col-sm-4 col-sm-offset-1 checkbox-radios'>";
	foreach ($array as $value) {
		if (in_array($value,$array2)) {
			echo "<div class='form-check'>
                <label class='form-check-label'>
                    <input class='form-check-input' type='checkbox' name='list-kinds[]' value='$value' checked>
                    <span class='form-check-sign'></span>
                    $value
                </label>
            </div>";
		} else {
			echo "<div class='form-check'>
                <label class='form-check-label'>
                    <input class='form-check-input' type='checkbox' name='list-kinds[]' value='$value'>
                    <span class='form-check-sign'></span>
                    $value
                </label>
            </div>";
		}
	}
	echo "</div>";
}
?>