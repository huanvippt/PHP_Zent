<?php
    require_once('../../cnDatabase.php');
    $queryPosts = "select * from posts";
	$qPosts = $conn->query($queryPosts);
	$posts = array();
	while ($row = $qPosts->fetch_assoc()) {
		$posts[] = $row;
	}
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
        <h3 align="center">Posts List</h3>
        <a href="post_add.php" type="button" class="btn btn-primary">Thêm mới</a>
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
                    <th scope="col">Thumbnail</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post){ ?>
                <tr>
                    <th scope="row"><?=$post['id']?></th>
                    <td><?=$post['title']?></td>
                    <td><?=$post['description']?></td>
                    <td><?=$post['contents']?></td>
                    <td><img src="../../img/<?=$post['thumbnail']?>" width="200px" height="150px"></td>
                    <td>
                        <a href="post_detail.php?id=<?=$post['id']?>" type="button" class="btn btn-default">Chi tiết</a>
                        <a href="post_edit.php?id=<?=$post['id']?>" type="button" class="btn btn-success">Sửa</a>
                        <a href="post_delete.php?id=<?=$post['id']?>" type="button" class="btn btn-warning">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>