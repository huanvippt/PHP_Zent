<?php
    require_once('../../cnDatabase.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $target_dir = "../../img/";
    $thumbnail = "";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $s = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
    if($s){
        $thumbnail = basename($_FILES["thumbnail"]["name"]);
    }
    $status = 0;
    if(isset($_POST['status']))
        $status = $_POST['status'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $contents = $_POST['contents'];
    $category_id = $_POST['category_id'];
    $author_id = 1;
    $create_at = date('Y-m-d H:i:s');
    $query = "insert into posts(title, description, contents, thumbnail, category_id, author_id, status, created_at) 
        values ('$title', '$description', '$contents', '$thumbnail', '$category_id', '$author_id', '$status','$create_at')";
    $status = $conn->query($query);
    if($status == true){
        setcookie('msg', 'Thêm mới thành công', time()+1);
        header('Location: posts.php');
    }
    else{
        setcookie('msg', 'Thêm mới không thành công', time()+1);
        header('Location: post_add.php');
    }
?>