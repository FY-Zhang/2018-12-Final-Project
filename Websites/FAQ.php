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
		<title>FAQ</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Total.css">
		<link rel="stylesheet" type="text/css" href="Sidebar.css">
		<link rel="stylesheet" type="text/css" href="Topbar.css">
		<link rel="stylesheet" type="text/css" href="Article.css">
		<link rel="stylesheet" type="text/css" href="HomePage.css">
		<script src = "submit.js"></script>
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
				<h1>Frequently Asked Questions</h1>
			</div>
			<div class = "description">
				<h2>The most common question</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "Questions">Q:</span> Why you created the company and set up the website?</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "Answers">A:</span> Because...I like animation, and I like programming! ∠( ᐛ 」∠)＿</p>
				<br/>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "Questions">Q:</span> Are you ready to continue to do the website?</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "Answers">A:</span> Sure! I will continue, and I will add new functions to the website.</p>
				<br/>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "Questions">Q:</span> Can I be friends with you?</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;<span class = "Answers">A:</span> Of course, that is my pleasure! You can go to "Contact" page to find my contact information.</p>
			</div>
			<div class = "description">
				<h2>I have questions</h2>
				<form>
					Please input your questions:<br/>
					<textarea rows="5" cols="100" name = "question"></textarea><br/>
				</form>
					<input type = "button" onclick = "submit()" value = "Submit"/>
			</div>
			<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
		</div>
	</body>
</html>