<?php
$id = $_GET['id'];
include 'cnDatabase.php';

	//Hiển thị bài viết
	$queryReadPosts = "select p.*, a.name as 'author', c.title as 'category' from posts p, authors a, categories c
			where p.category_id = c.id and p.author_id = a.id and p.id = '$id'";
		//die($queryReadPosts);
	$qReadPosts = $conn->query($queryReadPosts);	 	
	$readPosts = $qReadPosts->fetch_assoc();

	//Hiển thị bài viết liên quan(Trong bài viết đang đọc)
	$sameCategories = $readPosts['category'];
	//die($sameCategories);
	$querySameCategories = "select posts.id as 'id', posts.title as 'title', posts.thumbnail as 'thumbnail' from posts inner join categories on categories.id = posts.category_id
		where categories.title = '$sameCategories' limit 5";
	//die($querySameCategories);
	$qSameCategories  = $conn->query($querySameCategories);
	$tableSameCategories = array();
	while ($row = $qSameCategories->fetch_assoc()){
		$tableSameCategories[] = $row;
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
			<div id="nav">
				<!-- Main Nav -->
				<?php include 'mainNav.php' ?>
				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="#">Join Us</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="contact.php">Contacts</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
							</div>
						</div>
					</div>
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
			
			<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('./img/post-page.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="category.php"><?=$readPosts['category']?></a>
								<span class="post-date"><?=$readPosts['created_at']?></span>
							</div>
							<h1><?=$readPosts['title']?></h1>
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
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h3><?=$readPosts['title']?></h3>
								<p><?=$readPosts['description']?>.</p>
								
								</figure>
								<p><?=$readPosts['contents']?></p>
								<p><i>Tác giả: <?=$readPosts['author']?></i></p>
							</div>
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/author.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3>John Doe</h3>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<ul class="author-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						<!-- comments -->
						<div class="section-row">
							<div class="section-title">
								<h2>3 Comments</h2>
							</div>

							<div class="post-comments">
								<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4>John Doe</h4>
											<span class="time">March 27, 2018 at 8:00 am</span>
											<a href="#" class="reply">Reply</a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

										<!-- comment -->
										<div class="media">
											<div class="media-left">
												<img class="media-object" src="./img/avatar.png" alt="">
											</div>
											<div class="media-body">
												<div class="media-heading">
													<h4>John Doe</h4>
													<span class="time">March 27, 2018 at 8:00 am</span>
													<a href="#" class="reply">Reply</a>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</div>
										<!-- /comment -->
									</div>
								</div>
								<!-- /comment -->

								<!-- comment -->
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4>John Doe</h4>
											<span class="time">March 27, 2018 at 8:00 am</span>
											<a href="#" class="reply">Reply</a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<!-- /comment -->
							</div>
						</div>
						<!-- /comments -->

						<!-- reply -->
						<div class="section-row">
							<div class="section-title">
								<h2>Leave a reply</h2>
								<p>your email address will not be published. required fields are marked *</p>
							</div>
							<form class="post-reply">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span>Name *</span>
											<input class="input" type="text" name="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Email *</span>
											<input class="input" type="email" name="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Website</span>
											<input class="input" type="text" name="website">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" name="message" placeholder="Message"></textarea>
										</div>
										<button class="primary-button">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /reply -->
					</div>
					<!-- /Post content -->

					<!-- aside -->
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
								<h2>Bài viết liên quan</h2>
							</div>
							<?php foreach ($tableSameCategories as $sameCate) {
							?>			
							<div class="post post-widget">
								<a class="post-img" href="blog-post.php?id=<?=$sameCate['id']?>"><img src="./img/<?=$sameCate['thumbnail']?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php?id=<?=$sameCate['id']?>"><?=$sameCate['title']?></a></h3>
								</div>
							</div>
							<?php } ?>
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<?php foreach ($twoPosts as $twoPost) { ?>
							<div class="post post-thumb">
								<a class="post-img" href="blog-post.php?id=<?=$twoPost['id']?>"><img src="./img/<?=$twoPost['thumbnail']?>" alt=""width = 360px height = 216px></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="#"><?=$twoPost['category']?></a>
										<span class="post-date"><?=$twoPost['created_at']?></span>
									</div>
									<h3 class="post-title"><a href="blog-post.php?id=<?=$twoPost['id']?>"><?=$twoPost['title']?></a></h3>
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
									<li><a href="#">January 2018</a></li>
									<li><a href="#">Febuary 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
					<!-- /aside -->
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
