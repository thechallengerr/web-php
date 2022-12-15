<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
        
</head>
<body>
<!-- ------------------------------------php------------------------------------------------------ -->

<?php
    session_start();
    $username = $password = '';
    $errors = array('username' => '', 'password' => '');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $db = mysqli_connect('localhost', 'root', '', 'quanlythoikhoabieu');
        // $sql = "SELECT * FROM user WHERE login_id = '$username' AND password = '$password'";
        echo $username;
        echo $password;
        // $result = mysqli_query($db, $sql);
        // if (mysqli_num_rows($result) == 1) {
        //     $_SESSION['user']['username'] = $username;
        //     $_SESSION['success'] = "You are now logged in";
        //     header('location: index.php');
        // } else {
        //     echo "Wrong username/password combination";
        // }
    }
?>
    <!-- login by bootstrap  -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="login.php" method="post">
                    <h3 class="text-center">Đăng nhập</h3>
                    <div class="form-group">
                        <label for="username">Người dùng</label>
                        <input type="text" name="username" value="<?php echo $username ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" value="<?php echo $password ?>" class="form-control form-control-lg">
                    </div>
                    <!-- forget password -->
                    <div class="form-group">
                        <a href="" class="float-right">Quên mật khẩu</a>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
                
    

</body>
</html>