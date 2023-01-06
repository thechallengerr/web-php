<?php
session_start();
include_once "../model/schedule.php";
include_once '../common/database.php';
if (isset($_POST['schedule_search'])) {
    searchSchedule();
}else{
    allSchedule();
}
if(isset($_GET["idDelete"])) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header_remove($actual_link);
    // allSchedule();
}
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
