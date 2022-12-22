
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/schedule_style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="scheduleSearch">
            <div class="scheduleForm">
                <form method="POST">

                    <div class="scheduleForm--wrap d-flex col-8">
                        <div class="scheduleForm--wrap__label col-4"><label for="">Khoá</label></div>
                        <select name="school_year" id="" class="col-8">
                            <option value="Năm 1">Năm 1</option>
                            <option value="Năm 2">Năm 2</option>
                            <option value="Năm 3">Năm 3</option>
                            <option value="Năm 4">Năm 4</option>
                        </select>
                    </div>
                    <div class="scheduleForm--wrap d-flex col-8">
                        <div class="scheduleForm--wrap__label col-4"><label for="">Môn học</label></div>
                        <select name="subject_name" id="" class="col-8">
                            <option value="Toán">Toán</option>
                            <option value="Tiếng Việt">Tiếng Việt</option>
                            <option value="Giáo dục công dân">Giáo dục công dân</option>
                        </select>
                    </div>
                    <div class="scheduleForm--wrap col-8 d-flex">
                        <div class="scheduleForm--wrap__label col-4"><label for="">Giáo viên</label></div>
                        <select name="teacher_name" id="" class="col-8">
                            <option value="Nguyễn Thị Anh">Nguyễn Thị Anh</option>
                            <option value="Võ Xuân Bịp">Võ Xuân Bịp</option>
                            <option value="Đinh Công Tráng">Đinh Công Tráng</option>
                        </select>
                    </div>
                    <div class="scheduleForm--wrap d-flex col-8">
                        <div class="scheduleForm--wrap__space col-4"></div>
                        <div class="scheduleForm--wrap__search"><button type="submit" name="schedule_search" class="btn btn-primary">Tìm kiếm</button></div>

                    </div>
                </form>

            </div>
            <?php echo (isset($scheduleResult)) ? "<div class='scheduleResult'>Số bản ghi tìm thấy: <span class='searchResult'> " . count($scheduleResult) . " </span></div>" : '' ?>
            <div class="scheduleData">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Khoá</th>
                            <th scope="col">Môn học</th>
                            <th scope="col">Giáo viên</th>
                            <th scope="col">Thứ</th>
                            <th scope="col">Tiết học</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        if (isset($allSchedule)) {
                            $tempList = $allSchedule;
                        } else {
                            $tempList = $scheduleResult;
                        }

                        foreach ($tempList as $arrs) {
                        ?>

                            <tr>
                                <th scope="row"><?php echo $count += 1 ?></th>
                                <td> <?php echo $arrs['school_year'] ?></td>
                                <td><?php echo $arrs['subject_name'] ?></td>
                                <td><?php echo $arrs['name'] ?></td>
                                <td><?php echo $arrs['week_day'] ?></td>
                                <td><?php echo $arrs['lession'] ?></td>
                                <td>

                                    <div class="manageOption d-flex">
                                        <div class="manageOption--delete me-2"><button class="btn btn-primary" onclick="openToast()" name="deleteSchedule" type="submit" value=<?php echo $arrs['id'] ?>>Xoá</button></div>
                                        <div class="manageOption--edit"><button class="btn btn-primary">Sửa</button></div>
                                    </div>

                                </td>
                            </tr>
                        <?php  }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="ToastMsg" id="isToast">
            <div class="ToastMsg--wrap">
                <form method="POST">
                    <div class="ToastMsg--title">
                        <h5>Thông báo</h5>
                    </div>
                    <div class="ToastMsg--content">Bạn có muốn xoá thời khoá biểu?</div>
                    <div class="ToastMsg--btn">
                        <div class="ToastMsg--btn__cancel">
                            <button class="btn btn-primary" id="cancel">Cancel</button>
                        </div>
                        <div class="ToastMsg--btn__confirm">
                            <button type="submit" class="btn btn-primary" name="confirm" id="confirm">OK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("cancel").addEventListener("click", function() {
            document.getElementById("isToast").style.display = "none";
        });

        function openToast() {
            document.getElementById("isToast").style.display = "flex";
        }
    </script>
</body>

</html>