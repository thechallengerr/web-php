<?php

// CRUD

function add_teacher($params) //CREAT
{
    global $connection;

    $sql  = "INSERT INTO `teacher` 
            ....";
    /*
    ....
    */
    return true;
}

function get_all_teachers() //READ
{
    global $connection;

    $sql  = "SELECT * FROM `teachers`";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row;
}

function get_some_teachers($params) //READ
{
    global $connection;

    $sql  = "SELECT * FROM `teachers`
            WHERE ... AND ...";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

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

function delete_teacher($params) //DELETE
{
    global $connection;

    $sql  = "DELETE FROM `teachers`
            WHERE ...";
    /*
    ....
    */
    return true;
}
?>