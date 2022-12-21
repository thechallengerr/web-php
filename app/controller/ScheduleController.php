<?php
// include '../controller/common.php';
include_once "../model/schedule.php";
$schedule = new schedule();
if (isset($_POST['deleteSchedule'])){
    var_dump(1);
    var_dump($_POST['deleteSchedule']);
}
if (isset($_POST['schedule_search'])) {
    $school_year = $_POST['school_year'];
    $subject_name = $_POST['subject_name'];
    $teacher_name = $_POST['teacher_name'];
    $scheduleResult = $schedule->scheduleSearch($school_year, $subject_name, $teacher_name);
    $_SESSION['scheduleResult'] = $scheduleResult;
    unset($_SESSION['allSchedule']);
    include_once "../views/schedule_search.php";
} else {
    $allSchedule = $schedule->getAllSchedule();
    $_SESSION['allSchedule'] = $allSchedule;
    unset($_SESSION['scheduleResult']);
    include_once "../views/schedule_search.php";
}

// function render($file, $variable = [])
// {
//     include_once "../views/schedule_search.php";
//     extract($variable);
//     ob_start();
//     require_once "$file";
//     $render_view = ob_get_clean();
//     return $render_view;
// }

// class ScheduleController
// {
//     public $schedule;
//     public function __construct()
//     {
//         $this->schedule = new schedule();
//     }
//     public function index()
//     {
//         var_dump($this->schedule->getAllSchedule());
//     }
//     public function searchSchedule()
//     {
//         $school_year = "Năm 1";
//         $subject_name = "Toán";
//         $teacher_name = "Nguyễn Thị Anh";

//         var_dump($this->schedule->scheduleSearch($school_year, $subject_name, $teacher_name));
//     }
// }
