<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/schedule_style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="scheduleSearch">
            <div class="scheduleForm">
                <form action="">
                    <div class="scheduleForm--wrap d-flex col-8">
                        <div class="scheduleForm--wrap__label col-4"><label for="">Khoá</label></div>
                        <select name="" id="" class="col-8">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="scheduleForm--wrap d-flex col-8">
                        <div class="scheduleForm--wrap__label col-4"><label for="">Môn học</label></div>
                        <select name="" id="" class="col-8">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="scheduleForm--wrap col-8 d-flex">
                        <div class="scheduleForm--wrap__label col-4"><label for="">Giáo viên</label></div>
                        <select name="" id="" class="col-8">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div class="scheduleForm--wrap d-flex col-8">
                        <div class="scheduleForm--wrap__space col-4"></div>
                        <div class="scheduleForm--wrap__search"><button type="button" class="btn btn-primary">Tìm kiếm</button></div>
                    </div>
                </form>

            </div>
            <div class="scheduleResult">Số bản ghi tìm thấy:<span class="searchResult">xxx</span></div>
            <div class="scheduleData">
                <table >
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Năm 2</td>
                            <td>Đại số</td>
                            <td>Trần Văn A</td>
                            <td>Thứ 2</td>
                            <td>1,2</td>
                            <td>
                                <div class="manageOption d-flex">
                                    <div class="manageOption--delete me-2"><button class="btn btn-primary" onclick="openToast()">Xoá</button></div>
                                    <div class="manageOption--edit"><button class="btn btn-primary">Sửa</button></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Năm 1</td>
                            <td>Đại số</td>
                            <td>Trần Văn A</td>
                            <td>Thứ 2</td>
                            <td>1,2</td>
                            <td>
                                <div class="manageOption d-flex">
                                    <div class="manageOption--delete me-2"><button class="btn btn-primary" onclick="openToast()">Xoá</button></div>
                                    <div class="manageOption--edit"><button class="btn btn-primary">Sửa</button></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Năm 1</td>
                            <td>Đại số</td>
                            <td>Trần Văn A</td>
                            <td>Thứ 2</td>
                            <td>1,2</td>
                            <td>
                                <div class="manageOption d-flex">
                                    <div class="manageOption--delete me-2"><button class="btn btn-primary" onclick="openToast()">Xoá</button></div>
                                    <div class="manageOption--edit"><button class="btn btn-primary">Sửa</button></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ToastMsg" id="isToast">
            <div class="ToastMsg--wrap">
                <div class="ToastMsg--title">
                    <h5>Thông báo</h5>
                </div>
                <div class="ToastMsg--content">Bạn có muốn xoá thời khoá biểu?</div>
                <div class="ToastMsg--btn">
                    <div class="ToastMsg--btn__cancel">
                        <button class="btn btn-primary" id="cancel">Cancel</button>
                    </div>
                    <div class="ToastMsg--btn__confirm">
                        <button class="btn btn-primary" id="confirm">OK</button>
                    </div>
                </div>
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