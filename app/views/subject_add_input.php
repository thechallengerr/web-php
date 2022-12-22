<?php
include ('../common/define.php');
?>
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
<div class="container">
    <h1 class="text-center mt-5">Thêm mới môn học</h1>
    <form action="" method="post" class="mt-5 mb-5 border border-primary rounded p-5">
        <div class="form-group row mt-4">
            <label class="col-sm-2" for="year">Tên môn học</label>
            <div class="col-sm-6">

                <input type="text" class="form-control" id="subject_name" name="subject_name" required>

            </div>
        </div>
        <div class="form-group row mt-4">
            <label class="col-sm-2" for="subject">Khóa</label>
            <div class="col-sm-6">

                <select id="subject" class="form-control" name="school_year">
                    <option selected>
                        <--- Chọn năm học--->
                    </option>
                    <?php
                    $school_year = constant('YEAR');
                    print_r($school_year);
                    foreach ($school_year as $key => $value){
                    ?>
                        <option value="<?= $value ?>"><?= $value ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row mt-4">
            <label class="col-sm-2" for="info">Mô tả </label>
            <div class="col-sm-8">
                <textarea class="form-control" id="info" rows="5" name="note" required></textarea>
            </div>
        </div>

        <div class="form-group row mt-4">
            <label class="col-sm-2" for="file" class="form__label">
                Avatar
            </label>
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="file" name="subject_image" border-width>
                    <!-- <label class="input-group-text" for="file">Browse</label> -->
                </div>
            </div>

        </div>

        <div class="mt-5 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5">Xác nhận</button>
        </div>


    </form>

</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
