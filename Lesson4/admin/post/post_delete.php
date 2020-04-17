<?php
    require_once('../../cnDatabase.php');
    $id = $_GET['id'];
    $query = "delete from posts where id = ".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Xóa thành công', time()+1);
    }
    else{
        setcookie('msg', 'Xóa không thành công', time()+1);
    }
    header('Location: posts.php');
?>