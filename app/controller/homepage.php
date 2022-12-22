<?php 
// include '../controller/common.php'; // common kiem tra session
include '../common/database.php'; // database kết nối -> bắt buộc mọi controller phải có dòng này
include '../model/admin.php'; // model -> lựa chọn model phù hợp

$hieu = 1 + 1 - 5 + 6; // xử lý logic tại controller
echo $hieu;

include '../views/home.php' // view
?>