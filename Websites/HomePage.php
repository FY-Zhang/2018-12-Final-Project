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
		<title>Home Page</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Total.css">
		<link rel="stylesheet" type="text/css" href="Sidebar.css">
		<link rel="stylesheet" type="text/css" href="Topbar.css">
		<link rel="stylesheet" type="text/css" href="Article.css">
		<link rel="stylesheet" type="text/css" href="HomePage.css">
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
			<div id = "Myself"><a href = "Error.html">
				<img src = "../Images/Accelerator.jpg" class = "HeadSculpture" /></a>
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
				<h1>Home Page</h1>
			</div>
			<div id = "introduction">
				<img src = "../Images/Accelerator.jpg" class = "HeadSculpture" id = "image"/>
				<h2>Hello, this is Ellis!</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Welcome to my website! I hope you can have a good time here. </p>
			</div>
			<div class = "description">
				<h2>Who are we?</h2>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;We are I-ACG. We provide animation information.
				</p>
			</div>
			<div class = "description">
				<h2>What can you do?</h2>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;As a user, you can view all of animation, and you can also log in your account to collect your favorite animations.
				</p>
			</div>
			<div class = "description">
				<h2>What can we do?</h2>
				<ul>
					<li>We provide the information of animation.</li>
					<li>We provide you an account to collect your favorite animations.</li>
				</ul>
			</div> 
			<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
		</div>
	</body>
</html>