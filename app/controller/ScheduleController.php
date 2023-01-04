<?php
session_start();
// include '../controller/common.php';
include_once "../model/schedule.php";
include_once '../common/database.php';
$isToast=false;
deleteID();
if (isset($_POST['schedule_search'])) {
    searchSchedule();
}else{
    allSchedule();
}
if (isset($_POST['deleteSchedule'])) {
    var_dump(1);
    toastMsg();
}

if (isset($_POST['schedule_search'])) {
    searchSchedule();
}
if (isset($_POST['confirm'])) {
    // deleteID();
}
function deleteID()
{
    // deleteSchedule($_SESSION['id']);
}
// if (isset($_POST['schedule_search'])) {
//     $school_year = $_POST['school_year'];
//     $subject_name = $_POST['subject_name'];
//     $teacher_name = $_POST['teacher_name'];
//     $scheduleResult = scheduleSearch($school_year, $subject_name, $teacher_name);
//     toastMsg();
//     include_once "../views/schedule_search.php";
// } else {
//     $allSchedule = getAllSchedule();
//     toastMsg();
//     include_once "../views/schedule_search.php";
// }
function searchSchedule()
{
    $school_year = $_POST['school_year'];
    $subject_name = $_POST['subject_name'];
    $teacher_name = $_POST['teacher_name'];
    $scheduleResult = scheduleSearch($school_year, $subject_name, $teacher_name);
    include_once "../views/schedule_search.php";
}
function allSchedule()
{
    $allSchedule = getAllSchedule();
    include_once "../views/schedule_search.php";
}
function toastMsg()
{
    $GLOBALS['isToast'] = true;
    $_SESSION['id'] = $_POST['deleteSchedule'];
    include_once "../views/schedule_search.php";
}
