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
        <h3 align="center">Add new Author List</h3>
        <hr>
            <?php if(isset($_COOKIE['msg'])){ ?>
                <div class="alert alert-warning">
                    <strong>Lỗi!!! </strong><?=$_COOKIE['msg']?>
                </div>
            <?php } ?>
            <form action="author_add_action.php" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="" placeholder="" name="name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="" placeholder="" name="email">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" id="" placeholder="" name="pass">
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <input type="checkbox" id="" placeholder=""  value = "1" name="status">
                </div>
                <button type="submit" class="btn btn-primary">Creat</button>
            </form>
    </div>
</body>
</html>