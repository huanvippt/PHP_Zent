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
        <h3 align="center">Posts Detail</h3>
        <hr>
        <h4 style="color:blue">Title: </h4><h4><?=$posts['title']?></h4>
        <h4 style="color:blue">Description: </h4><h4><?=$posts['description']?></h4>
        <h4 style="color:blue">Created_at: </h4><h4><?=$posts['created_at']?></h4>
        <h4 style="color:blue">Contents: </h4><h4><?=$posts['contents']?></h4>
    </div>
</body>
</html>