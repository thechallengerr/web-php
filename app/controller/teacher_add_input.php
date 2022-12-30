<?php
include '../controller/common.php'; // common kiem tra session
include '../common/database.php'; // database kết nối -> bắt buộc mọi controller phải có dòng này
include '../model/teacher.php';
include '../common/define.php';

$errorsMissing = array('teacher_name' => '', 'specialized' => '','degree'=>'', 'note' => '', 'teacher_image' => '');
$data = array('teacher_name' => '', 'specialized' => '','degree'=>'', 'note' => '', 'teacher_image' => '');
$allowedTypes = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg'
];
// if(!empty($_SESSION['teacher_name']) && !empty($_SESSION['specialized']) && !empty($_SESSION['degree']) && !empty($_SESSION['note']) && !empty($_SESSION['teacher_image'])) {
//     $data = array('teacher_name' => $_SESSION['teacher_name'], 'specialized' => $_SESSION['specialized'],
//     'degree'=>$_SESSION['degree'], 'note' => !empty($_SESSION['note']), 'teacher_image' => $_SESSION['teacher_image']);
// }

if (isset($_POST['add_teacher'])) {
    // kiem tra
    if (empty($_POST['teacher_name'])) {
        $errorsMissing['teacher_name'] = "Hãy nhập tên giáo viên";
    }elseif(strlen($_POST['teacher_name'])>100){
        $errorsMissing['teacher_name'] = "Không nhập quá 100 kí tự";
    }else {
        $data['teacher_name'] = $_POST['teacher_name'];
    }
    if (empty($_POST['specialized'])) {
        $errorsMissing['specialized'] = "Hãy chọn bộ môn";
    } else {
        $data['specialized'] = $_POST['specialized'];
    }
    if (empty($_POST['degree'])) {
        $errorsMissing['degree'] = "Hãy chọn bằng cấp";
    } else {
        $data['degree'] = $_POST['degree'];
    }
    if (empty($_POST['note'])) {
        $errorsMissing['note'] = "Hãy nhập mô tả chi tiết";
    }elseif(strlen($_POST['note'])>1000){
        $errorsMissing['note'] = "Không nhập quá 1000 kí tự";
    }  else {
        $data['note'] = $_POST['note'];
    }
    if (empty($_FILES['teacher_image']['name'])) {
        $errorsMissing['teacher_image'] = "Hãy chọn avatar";
    }else {
        $filepath = $_FILES['teacher_image']['tmp_name'];
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $filetype = finfo_file($fileinfo, $filepath);
        if(!in_array($filetype, array_keys($allowedTypes))) {
            $errorsMissing['teacher_image'] = "Hãy chọn lại file png hoặc jpg";
        }else {
            $target_dir = "../../assets/avatar/tmp/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0700);
            }
            $name = $_FILES["teacher_image"]["name"];
            $target_file = $target_dir . basename($name);
            move_uploaded_file($filepath, $target_file);
            $data['file_path'] =$target_file;
            $data['teacher_image'] = $name; 
            $_POST['teacher_image'] = $name;
            $_POST['file_path'] = $target_file;
        }
    }
    if (!empty($_POST['teacher_name']) && !empty($_POST['specialized']) && !empty($_POST['degree']) && !empty($_POST['note']) && !empty($_POST['teacher_image'])) {
        $_SESSION['teacher_name']=$_POST['teacher_name'];
        $_SESSION['specialized']=$_POST['specialized'];
        $_SESSION['degree']=$_POST['degree'];
        $_SESSION['note']=$_POST['note'];
        $_SESSION['teacher_image']=$_POST['teacher_image'];
        $_SESSION['file_path']=$_POST['file_path'];
        header('Location: ./teacher_add_confirm.php');
    }else{
        include '../views/teacher_add_input.php';
    }
}else {
    include '../views/teacher_add_input.php';
}
?>