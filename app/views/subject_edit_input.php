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

    ?>
    <div class="container">
        <h1 class="text-center my-3">Sửa môn học</h1>
        <form action="../controller/subject_edit_input.php?edit_subject=<?php echo $subjectInfos['id']; ?>" method="post" enctype="multipart/form-data" class="border border-primary rounded p-3">

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject_name">Tên môn học</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="subject_name" name="subject_name" value="<?php echo $subjectInfos['name']; ?>">
                    <span class="text-danger font-weight-bold">
                        <?php echo $errorsMissing['subject_name']
                        ?>
                    </span>
                </div>
            </div>

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="school_year">Khóa</label>
                <div class="col-sm-6">
                    <select id="school_year" class="form-control" name="school_year">
                        <option <?php empty($_SESSION['school_year']) ? "selected" : "" ?> value="">
                            <--- Chọn năm học--->
                        </option>
                        <?php
                        $school_year = constant('YEAR');
                        foreach ($school_year as $key => $value) {
                            $selected = ($value == $subjectInfos['school_year'] ? "selected" : "");
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
                    <textarea class="form-control" id="subject_note" rows="5" name="subject_note"><?php echo $subjectInfos['description']; ?></textarea>
                    <span class="text-danger font-weight-bold">
                        <?php
                        echo $errorsMissing['subject_note']
                        ?>
                    </span>
                </div>
            </div>

            <?php
            if (isset($_SESSION['subject_avatar'])) {
            ?>
                <div class="form-group row mt-4">
                    <label class="col-sm-2" for="file" class="form__label">
                        Avatar
                    </label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="file" name="subject_avatar">
                        </div>
                        <input type="hidden" id="file" name="old_subject_avatar" value="<?= isset($_SESSION['subject_avatar']) ? $_SESSION['subject_avatar'] : ''; ?>">
                        <img style="height: 150px; width: 150px" src="../../assets/avatar/tmp/<?= $_SESSION['subject_avatar']; ?>" alt="Avatar">
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="form-group row mt-4">
                    <label class="col-sm-2" for="file" class="form__label">
                        Avatar
                    </label>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="file" name="subject_avatar" border-width ">
                        </div>
                        <div class=" row">
                            <span class="text-danger font-weight-bold">
                                <?php
                                echo $errorsMissing['subject_image'];
                                ?>
                            </span>
                            <img style=" height: 150px; width: 150px" src="../../assets/avatar/subject/<?= $subjectInfos['id'] . "/" . $subjectInfos['avatar'] ?>" alt="Avatar">
                        </div>
                    </div>

                </div>
            <?php
            }
            ?>
            <div class="mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5" name="edit_subject">Xác nhận</button>
            </div>
        </form>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>