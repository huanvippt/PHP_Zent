<?php
    require_once('../../cnDatabase.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $status = 0;
    if(isset($_POST['status']))
        $status = $_POST['status'];
    $query = "insert into authors(name, email, password, status) values ('$name','$email', '$pass','$status')";
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Thêm mới thành công', time()+1);
        header('Location: author.php');
    }
    else{
        setcookie('msg', 'Thêm mới không thành công', time()+1);
        header('Location: author_add.php');
    }
?>
<!-- Thiếu check dữ liệu trống -->