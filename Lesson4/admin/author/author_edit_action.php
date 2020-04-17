<?php
    require_once('../../cnDatabase.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $status = 0;
    if(isset($_POST['status']))
        $status = $_POST['status'];
    $query = "update authors set name = '$name', email = '$email', password = '$pass', status = '$status' where id = ".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Cập nhật thành công', time()+1);
        header('Location: author.php');
    }
    else{
        setcookie('msg', 'Cập nhật không thành công', time()+1);
        header('Location: author_edit.php?id='.$id);
    }
?>