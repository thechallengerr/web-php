<?php
include '../controller/common.php';
include_once "../model/schedule.php";
include_once "../model/teacher.php";
include_once "../model/subject.php";
include_once '../common/database.php';
$schedule = get_schedule_by_id($_SESSION["schedule_id"]);
$teacher_name = get_teacher_name_by_id($_SESSION["teacher_id"]);
$subject_name = get_subject_name_by_id($_SESSION["subject_id"]);
echo $teacher["name"];
echo $subject["name"];
$errors = array('school_year' => '', 'subject_id' => '', 'teacher_id' => '', 'week_day' => '', 'lession' => '', 'notes' => '');
$school_year = $subject_id = $teacher_id = $week_day = $notes = '';
$lessions = array();
// $schedule_id = ;

if (isset($_POST["edit_schedule"])) {
    $schedule_id = $_SESSION['schedule_id'];
    $school_year = $_SESSION['school_year'];
    $subject_id = $_SESSION['subject_id'];
    $teacher_id = $_SESSION['teacher_id'];
    $week_day = $_SESSION['week_day'];
    $lession = $_SESSION['lession'];

    $notes = $_SESSION['notes'];
    if (edit_schedule($schedule_id, $school_year, $subject_id, $teacher_id, $week_day, $lession, $notes)) {
        include_once "../views/schedule_edit_complete.php";
    }
} else {
    include_once "../views/schedule_edit_confirm.php";
}
// include_once '../views/schedule_edit_input.php';
