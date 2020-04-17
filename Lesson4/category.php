<?php
$id = $_GET['id'];
include 'cnDatabase.php';

	//Load dữ liệu category
	$queryDataCategories3 = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id where p.status = 1 and c.id = '$id' order by p.created_at asc limit 3";
	//die($queryDataCategories3);
	$qDataCategories3 = $conn->query($queryDataCategories3);
	$dataCate = $qDataCategories3->fetch_assoc();
	//var_dump($dataCate);
	//die($queryDataCategories3);
	$dataCategories3 = array();
	while ($row = $qDataCategories3->fetch_assoc()) {
		$dataCategories3[] = $row;
	}

	//Lấy 5 bài viết categories
	$queryDataCategories5 = "select p.*, c.title as 'category' from posts p left join categories c on p.category_id = c.id where p.status = 1 and c.id = '$id' order by p.created_at asc limit 5";
	$qDataCategories5 = $conn->query($queryDataCategories5);
	$dataCategories5 = array();
	while ($row = $qDataCategories5->fetch_assoc()) {
		$dataCategories5[] = $row;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>My Blog</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<?php include 'mainNav.php' ?>			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li><?=$dataCate['category']?></li>
							</ul>
							<h1><?=$dataCate['category']?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.php?id=<?=$dataCate['id']?>"><img src="./img/<?=$dataCate['thumbnail']?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?=$dataCate['category']?></a>
											<span class="post-date"><?=$dataCate['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?=$dataCate['id']?>"><?=$dataCate['title']?></a></h3>
									</div>
								</div>
							</div> 
							<!-- /post -->
										
							<!-- post -->
							<?php foreach ($dataCategories3 as $dataCate3) {
							?>
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.php?id=<?=$dataCate3['id']?>"><img src="./img/<?=$dataCate3['thumbnail']?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?=$dataCate3['category']?></a>
											<span class="post-date"><?=$dataCate3['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?=$dataCate3['id']?>"><?=$dataCate3['title']?></a></h3>
									</div>
								</div>
							</div>
						 	<?php } ?>
							<!-- /post -->
							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->
							
							<!-- post -->
							<?php foreach ($dataCategories5 as $dataCate5) 
							{ ?>
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.php?id=<?=$dataCate5['id']?>"><img src="./img/<?=$dataCate5['thumbnail']?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?=$dataCate5['category']?></a>
											<span class="post-date"><?=$dataCate5['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?=$dataCate5['id']?>"><?=$dataCate5['title']?></a></h3>
										<p><?=$dataCate5['description']?></p>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- /post -->
							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>

							<?php foreach ($postsRand4 as $postRand4) { ?>
							<div class="post post-widget">
								<a class="post-img" href="blog-post.php?id=<?=$postRand4['id']?>"><img src="./img/<?=$postRand4['thumbnail']?>" alt="" width = 90px height = 90px></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php?id=<?=$postRand4['id']?>"><?=$postRand4['title']?></a></h3>
								</div>
							</div>
							<?php } ?>
						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
								<?php foreach($countCategory as $countCate) { ?>
									<li><a href="category.php?id=<?=$countCate['id']?>" class="cat-1"><?=$countCate['title']?><span><?=$countCate['soluong']?></span></a></li>
								<?php } ?>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">Jan 2018</a></li>
									<li><a href="#">Feb 2018</a></li>
									<li><a href="#">Mar 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<?php include 'footer.php';?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
