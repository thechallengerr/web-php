<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sửa thông tin giáo viên</title>
</head>

<body>

    <?php
    include '../common/navbar.php';
    ?>
    <div class="container">
        <h1 class="text-center mt-5">Sửa thời khóa biểu</h1>
        <form action="" method="post" class="mt-5 mb-5 border border-primary rounded p-5">
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="name">Họ và tên</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="subject">Bộ môn</label>
                <div class="col-sm-6">

                    <select id="subject" class="form-control">
                        <option selected>
                            <--- Chọn bộ môn --->
                        </option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-2" for="hocvi">Học vị</label>
                <div class="col-sm-6">
                    <select id="hocvi" class="form-control">
                        <option selected>
                            <--- Chọn học vị --->
                        </option>
                        <option>...</option>
                    </select>
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

            <div class="form-group row mt-4">
                <label class="col-sm-2" for="note">Mô tả thêm</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="note" rows="5"></textarea>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-around">
                <button type="button" class="btn btn-primary btn-lg pe-5 ps-5">Sửa lại</button>
                <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5">Đăng kí</button>
            </div>
        </form>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>