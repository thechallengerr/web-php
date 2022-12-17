<?php
include 'app/common/database.php';
include 'app/model/admin.php';


$result = get_admins('hieu1k23', '123456');

if ($result) {
    echo 'Tồn tại tài khoản này';
}
else {
    echo 'Không có tài khoản này';
}

include 'app/views/login.php'
?>