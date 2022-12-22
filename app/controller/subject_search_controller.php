<?php
include '../controller/common.php';
include '../common/database.php'; 
include '../model/subject.php';

$row = get_all_subjects(); 
if (isset($_POST["subject_search"])) {
    $school_year_value = $_POST["school_year"];
    $keyword_value = $_POST["keyword"];
    $row = get_some_subjects($school_year_value, $keyword_value); 
} 
     

include "../views/subject_search.php";

?>