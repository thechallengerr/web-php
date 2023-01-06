<?php
include_once "../model/schedule.php";
include_once '../common/database.php';
include_once 'common.php';
if(isset($_POST['deleteSchedule'])){
    $isToast=true;
    $_SESSION['idDelete']=$_POST['deleteSchedule'];
    $allSchedule = getAllSchedule();
    include_once "../views/schedule_search.php";
}
if(isset($_POST['confirmDelete'])){
    deleteSchedule($_SESSION['idDelete']);
    allSchedule();
}
if (isset($_POST['schedule_search'])) {
    searchSchedule();
}else{
    allSchedule();
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
