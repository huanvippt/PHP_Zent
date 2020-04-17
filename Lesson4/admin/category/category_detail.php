<?php
    require_once('../../cnDatabase.php');
    $id = $_GET['id'];
    $query_category = "select * from categories where id = ".$id;
    $category = $conn->query($query_category)->fetch_assoc();
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
        <h3 align="center">Category Detail</h3>
        <hr>
        <h2>Title: <?=$category['title']?></h2>
        <h2>Description: <?=$category['description']?></h2>
    </div>
</body>
</html>