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
    <div class="container">
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
                <a href="../../login.php">Đăng xuất</a>
            </div>
        </div>
        <br>
        <div class="content d-flex justify-content-around">
            <div class="room">
                <label for="">Phòng học</label>
                <ul  style="list-style-type: none;">
                    <a href=""><li>Tìm kiếm</li></a>
                    <a href=""><li>Thêm mới</li></a>
                </ul>
            </div>
            <div class="teacher">
                <label for="">Giảng viên</label>
                <ul  style="list-style-type: none;">
                    <a href=""><li>Tìm kiếm</li></a>
                    <a href=""><li>Thêm mới</li></a>
                </ul>
            </div>
            <div class="lesson">
                <label for="">Môn học</label>
                <ul  style="list-style-type: none;">
                    <a href=""><li>Tìm kiếm</li></a>
                    <a href=""><li>Thêm mới</li></a>
                </ul>
            </div>
            <div class="tkb">
                <label for="">Thời khóa biểu</label>
                <ul  style="list-style-type: none;">
                    <a href=""><li>Tìm kiếm</li></a>
                    <a href=""><li>Thêm mới</li></a>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>