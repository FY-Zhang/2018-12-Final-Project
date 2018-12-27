<?php 
/* 设置中国时间 */
date_default_timezone_set("Etc/GMT");
date_default_timezone_set("Etc/GMT+8");
date_default_timezone_set("Etc/GMT-8");
date_default_timezone_set('PRC');

session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Reviews</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Total.css">
		<link rel="stylesheet" type="text/css" href="Sidebar.css">
		<link rel="stylesheet" type="text/css" href="Topbar.css">
		<link rel="stylesheet" type="text/css" href="Article.css">
		<link rel="stylesheet" type="text/css" href="Comment.css">
	</head>
	<body>
		<!-- Topbar -->
		<div id = "Top">
			<div id = "Name">
				<ul>
					<li><a href = "HomePage.php">I-ACG</a></li>
				</ul>
			</div>
			<div id = "RowMenu">
				<ul>
					<li><a href = "Animation.php">Animation</a></li>
					<li><a href = "MyFavorite">My Favorite</a></li>
				</ul>
			</div>
			<div id = "Login">
				<ul>
				<?php
					if(isset($_SESSION['user'])) { ?>
						<li><a href = "Signout.php"><?php echo $_SESSION['user'] ?></a></li>
				<?php }
					else { ?>
						<li><a href = "Login.php">Log in</a></li>
						<li><a href = "Signup.php">Sign up</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- Sidebar -->
		<div id = "Left">
			<div id = "Myself">
				<img src = "../Images/Accelerator.jpg" class = "HeadSculpture" />
				<p>Ellis</p>
			</div>
			<hr/ size=1 color="rgb(46,51,68)" style="border:0 solid rgb(46,51,68)">
			<div id = "ColumnMenu">
				<ul>
					<li><a href = "About.php">ABOUT</a></li>
					<li><a href = "FAQ.php">FAQ</a></li>
					<li><a href = "Reviews.php">REVIEWS</a></li>
					<li><a href = "Contact.php">CONTACT</a></li>
					<li><a href = "Blog">BLOG</a></li>
				</ul>
			</div>
		</div>
		<div id = "Centre">
			<!-- Headline -->
			<div id = "header">
				<h1>Reviews</h1>
			</div>
			<div class = "Good">
				<img src = "../Images/Simeon.jpg" class = "Friends"/>
				<div class = "othersH">
					<p>Simeon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ: 2438185215</p>
				</div>
				<div class = "othersP">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;I really like this website! I can find all of the animations which I want.</p>
				</div>
			</div>
			<div class = "Good">
				<img src = "../Images/Carl.png" class = "Friends"/>
				<div class = "othersH">
					<p>Carl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ: 2500774248</p>
				</div>
				<div class = "othersP">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;What an amazing website it is! I can not use any adjective to description it! Just one word: EXCELLENT!!!</p>
				</div>
			</div>
			<div class = "Normal">
				<img src = "../Images/Nera.png" class = "Friends"/>
				<div class = "othersH">
					<p>Nera&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ: 1485820583</p>
				</div>
				<div class = "othersP">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;OK! OK! What I want to say is that this website is not as good as you think. Its animation collection is incomplete, it is very slow to open, and sometimes bugs occur.</p>
				</div>
			</div>
			<div class = "Good">
				<img src = "../Images/Hans.png" class = "Friends"/>
				<div class = "othersH">
					<p>Hans&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ: 1205452838</p>
				</div>
				<div class = "othersP">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;To be honest, I don't watch animation. This website was recommended to me by my friend. He showed me how to do this because he wanted to use it as a reference for his own website. I think the author of the site is very good, and the site is really beautiful.</p>
				</div>
			</div>
			<div class = "Normal">
				<img src = "../Images/Ryan.png" class = "Friends"/>
				<div class = "othersH">
					<p>Ryan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ: 1421396321</p>
				</div>
				<div class = "othersP">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;I don't like the author's avatar, so I don't like this website.</p>
				</div>
			</div>
			<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
		</div>
	</body>
</html>