<?php
include("../common/database.php");
include("../common/define.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <?php
    include '../common/navbar.php';
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="school_year_id">Khoá học</label>
                    <div class="col-sm-8">
                        <select name="school_year" id="school_year_id" class="form-control">
                            <?php foreach (constant("YEAR") as $key => $value) { ?>
                                <option><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="keyword_id">Từ khóa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="keyword_id" name="keyword">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary" name="subject_search" value="Tìm kiếm">
                    </div>
                </div>
            </form>
        </div>
        <div>Số bản ghi tìm thấy: <?php ?></div>
        <div class="col-sm-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tên môn học</th>
                        <th scope="col">Khóa</th>
                        <th scope="col">Mô tả chi tiết</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row) : ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['school_year']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                                <div>
                                    <button class="btn btn-danger">Xoá</button>
                                    <button class="btn btn-primary">Sửa</button>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

</body>

</html>