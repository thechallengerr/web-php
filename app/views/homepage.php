<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="header d-flex justify-content-between">
            <div class="user_login d-flex flex-column" >
                <label for="">Tên login: <span><?php if(isset($_SESSION['username'])){
                    echo $_SESSION['username'];
                } ?></span></label> 
                <label for="">Thời gian login : <span><?php if(isset($_SESSION['timelogin'])){
                    echo $_SESSION['timelogin'];
                } ?></span></label>
            </div>
            <div class="user_logout">
                <!-- logout in php -->
                <form action="" method="post">
                    <button type="submit" name="logout" class="btn btn-danger">Đăng xuất</button>
                </form>
            </div>
        </div>
        <br>
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">Thời khóa biểu</h4>
                <p class="card-text">Tra cứ thông tin về thời khóa biểu môn học</p>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <label for="">Phòng học</label>
                <ul  style="list-style-type: none;">
                    <a class="link-info" href=""><li>Tìm kiếm</li></a>
                    <a class="link-success" href=""><li>Thêm mới</li></a>
                </ul>
            </li>
            <li class="list-group-item">
                <label for="">Giảng viên</label>
                <ul  style="list-style-type: none;">
                    <a class="link-info" href=""><li>Tìm kiếm</li></a>
                    <a class="link-success" href=""><li>Thêm mới</li></a>
                </ul>
            </li>
            <li class="list-group-item">
                <label for="">Môn học</label>
                <ul  style="list-style-type: none;">
                    <a class="link-info" href=""><li>Tìm kiếm</li></a>
                    <a class="link-success" href=""><li>Thêm mới</li></a>
                </ul>
            </li>
            <li class="list-group-item">
                <label for="">Thời khóa biểu</label>
                <ul  style="list-style-type: none;">
                    <a class="link-info" href=""><li>Tìm kiếm</li></a>
                    <a class="link-success" href=""><li>Thêm mới</li></a>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</body>
</html>