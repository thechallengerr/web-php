<?php
include_once "../common/database.php";
// CRUD

function add_subject($params) //CREAT
{
    global $connection;

    $sql  = "INSERT INTO `subjects` 
            ....";
    /*
    ....
    */
    return true;
}

function get_all_subjects() //READ
{
    global $connection;

    $sql  = "SELECT * FROM subjects";

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    return $row;
}

function get_some_subjects($school_year, $keyword) //READ
{
    global $connection;

    $sql  = "SELECT * FROM subjects WHERE subjects.school_year = '$school_year' 
    AND (subjects.name LIKE '%$keyword%' OR subjects.description LIKE '%$keyword%')";

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    return $row;
}

function edit_subject($params) //UPDATE
{
    global $connection;

    $sql = "UPDATE `subjects`
            SET ...
            WHERE ...";
    /*
    ....
    */
}

function delete_subject($params) //DELETE
{
    global $connection;

    $sql  = "DELETE FROM `subjects`
            WHERE ...";
    /*
    ....
    */
}
?>