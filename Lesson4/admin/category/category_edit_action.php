<?php
    require_once('../../cnDatabase.php');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "update categories set title = '$title', description = '$description' where id = ".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Cập nhật thành công', time()+1);
        header('Location: categories.php');
    }
    else{
        setcookie('msg', 'Cập nhật không thành công', time()+1);
        header('Location: category_edit.php?id='.$id);
    }
?>