<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Thêm mới môn học</title>
</head>

<body>

<?php
include '../common/navbar.php';
include '../common/define.php';
session_start();

/**
 * @param $data
 * @return string
 * Hàm này để chuẩn hóa một chút data mà người dùng nhập vào
 */
function checkData($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (isset($_POST['submit_subject_add'])){

    // kiểm tra đường dẫn file chứa avatar của subject, nếu chưa có -> tạo mới
    $dir = "../../assets/avatar/subject";
    if (! file_exists($dir)) {
        mkdir($dir);
    }

    // kiểm tra validate của subject_name
    $checked_subject_name = checkData($_POST['subject_name']);
    if ( empty($checked_subject_name)){
        $error['subject_name_empty'] = "Hãy nhập tên môn học";
    }

    if ( strlen($checked_subject_name) > 100){
        $error['subject_name_length'] = "Không nhập quá 100 ký tự";
    }

    // kiểm tra validate của school_year
    $checked_school_year = checkData($_POST['school_year']);
    if ( empty($checked_school_year)){
        $error['school_year_empty'] = "Hãy chọn khóa học";
    }

    // kiểm tra validate của subject_note
    $checked_subject_note = checkData($_POST['subject_note']);
    if ( empty($checked_subject_note)){
        $error['subject_note_empty'] = "Hãy nhập mô tả chi tiết";
    }

    if ( strlen($checked_subject_note) > 1000){
        $error['subject_note_length'] = "Không nhập quá 1000 ký tự";
    }

    //kiểm tra validate của subject_avatar
    $checked_subject_avatar = checkData($_FILES['subject_avatar']['name']);
    if ( empty($checked_subject_avatar) ){
        /** ở form subject_add_confirm nếu ấn sửa lại thì sẽ quay lại trang này,
         * khi đó sẽ có thêm old_subject_avatar (ảnh người dùng đã submit)
         * TH1: người dùng chọn ảnh mới -> sẽ thêm ảnh mới vào như bình thường
         * TH2: người dùng không chọn ảnh mới -> dùng luôn ảnh old_subject_avatar
         */
        if (empty($_POST['old_subject_avatar'])){
            $error['subject_avatar_empty'] = "Hãy chọn avatar";
        }
        else{
            $name = $_POST['old_subject_avatar'];
        }
    }
    else {
        // cái file ảnh này sơ sơ thế mình sẽ update thêm
        $files =  $_FILES['subject_avatar']['tmp_name'];
        $name = $_FILES['subject_avatar']['name'].date('YmdHis');
        $path = "../../assets/avatar/subject/".$name;
        move_uploaded_file($files, $path);

        // kiểm tra có phải ảnh không, nếu không phải -> xóa + error
        if (! getimagesize("../../assets/avatar/subject/".$name)) {

            /** cái if này đề phòng không xóa được file lỗi thì không bị nảy ra error
             * cũng không rõ có cần thiết không hiếu or đạt check thì có thể sủa nhé  */
            if (unlink("../../assets/avatar/subject/".$name)) {

            }

            $error['subject_avatar_empty'] = 'Hãy chọn avatar';
        }
    }

    if(!$error){
        $_SESSION['subject_name'] = $_POST['subject_name'];
        $_SESSION['school_year'] = $_POST['school_year'];
        $_SESSION['subject_note'] = $_POST['subject_note'];
        $_SESSION['subject_avatar'] = $name;

        header('Location:subject_add_confirm.php');
    }
}


?>
<div class="container">
    <h1 class="text-center my-3">Thêm mới môn học</h1>
    <form action="" method="post" enctype="multipart/form-data" class="border border-primary rounded p-3">

        <?php
        echo isset($error['subject_name_empty']) ? $error['subject_name_empty'] : '';
        echo isset($error['subject_name_length']) ? $error['subject_name_length'] : '';
        ?>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject_name">Tên môn học</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="subject_name" name="subject_name" value="<?= isset($_SESSION['subject_name']) ? $_SESSION['subject_name'] : '';?>">
                </div>
            </div>

            <?php
            echo isset($error['school_year_empty']) ? $error['school_year_empty'] : '';
            ?>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="school_year">Khóa</label>
                <div class="col-sm-6">
                    <select id="school_year" class="form-control" name="school_year">
                        <option value="<?= isset($_SESSION['school_year']) ? $_SESSION['school_year'] : '';?>" selected="selected">
                            <?= isset($_SESSION['school_year']) ? $_SESSION['school_year'] : '<--- Chọn năm học--->';?>
                        </option>
                            <?php
                            $school_year = constant('YEAR');
                            foreach ($school_year as $key => $value) {
                            ?>
                                <option value="<?= $value ?>"><?= $value ?></option>
                            <?php
                            }
                            ?>
                        </select>
                </div>
            </div>

            <?php
            echo isset($error['subject_note_empty']) ? $error['subject_note_empty'] : '';
            echo isset($error['subject_note_length']) ? $error['subject_note_length'] : '';
            ?>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject_note">Mô tả </label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="subject_note" rows="5" name="subject_note" ><?= isset($_SESSION['subject_note']) ? $_SESSION['subject_note'] : '';?></textarea>
                </div>
            </div>

            <?php
            echo isset($error['subject_avatar_empty']) ? $error['subject_avatar_empty'] : '';
            if (isset($_SESSION['subject_avatar'])){
                ?>
                <div class="form-group row mt-4">
                    <label class="col-sm-2" for="file" class="form__label">
                        Avatar
                    </label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="file" name="subject_avatar" >
                        </div>
                        <input type="hidden"id="file" name="old_subject_avatar" value="<?= isset($_SESSION['subject_avatar']) ? $_SESSION['subject_avatar'] : '';?>">
                        <img style="height: 150px; width: 150px" src="../../assets/avatar/subject/<?= $_SESSION['subject_avatar'];?>" alt="Avatar">
                    </div>
                </div>
                <?php
            }
            else{
                ?>
                <div class="form-group row mt-4">
                    <label class="col-sm-2" for="file" class="form__label">
                        Avatar
                    </label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="file" name="subject_avatar" border-width ">
                        </div>
                    </div>

                </div>
                <?php
            }
            ?>
            <div class="mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5" name="submit_subject_add">Xác nhận</button>
            </div>
        </form>

</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>