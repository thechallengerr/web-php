<?php 
$get_infor = $connect->build_query([
    "table" => "post",
    "select" => "*"
])->select();
while ($row = mysqli_fetch_array($get_infor)) {
    echo "<tr>
        <td> 
        <div class='img-container'>
            <img src='{$row['avatar']}' alt='{$row['name_post']}'>
        </div>
        </td>
        <td class='td-name'>
            {$row['name_post']}
        </td>
        <td>
            {$row['description']}...
        </td>
        <td class='td-number'>{$row['date']}</td>
        <td class='td-actions'>
            <a href='/post/".utf8tourl($row['name_post'])."-{$row['id_post']}.html'>
                <button type='button' rel='tooltip' data-placement='left' title='Xem Bài Viết' class='btn btn-info btn-link btn-icon'>
                    <i class='fa fa-image'></i>
                </button>
            </a>
            <a href='add-post.php?id={$row['id_post']}'>
                <button type='button' rel='tooltip' data-placement='left' title='Sửa Bài Viết' class='btn btn-success btn-link btn-icon'>
                    <i class='fa fa-edit'></i>
                </button>
            </a>
            <a href='/model/delete_post.php?id={$row['id_post']}'>
                <button type='button' rel='tooltip' data-placement='left' title='Xóa Bài Viết' class='btn btn-danger btn-link btn-icon '>
                    <i class='fa fa-times'></i>
                </button>
            </a>
        </td>
    </tr>";
}
?>