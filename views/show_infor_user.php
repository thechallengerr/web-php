<?php 
function get_user_new() {
    global $connect;
    $get_infor = $connect->build_query([
        "table" => "infor_user",
        "select" => "*",
        "where" => "status = 0"
    ])->select();
    while ($row = mysqli_fetch_array($get_infor)) {
        echo "<tr>
            <td> 
            <div class='td-name'>
                {$row['name']}
            </div>
            </td>
            <td class='td-number'>
                {$row['email']}
            </td>
            <td class='td-number'>
                {$row['phone_number']}
            </td>
            <td class='td-text'>
                {$row['message']}
            </td>
            <td class='td-actions'>
                <a href='/model/update_status_infor.php?id={$row['id_infor_user']}'>
                    <button type='button' rel='tooltip' data-placement='left' title='Đánh xấu đã xem' class='btn btn-danger btn-link btn-icon '>
                        <i class='fa fa-times'></i>
                    </button>
                </a>
            </td>
        </tr>";
    }
}
function get_all_user() {
    global $connect;
    $get_infor = $connect->build_query([
        "table" => "infor_user",
        "select" => "*"
    ])->select();
    while ($row = mysqli_fetch_array($get_infor)) {
        echo "<tr>
            <td> 
            <div class='td-name'>
                {$row['name']}
            </div>
            </td>
            <td class='td-number'>
                {$row['email']}
            </td>
            <td class='td-number'>
                {$row['phone_number']}
            </td>
            <td class='td-text'>
                {$row['message']}
            </td>
            <td class='td-actions'>
                <a href='/model/delete_infor_user.php?id={$row['id_infor_user']}'>
                    <button type='button' rel='tooltip' data-placement='left' title='Xóa thông tin' class='btn btn-danger btn-link btn-icon '>
                        <i class='fa fa-times'></i>
                    </button>
                </a>
            </td>
        </tr>";
    }
}
?>