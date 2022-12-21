<?php
// connect db
include_once "../common/database.php";

class schedule
{
    public $connection;
    public function __construct()
    {
        $this->connection = $this->getConnection();
    }
    //connection
    function getConnection()
    {
        $connection = new mysqli(host, user, pass, dbname);
        return $connection;
    }

    // tìm kiếm thời khoá biểu
    public function scheduleSearch($school_year, $subject_name, $teacher_name)
    {
        try {
            $sql = "SELECT schedules.school_year,subjects.name as subject_name,teachers.name,schedules.week_day,schedules.lession from schedules join subjects ON schedules.subject_id=subjects.id AND subjects.name='{$subject_name}' AND schedules.school_year='{$school_year}'  join teachers ON teachers.id=schedules.teacher_id AND teachers.name='{$teacher_name}'";
            $result = $this->connection->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            var_dump($e);
        }
    }


    //Lấy danh sách thời khoá biểu
    public function getAllSchedule()
    {
        try {
            $sql = 'SELECT schedules.school_year,subjects.name as subject_name ,teachers.name,schedules.week_day,schedules.lession from schedules join subjects ON schedules.subject_id=subjects.id  join teachers ON teachers.id=schedules.teacher_id';
            $result = $this->connection->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}
