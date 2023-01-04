<?php
include '../controller/common.php';
include '../common/database.php'; 
include '../model/subject.php';

if(isset($_GET["delete_subject"])) {
    $id = $_GET["delete_subject"];
    delete_subject($id);
}

$row = get_all_subjects(); 
if (isset($_GET["subject_search"])) {
    $school_year_value = $_GET["school_year"];
    $keyword_value = $_GET["keyword"];
    $row = get_some_subjects($school_year_value, $keyword_value); 
} 

include "../views/subject_search.php";

?>