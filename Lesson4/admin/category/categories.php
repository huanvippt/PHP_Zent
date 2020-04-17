<?php
    require_once('../../cnDatabase.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zent - Education and Technology Group</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 align="center">Zent - Education and Technology Group</h3>
        <h3 align="center">Category List</h3>
        <a href="category_add.php" type="button" class="btn btn-primary">Thêm mới</a>
        <?php if(isset($_COOKIE['msg'])){ ?>
                <div class="alert alert-success">
                    <strong>Thành công!!! </strong><?=$_COOKIE['msg']?>
                </div>
            <?php } ?>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categories as $cate){ ?>
                <tr>
                    <th scope="row"><?=$cate['id']?></th>
                    <td><?=$cate['title']?></td>
                    <td><?=$cate['description']?></td>
                    <td>
                        <a href="category_detail.php?id=<?=$cate['id']?>" type="button" class="btn btn-default">Chi tiết</a>
                        <a href="category_edit.php?id=<?=$cate['id']?>" type="button" class="btn btn-success">Sửa</a>
                        <a href="category_delete.php?id=<?=$cate['id']?>" type="button" class="btn btn-warning">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>