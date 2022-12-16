<?php
include '../common/database.php'; 

// CRUD

function add() //CREAT
{
    $QUERY  = "INSERT INTO `table` VALUES (.., .., ..)";
}

function get() //READ
{
    $QUERY  = "SELECT * FROM `table` ";
}

function edit() //UPDATE
{
    $QUERY  = "UPDATE ...";
}

function delete() //DELETE
{
    $QUERY  = "DELETE FROM `table`";
}