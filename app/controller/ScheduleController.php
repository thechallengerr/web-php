<?php
include '../controller/common.php';
include_once "../model/schedule.php";
include_once '../common/database.php';
if (isset($_POST['deleteSchedule'])) {
    var_dump($_POST['deleteSchedule']);
}
if (isset($_POST['schedule_search'])) {
    $school_year = $_POST['school_year'];
    $subject_name = $_POST['subject_name'];
    $teacher_name = $_POST['teacher_name'];
    $scheduleResult =scheduleSearch($school_year, $subject_name, $teacher_name);
    include_once "../views/schedule_search.php";
} else {
    $allSchedule =getAllSchedule();
    include_once "../views/schedule_search.php";
}
