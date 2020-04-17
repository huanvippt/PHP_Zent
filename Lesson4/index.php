<?php
include 'cnDatabase.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>My Blogs</title>

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
		</header>
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
					<!-- post -->
					<?php
						foreach ($twoPosts as $twoPost) {
					?>
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.php?id=<?=$twoPost['id']?>"><img src="./img/<?=$twoPost['thumbnail']?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.php?id=<?=$twoPost['id']?>"><?=$twoPost['category']?></a>
									<span class="post-date"><?=$twoPost['created_at']?></span>
								</div>
								<h3 class="post-title"><a href="blog-post.php?id=<?=$twoPost['id']?>"><?=$twoPost['title']?></a></h3>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Bài viết mới nhất</h2>
						</div>
					</div>
					<!-- post -->
					<?php
						foreach ($newPosts as $nPost) {
					?>
						<div class="col-md-4">
							<div class="post">
								<a class="post-img" href="blog-post.php?id=<?=$nPost['id']?>"><img src="./img/<?=$nPost['thumbnail']; ?>" alt="" width = 360px height = 216px></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-1" href="category.php?id=<?=$nPost['id']?>"><?=$nPost['category']; ?></a>
										<span class="post-date"><?=$nPost['created_at']; ?></span>
									</div>
									<h3 class="post-title"><a href="blog-post.php?id=<?=$nPost['id']?>"><?=$nPost['title']; ?></a></h3>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="clearfix visible-md visible-lg"></div>	
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<?php
								foreach ($postsRand as $postRand) {
							?>
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.php?id=<?=$postRand['id']?>"><img src="./img/<?=$postRand['thumbnail']; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="category.php?id=<?=$postRand['id']?>"><?=$postRand['category']; ?></a>
											<span class="post-date"><?=$postRand['created_at']; ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?=$postRand['id']?>"><?=$postRand['title']?></a></h3>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- post -->
							<?php
								$dem = 1;
								foreach ($newPosts1 as $newPost1) {
							?>
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.php?id=<?=$newPost1['id']?>"><img src="./img/<?=$newPost1['thumbnail']; ?>" alt="" width = 360px height = 216px></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.php?id=<?=$newPost1['id']?>"><?=$newPost1['category']; ?></a>
											<span class="post-date"><?=$newPost1['created_at']; ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?=$newPost1['id']?>"><?=$newPost1['title']; ?></a></h3>
									</div>
								</div>
							</div>
							<?php
								if($dem % 2 == 0){
									echo '<div class="clearfix visible-md visible-lg"></div>';
								}
								$dem++;
							 } ?>
						</div>
					</div>
					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Xem nhiều nhất</h2>
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

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<?php foreach ($twoPosts as $twoPost) { ?>
							<div class="post post-thumb">
								<a class="post-img" href="blog-post.php?id=<?=$twoPost['id']?>"><img src="./img/<?=$twoPost['thumbnail']?>" alt="" width = 360px height = 216px></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="category.php?id=<?=$twoPost['id']?>"><?=$twoPost['category']?></a>
										<span class="post-date"><?=$twoPost['created_at']?></span>
									</div>
									<h3 class="post-title"><a href="blog-post.php?id=<?=$twoPost['id']?>"><?=$twoPost['title']?></a></h3>
								</div>
							</div>
							<?php } ?>
						</div>
						<!-- /post widget -->
						
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Most Read</h2>
								</div>
							</div>
							<!-- post -->
							<?php foreach ($postsRand4 as $postRand4) { ?>
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.php?id=<?=$postRand4['id']?>"><img src="./img/<?=$postRand4['thumbnail']?>" alt=""width = 300px height = 180px></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="category.php?id=<?=$postRand4['id']?>"><?=$postRand4['category']?></a>
											<span class="post-date"><?=$postRand4['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?=$postRand4['id']?>"><?=$postRand4['title']?></a></h3>
										<p><?=$postRand4['description']?></p>
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
