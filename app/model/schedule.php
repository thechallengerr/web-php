<?php
// connect db
include_once "../common/database.php";
// tìm kiếm thời khoá biểu
function scheduleSearch($school_year, $subject_name, $teacher_name, $connection)
{
    try {
        $sql = "SELECT schedules.id,schedules.school_year,subjects.name as subject_name,teachers.name,schedules.week_day,schedules.lession from schedules join subjects ON schedules.subject_id=subjects.id AND subjects.name='{$subject_name}' AND schedules.school_year='{$school_year}'  join teachers ON teachers.id=schedules.teacher_id AND teachers.name='{$teacher_name}'";
        $result = $connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        var_dump($e);
    }
}


//Lấy danh sách thời khoá biểu
function getAllSchedule($connection)
{
    try {
        $sql = 'SELECT schedules.id,schedules.school_year,subjects.name as subject_name ,teachers.name,schedules.week_day,schedules.lession from schedules join subjects ON schedules.subject_id=subjects.id  join teachers ON teachers.id=schedules.teacher_id';
        $result = $connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        var_dump($e);
    }
}

// Xoá thời khoá biểu
function deleteSchedule($id, $connection)
{
    $sql = "Delete from schedules WHERE schedules.id='{$id}'";
    $connection->query($sql);
}
