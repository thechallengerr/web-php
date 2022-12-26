<?php
include '../controller/common.php'; // common kiem tra session
include '../common/database.php'; // database kết nối -> bắt buộc mọi controller phải có dòng này
include '../model/subject.php';
include('../common/define.php');
$errorsMissing = array('school_year' => '', 'subject_name' => '', 'note' => '', 'subject_image' => '');
$data = array('school_year' => '', 'subject_name' => '', 'note' => '', 'subject_image' => '');
if (isset($_POST['add_subject'])) {
    // kiem tra
    if (empty($_POST['subject_name'])) {
        $errorsMissing['subject_name'] = "Hãy nhập tên môn học";
    }else {
        $data['subject_name'] = $_POST['subject_name'];
    }
    if (empty($_POST['school_year'])) {
        $errorsMissing['school_year'] = "Hãy chọn khóa";
    } else {
        $data['school_year'] = $_POST['school_year'];
    }
    if (empty($_POST['note'])) {
        $errorsMissing['note'] = "Hãy nhập mô tả";
    } else {
        $data['note'] = $_POST['note'];
    }
    if (empty($_FILES['subject_image']['name'])) {
        $errorsMissing['subject_image'] = "Hãy tải lên avatar";
    } else {
        $data['subject_image'] =$_FILES['subject_image']['name'];
    }
    if (!empty($_POST['subject_name']) && !empty($_POST['school_year']) && !empty($_POST['note']) && !empty($_FILES['subject_image']['name'])) {
        include_once '../views/subject_add_confirm.php';
    }else{
        include_once '../views/subject_add_input.php';
    }
}else {
    include_once '../views/subject_add_input.php';
}
