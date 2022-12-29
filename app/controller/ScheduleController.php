<?php
// include '../controller/common.php';
include_once "../model/schedule.php";
include_once '../common/database.php';
if (isset($_POST['schedule_search'])) {
    $school_year = $_POST['school_year'];
    $subject_name = $_POST['subject_name'];
    $teacher_name = $_POST['teacher_name'];
    $scheduleResult = scheduleSearch($school_year, $subject_name, $teacher_name);
    toastMsg();
    include_once "../views/schedule_search.php";
} else {
    $allSchedule = getAllSchedule();
    toastMsg();
    include_once "../views/schedule_search.php";
    
}
function toastMsg()
{
    global $isToast;
    if (isset($_POST['deleteSchedule'])) {
        $isToast = true;
        $_SESSION['id'] = $_POST['deleteSchedule'];
        // header("Location: ../views/schedule_search.php?id=" . $_SESSION['id']);
    }
    if (isset($_POST['confirm'])) {
        var_dump($_SESSION['id']);
        var_dump($_GET['id']);
        deleteSchedule($_SESSION['deleteSchedule']);
    }
}
function deleteID()
{
    if (isset($_POST['confirm'])) {
        var_dump($_SESSION['id']);
        var_dump($_GET['id']);
        deleteSchedule($_SESSION['deleteSchedule']);
    }
}
