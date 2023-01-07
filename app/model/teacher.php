<?php
include_once "../common/database.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');
// CRUD


function add_teacher($name, $specialized, $degree, $teacher_image, $note) //CREAT
{
    global $connection;
    $date = date("Y-m-d H:i:s");
    $sql  = "INSERT INTO `teachers` (name, avatar, description, specialized, degree, created) VALUES('{$name}', '{$teacher_image}', '{$note}', '{$specialized}', '{$degree}', '{$date}')";
    $result = $connection->query($sql);
    return $result;
}

function get_all_teachers() //READ
{
    global $connection;

    $sql  = "SELECT * FROM teachers ORDER BY teachers.id DESC";

    $result = $connection->query($sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $row;
}

function get_teacher_name_by_id($id) //READ
{
    global $connection;

    $sql  = "SELECT name FROM teachers WHERE id = '$id'";

    $result = $connection->query($sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $row;
}

function search_teachers_by_specialized_and_keyword($specialized, $keyword) //READ
{
    global $connection;

    $sql  = "SELECT * FROM teachers WHERE teachers.specialized = '$specialized' 
    AND (teachers.name LIKE '%$keyword%' OR teachers.description LIKE '%$keyword%' OR teachers.degree LIKE '%$keyword%') ORDER BY teachers.id DESC";

    $result = $connection->query($sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $row;
}

function search_teachers_by_specialized($specialized) //READ
{
    global $connection;

    $sql  = "SELECT * FROM teachers WHERE teachers.specialized = '$specialized' ORDER BY teachers.id DESC";

    $result = $connection->query($sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $row;
}

function search_teachers_by_keyword( $keyword) //READ
{
    global $connection;

    $sql  = "SELECT * FROM teachers WHERE teachers.name LIKE '%$keyword%' 
            OR teachers.description LIKE '%$keyword%' 
            OR teachers.degree LIKE '%$keyword%' ORDER BY teachers.id DESC";

    $result = $connection->query($sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $row;
}

function edit_teacher($params) //UPDATE
{
    global $connection;

    $sql = "UPDATE `teachers`
            SET ...
            WHERE ...";
    /*
    ....
    */
    return true;
}

function delete_teacher($id) //DELETE
{
    global $connection;

    $sql  = "DELETE FROM teachers
            WHERE teachers.id=$id";
    $connection->query($sql);

    return true;
}

function get_last_id(){
    global $connection;

    $last_id = $connection->insert_id;

    return $last_id;
}
