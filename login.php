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
	<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="login.php" method="post">
                    <h3 class="text-center">Đăng nhập</h3>
                    <div class="form-group">
                        <label for="login_id">Người dùng</label>
                        <input class="form-control form-control-lg" type="text" name="login_id" class="input-label" placeholder="" autofocus value="<?php echo isset($_POST["login_id"]) ? $_POST["login_id"] : ''; ?>" >
                    </div>
                    <div class="">
                        <label style="color: red">
                            <?php 
                            echo $errors['login_id'];
                            ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input class="form-control form-control-lg" type="password" name="password" class="input-label" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
                    </div>
                    <div class="">
                        <label style="color: red">
                            <?php 
							echo $errors['password'];
                            ?>
                        </label>
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