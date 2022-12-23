<?php
include __DIR__.'/common.php'; // common kiem tra session
include (__DIR__.'/../common/database.php'); 
include (__DIR__.'/../model/admin.php'); // model -> lựa chọn model phù hợp




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
            $$admin = get_admins($login_id, $password);
            if(!empty($admin)){
                $_SESSION['user']['login_id'] = $login_id;
                $_SESSION['success'] = "You are now logged in";
                $_SESSION['timelogin'] = date("Y-m-d h:i:s");
                header('location: ../../index.php');
            }else{
                $errors['password'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
        }
    }


include(__DIR__ . '/../../login.php'); // view
?>