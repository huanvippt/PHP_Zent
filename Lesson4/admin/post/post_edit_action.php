<?php
    require_once('../../cnDatabase.php');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $contents = $_POST['contents'];
    
    $status = 0;
    if(isset($_POST['status']))
        $status = $_POST['status'];
    
    $target_dir = "../../img/";
    $thumbnail = "";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $s = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
    if($s){
        $thumbnail = basename($_FILES["thumbnail"]["name"]);
    }

    $category_id = $_POST['category_id'];

    $query = "update posts set title = '$title', description = '$description', contents = '$contents', thumbnail = '$thumbnail', category_id = '$category_id', status = '$status' where id = ".$id;
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Cập nhật thành công', time()+1);
        header('Location: posts.php');
    }
    else{
        setcookie('msg', 'Cập nhật không thành công', time()+1);
        header('Location: post_edit.php?id='.$id);
    }
?>