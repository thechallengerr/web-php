<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Trang chủ</title>
    <style>
        .list-group-item-custom {
            cursor: pointer;
        }

        .list-group-item-custom:hover {
            background-color: rgba(0, 0, 0, 0.175);
        }
    </style>
</head>

<body>
    <div class="justify-content-between d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <div class="my-0 mr-md-auto font-weight-normal">
            <div class="d-flex">
                <span class="mb-1">Tên login <b><?php if (isset($_SESSION['username'])) {
                                                    echo $_SESSION['username'];
                                                } ?></b> </span>
            </div>
            <span>Thời gian login: <b> <?php if (isset($_SESSION['timelogin'])) {
                                            echo $_SESSION['timelogin'];
                                        } ?></b></span>
        </div>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">Giảng viên</a>
            <a class="p-2 text-dark" href="#">Môn học</a>
            <a class="p-2 text-dark" href="#">Thời khóa biểu</a>
        </nav>
        <div class="d-flex">
            <div class="user_logout">
                <!-- logout in php -->
                <form action="" method="post">
                    <button type="submit" name="logout" class="btn btn-danger">Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-body">
            <h2 class="card-title">Thời khóa biểu</h2>
            <p class="card-text mb-4">Tra cứ thông tin về thời khóa biểu môn học</p>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Giảng viên</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-custom">
                            <a href="">Tìm kiếm</a>
                        </li>
                        <li class="list-group-item list-group-item-custom">
                            <a href="">Thêm mới</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5> Môn học</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-custom">
                            <a href="">Tìm kiếm</a>
                        </li>
                        <li class="list-group-item list-group-item-custom">
                            <a href="">Thêm mới</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Thời khóa biểu</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-custom">
                            <a href="">Tìm kiếm</a>
                        </li>
                        <li class="list-group-item list-group-item-custom">
                            <a href="">Thêm mới</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">

            </div>
        </footer>
    </div>
</body>

</html>