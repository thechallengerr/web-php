<?php

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

    $sql  = "SELECT * FROM `subjects`";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row;
}

function get_some_subjects($params) //READ
{
    global $connection;

    $sql  = "SELECT * FROM `subjects`
            WHERE ... AND ...";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

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