<?php
    require_once('../../cnDatabase.php');
    $id = $_GET['id'];
    $query_posts = "select * from posts where id = ".$id;
    $posts = $conn->query($query_posts)->fetch_assoc();
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
        <h3 align="center">Update Post</h3>
        <hr>
            <?php if(isset($_COOKIE['msg'])){ ?>
                <div class="alert alert-warning">
                    <strong>Lỗi!!! </strong><?=$_COOKIE['msg']?>
                </div>
            <?php } ?>
            <form action="post_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$posts['id']?>">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$posts['title']?>">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" id="" placeholder="" name="description" value="<?=$posts['description']?>">
                </div>
                <div class="form-group">
                    <label for="">Contents</label>
                    <textarea rows= "10" class="form-control" id="" placeholder="" name="contents"><?=$posts['contents']?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control">
                        <?php foreach ($categories as $cate) { ?>
                            <option value="<?=$cate['id']?>"><?=$cate['title']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Hiển thị bài viết</label>
                    <input type="checkbox" id="" placeholder=""  value = "1" name="status">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
</body>
</html>