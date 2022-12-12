<?php
	$get_kinds = $connect->build_query([
		"table" => "kinds",
		"select" => "*"
	])->select();
	while ($row = mysqli_fetch_array($get_kinds)) {
		echo "<div class='col-md-2'>
			    <div class='alert alert-danger'>
			        <a href='../model/delete_kinds.php?id={$row['id_kinds']}'>
			        	<button type='button' style='cursor: pointer' class='close'>
			            	<i class='nc-icon nc-simple-remove'></i>
			        	</button>
			        </a>
			        <span><b>{$row['name_kinds']}</b></span>
			    </div>
			</div>";
	}
?>