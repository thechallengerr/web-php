<?php

// chú viết các xử lý logic thuần back-end ở đây
//.....
//.....


// sau đó chú có thể đẩy các biến đó để render sang bên view
// VD:
// $tien = "10,000Đ";
session_start();
    $login_id = $password = '';

    $errors = array('login_id' => '', 'password' => '');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $status_login = true; // biến kiểm tra đăng nhập
        // check login_id
        if (empty($_POST['login_id'])) {
            $errors['login_id'] = 'Hãy nhập tên đăng nhập <br />';
            $status_login = false;
        } else {
            $login_id = $_POST['login_id'];
        }
        // check password
        if (empty($_POST['password'])) {
            $errors['password'] = 'Hãy nhập mật khẩu <br />';
            $status_login = false;
        } else {
            $password = $_POST['password'];
        }
        // if there are no errors, save to database
        if ($status_login == true) {
            // connect to the database
            $db = mysqli_connect('localhost', 'root', '', 'quanlythoikhoabieu');
            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM admins WHERE login_id = '$login_id' AND password = '$password'";
            $result = $db -> query($sql);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if($row){
                $_SESSION['user']['login_id'] = $login_id;
                $_SESSION['success'] = "You are now logged in";
                header('location: ./app/views/home.php');
            }else{
                $errors['password'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
        }
    }

include 'app/views/login.php'
?>
