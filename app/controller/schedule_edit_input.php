<?php
include '../controller/common.php';
include_once "../model/schedule.php";
include_once "../model/teacher.php";
include_once "../model/subject.php";
include_once '../common/database.php';

$teachers = get_all_teachers();
$subjects = get_all_subjects();
if (isset($_POST['confirm_edit'])) {
    $_SESSION['schedule_id'] = 1;
    $_SESSION['school_year'] = $_POST['school_year'];
    $_SESSION['subject_id'] = $_POST['subject_id'];
    $_SESSION['teacher_id'] = $_POST['teacher_id'];
    $_SESSION['week_day'] = $_POST['week_day'];
    $_SESSION['lession'] = $_POST['lession'];
    $_SESSION['notes'] = $_POST['notes'];
    include_once "../views/schedule_edit_confirm.php";
}
