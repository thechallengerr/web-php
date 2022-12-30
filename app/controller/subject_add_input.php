
<?php 

include '../common/database.php';
include '../model/subject.php';
include '../controller/common.php';

if (! isset($_POST['confirm_subject_app'])){

    $subject_name = $_POST['subject_name'];
    $school_year = $_POST['school_year'];
    $subject_note = $_POST['subject_note'];
    $subject_avatar = $_POST['subject_avatar'];
    if ( add_subject($subject_name, $school_year, $subject_note, $subject_avatar)) {
        include '../views/subject_add_complete.php';
    }
    else{
        include '../views/subject_add_input.php';
    }

}
?>

