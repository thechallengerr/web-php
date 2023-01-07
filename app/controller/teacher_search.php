<?php
include '../controller/common.php';
include '../common/database.php'; 
include '../model/teacher.php';
include '../common/define.php';

if(isset($_GET["delete_teacher"])) {
    $id = $_GET["delete_teacher"];
    delete_teacher($id);
    header('Location: ./teacher_search.php');
}

$row = get_all_teachers(); 
if (isset($_GET["teacher_search"])) {
    $specialized_key = $_GET["specialized"];
    $keyword_value = $_GET["teacher_keyword"];
    
    if($specialized_key != '' or $keyword_value == ''){
        $row = search_teachers_by_specialized($specialized_key);
    }elseif($specialized_key == '' or $keyword_value != ''){
        $row = search_teachers_by_keyword($keyword_value);
    }elseif($specialized_key != '' and $keyword_value != ''){
        $row = search_teachers_by_specialized_and_keyword($specialized_key, $keyword_value); 
    }
   
} 

include "../views/teacher_search.php";

?>