<?php
include '../controller/common.php'; // common kiem tra session
include '../common/database.php'; // database kết nối -> bắt buộc mọi controller phải có dòng này
include '../model/subject.php';
include('../common/define.php');
$subjectInfos = get_by_subject_id($_GET['edit_subject']);
$errorsMissing = array('school_year' => '', 'subject_name' => '', 'subject_note' => '', 'subject_image' => '');
$data = array('school_year' => '', 'subject_name' => '', 'subject_note' => '', 'subject_image' => '');

function checkData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['edit_subject'])) {
    // kiem tra
    if (empty($_POST['subject_name'])) {
        $errorsMissing['subject_name'] = "Hãy nhập tên môn học";
    } else {
        $data['subject_name'] = $_POST['subject_name'];
    }
    if (empty($_POST['school_year'])) {
        $errorsMissing['school_year'] = "Hãy chọn khóa";
    } else {
        $data['school_year'] = $_POST['school_year'];
    }
    if (empty($_POST['subject_note'])) {
        $errorsMissing['subject_note'] = "Hãy nhập mô tả";
    } else {
        $data['subject_note'] = $_POST['subject_note'];
    }
    if (empty($_FILES['subject_avatar']['name'])) {
        // $data['subject_image']  = $subjectInfos['avatar'];
    } else {
        $checked_subject_avatar = checkData($_FILES['subject_avatar']['name']);
        $files =  $_FILES['subject_avatar']['tmp_name'];
        $nameFileUpload = $_FILES['subject_avatar']['name'];
        $name = explode(".", $nameFileUpload)[0]  . date('YmdHis') . ".jpg";
        $path = "../../assets/avatar/tmp/" . $name;
        move_uploaded_file($files, $path);
        // if (!getimagesize("../../assets/avatar/tmp/" . $name)) {
        //     if (unlink("../../assets/avatar/tmp/" . $name)) {
        //     }
        //     $errorsMissing['subject_image'] = 'Hãy chọn file png hoặc jpg';
        // } else {
        //     unlink("../../assets/avatar/tmp/" . $name);
        // }
        $data['subject_image']  = $name;
    }
    if (!empty($_POST['subject_name']) && !empty($_POST['school_year']) && !empty($_POST['subject_note'])) {
        include_once '../views/subject_edit_confirm.php';
    } else {
        include_once '../views/subject_edit_input.php';
    }
} elseif (isset($_POST['edit_subject_confirm'])) {
    $subject_name = $_POST['subject_name'];
    $school_year = $_POST['school_year'];
    $subject_note = $_POST['subject_note'];
    $subject_avatar = $_POST['subject_avatar'];
    if (edit_subject($subjectInfos['id'], $subject_name, $school_year, $subject_note, $subject_avatar)) {
        $dir = "../../assets/avatar/subject/{$subjectInfos['id']}";
        if (!file_exists($dir)) {
            mkdir($dir, 0700);
        }

        $file_path_from = "../../assets/avatar/tmp/{$subject_avatar}";
        $file_path_to = "../../assets/avatar/subject/{$subjectInfos['id']}/{$subject_avatar}";
        copy($file_path_from, $file_path_to);
        if (unlink($file_path_from)) { 
            include_once '../views/subject_edit_complete.php';
        }
    };
} else {
    include_once '../views/subject_edit_input.php';
}
