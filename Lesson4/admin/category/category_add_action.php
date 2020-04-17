<?php
    require_once('../../cnDatabase.php');
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "insert into categories(title, description) values ('$title','$description')";
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Thêm mới thành công', time()+1);
        header('Location: categories.php');
    }
    else{
        setcookie('msg', 'Thêm mới không thành công', time()+1);
        header('Location: category_add.php');
    }
?>
<!-- Thiếu check dữ liệu trống -->