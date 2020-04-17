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
        <h3 align="center">Authors Detail</h3>
        <hr>
        <h2>Name: <?=$authors['name']?></h2>
        <h2>Email: <?=$authors['email']?></h2>
    </div>
</body>
</html>