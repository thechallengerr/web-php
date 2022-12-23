<?php 
include '../controller/common.php'; // common kiem tra session
include '../common/database.php'; // database kết nối -> bắt buộc mọi controller phải có dòng này
include '../model/admin.php'; // model -> lựa chọn model phù hợp

# ko có logic gì cần xử lý
# xử lí logout ở đây
if(isset($_POST['logout'])){
    $_SESSION['username'] = '';
    header('Location: http://localhost/web_k64a3/FINAL-PHP/login.php');
}

include '../views/homepage.php' // view
?>