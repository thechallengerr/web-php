<?php
include '../controller/common.php';
include_once "../model/schedule.php";
include_once "../model/teacher.php";
include_once "../model/subject.php";
include_once '../common/database.php';

if (isset($_POST['confirm_edit'])) {
    $school_year = $_POST['school_year'];
    $subject_id = $_POST['subject_id'];
    $teacher_id = $_POST['teacher_id'];
    $week_day = $_POST['week_day'];
    $lession = $_POST['lession'];
    $notes = $_POST['notes'];
    edit_schedule($school_year, $subject_id, $teacher_id, $weekday, $lession, $notes);
    include_once "../views/schedule_edit_complete.php";
} else {
    include_once "../views/schedule_edit_complete.php";
}
