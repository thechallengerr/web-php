<?php

// CRUD

function add_admin() //CREAT
{
    global $connection;

    return true;
}

function get_admins($login_id, $password) //READ
{
    global $connection;

    $sql  = "SELECT * FROM `admins` 
            WHERE login_id = '$login_id' AND password = '$password' AND actived_flag > 0";
    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row;
}

function edit_admin($login_id, $password) //UPDATE
{
    global $connection;

    $sql = "UPDATE `admins`
            SET password = 'md5($password)'
            WHERE login_id = '$login_id'";

    return true;
}

function delete_admin($login_id) //DELETE
{
    global $connection;

    $sql  = "DELETE FROM `table`
            WHERE login_id = '$login_id'";

    return true;
}
?>