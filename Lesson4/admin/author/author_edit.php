<?php
    require_once('../../cnDatabase.php');
    $id = $_GET['id'];
    $query_authors = "select * from authors where id = ".$id;
    $authors = $conn->query($query_authors)->fetch_assoc();
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
        <h3 align="center">Update new Authors</h3>
        <hr>
            <?php if(isset($_COOKIE['msg'])){ ?>
                <div class="alert alert-warning">
                    <strong>Lỗi!!! </strong><?=$_COOKIE['msg']?>
                </div>
            <?php } ?>
            <form action="author_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$authors['id']?>">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="" placeholder="" name="name" value="<?=$authors['name']?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="" placeholder="" name="email" value="<?=$authors['email']?>">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu mới</label>
                    <input type="password" class="form-control" id="" placeholder="" name="pass">
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <input type="checkbox" id="" placeholder=""  value = "1" name="status">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
</body>
</html>