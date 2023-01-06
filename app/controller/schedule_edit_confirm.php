<?php
include '../controller/common.php';
include_once "../model/schedule.php";
include_once "../model/teacher.php";
include_once "../model/subject.php";
include_once '../common/database.php';

if (isset($_POST['edit_schedule'])) {
    $schedule_id = $_SESSION['schedule_id'];
    $school_year = $_POST['school_year'];
    $subject_id = $_POST['subject_id'];
    $teacher_id = $_POST['teacher_id'];
    $week_day = $_POST['week_day'];
    $lession = $_POST['lession'];
    $notes = $_POST['notes'];
    edit_schedule($schedule_id, $school_year, $subject_id, $teacher_id, $weekday, $lession, $notes);
    session_destroy();
    include_once "../views/schedule_edit_complete.php";
} else if (isset($_POST['edit_again'])) {
    include_once "../views/schedule_edit_input.php";
}
