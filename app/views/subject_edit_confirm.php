<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Xác nhận sửa môn học</title>
</head>

<body>

    <?php
    include '../common/navbar.php';

    ?>
    <div class="container">
        <h1 class="text-center my-3">Xác nhận sửa môn học</h1>
        <form action="../controller/subject_edit_input.php?edit_subject=<?php echo $subjectInfos['id']; ?>" method="post" enctype="multipart/form-data" class="border border-primary rounded p-3">

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject_name">Tên môn học</label>
                <div class="col-sm-6">
                    <span class="font-weight-bold">
                        <input readonly class="form-control" id="subject_name" name="subject_name" value="<?= $data['subject_name']; ?>">
                    </span>
                </div>
            </div>

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="school_year">Khóa</label>
                <div class="col-sm-6">
                    <select readonly id="school_year" class="form-control" name="school_year">
                        <option <?php empty($_SESSION['school_year']) ? "selected" : "" ?> value="">
                            <--- Chọn năm học--->
                        </option>
                        <?php
                        $school_year = constant('YEAR');
                        foreach ($school_year as $key => $value) {
                            $selected = ($value == $data['school_year'] ? "selected" : "");
                        ?>
                            <option <?php echo $selected; ?> value="<?= $value ?>"><?= $value ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <span class="text-danger font-weight-bold">
                        <?php
                        echo $errorsMissing['school_year']
                        ?>
                    </span>
                </div>
            </div>

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject_note">Mô tả </label>
                <div class="col-sm-8">
                    <span class="font-weight-bold">
                        <textarea readonly class="form-control" id="subject_note" rows="5" name="subject_note"><?= $data['subject_note']; ?></textarea>
                    </span>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="file" class="form__label">
                    Avatar
                </label>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <!-- <input type="file" class="form-control" id="file" name="subject_avatar" border-width "> -->
                    </div>
                    <div class=" row">
                        <span class="text-danger font-weight-bold">
                            <?php
                            echo $errorsMissing['subject_image'];
                            ?>
                        </span>

                        <?php
                        if (empty($data['subject_image'])) {
                            echo ' <input type="hidden" id="file" name="subject_avatar" value="' . $subjectInfos['avatar'] . '"><img style=" height: 150px; width: 150px" src="../../assets/avatar/subject/' . $subjectInfos['id'] . "/" .  $subjectInfos['avatar'] . '" alt="Avatar">';
                        } else {
                            echo '<input type="hidden" id="file" name="subject_avatar" value="' . $data['subject_image'] . '"> <img style=" height: 150px; width: 150px" src="../../assets/avatar/tmp/' . $data['subject_image'] . '" alt="Avatar">';
                        }
                        ?>
                    </div>
                </div>

            </div>
            <?php
            ?>
            <div class="mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5" name="edit_subject_confirm">Xác nhận</button>
            </div>
        </form>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>