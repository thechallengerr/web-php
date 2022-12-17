<?php

// CRUD

function add_schedule($params) //CREAT
{
    global $connection;

    $sql  = "INSERT INTO `schedules` 
            ....";
    /*
    ....
    */
    return true;
}

function get_all_schedules() //READ
{
    global $connection;

    $sql  = "SELECT * FROM `schedules`";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row;
}

function get_some_schedules($params) //READ
{
    global $connection;

    $sql  = "SELECT * FROM `schedules`
            WHERE ... AND ...";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row;
}

function edit_schedule($params) //UPDATE
{
    global $connection;

    $sql = "UPDATE `schedules`
            SET ...
            WHERE ...";
    /*
    ....
    */
    return true;
}

function delete_schedule($params) //DELETE
{
    global $connection;

    $sql  = "DELETE FROM `schedules`
            WHERE ...";

    /*
    ....
    */
    return true;
}

?>