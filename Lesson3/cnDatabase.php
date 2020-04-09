<?php 	
	//tạo thông tin database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myphp";

	//tạo kết nối
	$conn = new mysqli($servername, $username, $password, $dbname);

	//lấy dữ liệu từ bảng
	$queryNewPosts = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id  order by created_at  desc limit 6";
	$qNewPosts = $conn->query($queryNewPosts);
	$newPosts = array();
	while ($row = $qNewPosts->fetch_assoc()) {
		$newPosts[] = $row;
	}

	//lấy dữ liệu từ bảng tiếp
	$queryNewPosts1 = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id  order by created_at asc limit 6,6";
	$qNewPosts1 = $conn->query($queryNewPosts1);
	$newPosts1 = array();
	while ($row = $qNewPosts1->fetch_assoc()) {
		$newPosts1[] = $row;
	}

	//lấy ngẫu nhiên 1 hàng từ bảng
	$queryPostsRand = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id order by rand() limit 1";
	$qPostsRand = $conn->query($queryPostsRand);
	$postsRand = array();
	while ($row = $qPostsRand->fetch_assoc()) {
		$postsRand[] = $row;
	}

	//Lấy 2 bài viết đầu trang
	$queryTwoPosts = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id where p.status = 1 order by p.created_at asc limit 2";
	$qTwoPosts = $conn->query($queryTwoPosts);
	$twoPosts = array();
	while ($row = $qTwoPosts->fetch_assoc()) {
		$twoPosts[] = $row;
	}

	//Load category(menu)
	$queryCategories = "select * from categories";
	$qCategories = $conn->query($queryCategories);
	$categories = array();
	while ($row = $qCategories->fetch_assoc()) {
		$categories[] = $row;
	}

	//Load dữ liệu category
	// $id_c = $_GET['id_c'];
	// $queryDataCategories3 = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id where p.status = 1 and c.id = '$id_c' order by p.created_at asc limit 3";
	// //die($queryDataCategories3);
	// $qDataCategories3 = $conn->query($queryDataCategories3);
	// $dataCate = $qDataCategories3->fetch_assoc();
	// //var_dump($dataCate);
	// //die($queryDataCategories3);
	// $dataCategories3 = array();
	// while ($row = $qDataCategories3->fetch_assoc()) {
	// 	$dataCategories3[] = $row;
	//}

	//Lấy 5 bài viết categories
	// $queryDataCategories5 = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id where p.status = 1 and c.id = '$id_c' order by p.created_at asc limit 5";
	// $qDataCategories5 = $conn->query($queryDataCategories5);
	// $dataCategories5 = array();
	// while ($row = $qDataCategories5->fetch_assoc()) {
	// 	$dataCategories5[] = $row;
	// }

	//Hiển thị bài viết
	// $id_p = $_GET['id_p'];
	//die($id_p);
	// $queryReadPosts = "select p.*, a.name as 'author', c.title as 'category' from posts p, authors a, categories c
	// 	where p.category_id = c.id and p.author_id = a.id and p.id = '$id_p'";
	// //die($queryReadPosts);
	// $qReadPosts = $conn->query($queryReadPosts);	 	
	// $readPosts = $qReadPosts->fetch_assoc();

	//Bài viết liên quan(Trong bài viết đang đọc)

 ?>