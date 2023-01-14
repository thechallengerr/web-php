<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

include("../common/database.php");
include("../common/define.php");
include '../controller/schedule_add_input.php';
// include '../controller/common.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tạo thời khóa biểu</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-5">Tạo thời khóa biểu</h1>
        <form action="schedule_add_input.php" method="post" class="mt-5 mb-5 border border-primary rounded p-5">
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="year">Khóa học</label>
                <div class="col-sm-6">

                    <select name="school_year" class="form-control">

                        <option <?php empty($_SESSION['school_year']) ? "selected" : "" ?> value="">
                            <--- Chọn năm học--->
                        </option>
                        <?php
                        $school_year = constant('YEAR');
                        foreach ($school_year as $key => $value) {
                            $selected = ("");
                        ?>
                            <option <?php echo $selected; ?> value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <?php if (isset($errorsMissing['school_year'])) { ?>
                        <span class="text-danger font-weight-bold">
                            <b><?php echo $errorsMissing['school_year']; ?></b>
                        </span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject">Môn học</label>
                <div class="col-sm-6">
                    <select name="subject_id" id="subject" class="form-control">
                        <option <?php empty($_SESSION['subject_id']) ? "selected" : "" ?> value="">
                            <--- Chọn môn học --->
                        </option>
                        <?php
                        
                        if (isset($subjects)) {
                            foreach ($subjects as $subject) {
                                $selected = (isset($_SESSION['subject_id']) && $subject["id"] == $_SESSION['subject_id'] ? "selected" : "");
                                echo '<option  ' . $selected . 'value="' . $subject["id"] . '">' . $subject["name"] .'</option>';
                            }
                        }
                        ?>
                    </select>
                    <?php if (isset($errorsMissing['subject'])) { ?>
                        <span class="text-danger font-weight-bold">
                            <b><?php echo $errorsMissing['subject']; ?></b>
                        </span>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="teacher">Giáo viên</label>
                <div class="col-sm-6">
                    <select name="teacher_id" id="teacher" class="form-control">
                        <option <?php empty($_SESSION['teacher_id']) ? "selected" : "" ?> value="">
                            <--- Chọn giáo viên --->
                        </option>
                        <?php
                        if (isset($teachers)) {
                            foreach ($teachers as $teacher) {
                                $selected = (isset( $_SESSION['teacher_id']) && $teacher["id"] == $_SESSION['teacher_id'] ? "selected" : "");
                                echo '<option ' .$selected. 'value="' . $teacher["id"] . '">' . $teacher["name"] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <?php if (isset($errorsMissing['teacher_id'])) { ?>
                        <span class="text-danger font-weight-bold">
                            <b><?php echo $errorsMissing['teacher_id']; ?></b>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="weekday">Thứ</label>
                <div class="col-sm-6">

                    <select id="weekday" name="week_day" class="form-control">
                        <option <?php empty($_SESSION['week_day']) ? "selected" : "" ?> value="">
                                <--- Chọn lịch học--->
                        </option>
                        <?php
                        $week_day = constant('WEEKDAY');
                        foreach ($week_day as $key => $value) {
                            $selected = ($key == $_SESSION['week_day'] ? "selected" : "");
                        ?>
                            <option <?php echo $selected; ?> value="<?= $key ?>"><?= $value ?></option>
                            <?php
                        }
                        ?>
                       
                    </select>
                    <?php if (isset($errorsMissing['week_day'])) { ?>
                        <span class="text-danger font-weight-bold">
                            <b><?php echo $errorsMissing['week_day']; ?></b>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="lession">Tiết</label>
                <div class="col-sm-10 d-flex justify-content-between"> 
                    <?php
                    $lessions = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
                    foreach ($lessions as $lession) { ?>
                         <div class='form-check'>
                            <input class='form-check-input' type='checkbox' value='<?php echo $lession; ?>' id='lession<?php echo $lession; ?>' name='lession[]'>
                            <label class='form-check-label' for='lession<?php echo $lession; ?>''>
                                Tiết <?php echo $lession; ?>
                            </label>
                        </div>
                        <?php 
                            }
                            if (isset($errorsMissing['lession'])) { ?>
                                <span class="text-danger font-weight-bold">
                                    <b><?php echo $errorsMissing['lession']; ?></b>
                                </span>
                            <?php } ?>

                </div>
            </div>

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="note">Chú ý</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="notes" name="notes" rows="5"><?php echo (isset($_SESSION['notes']) ? $_SESSION['notes'] : ''); ?></textarea>
                    <?php if (isset($errorsMissing['notes'])) { ?>
                        <span class="text-danger font-weight-bold">
                            <b><?php echo $errorsMissing['notes']; ?></b>
                        </span>
                    <?php } ?>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5" name="confirm_submit">Xác nhận</button>
            </div>
        </form>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>