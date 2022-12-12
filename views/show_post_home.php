<?php 
$get_infor = $connect->build_query([
    "table" => "post",
    "select" => "*"
])->select();
while ($row = mysqli_fetch_array($get_infor)) {
    echo "<div class='col-md-4'>
          <div class='card card-plain card-blog'>
            <div class='card-header card-header-image'>
              <a href='/post/".utf8tourl($row['name_post'])."-{$row['id_post']}.html'>
                <img class='img img-raised' src='{$row['avatar']}'>
              </a>
            </div>
            <div class='card-body'>
                <h6 class='card-category text-danger'><i class='material-icons'>alarm</i> {$row['date']}</h6>
              <h4 class='card-title'>
                <a href='/post/".utf8tourl($row['name_post'])."-{$row['id_post']}.html'>
                    {$row['name_post']}
                </a>
              </h4>
              <p class='card-description'>
                {$row['description']}...
              </p>
            </div>
          </div>
        </div>";
}
?>