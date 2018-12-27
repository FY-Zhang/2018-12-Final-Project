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
		<title>Blog</title>
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
				<h1>Blog</h1>
			</div>
			<div class = "description"><a href = "Blog4.html" target = "_blank">
				<h2>队列——解密QQ号</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;新学期开始了，小哈是小哼的新同桌（小哈是个小美女哦~），小哼向小哈询问QQ号，小哈当然不会直接告诉小哼啦，原因嘛你懂的。所以小哈给了小哼一串加密过的数字，同时小哈也告诉了小哼解密规则。规则是这样的：首先将第1个数删除，紧接着将第2个数放到</p>
			</a></div>
			<div class = "description"><a href = "Blog3.html" target = "_blank">
				<h2>最常用的排序——快速排序</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;上一节的冒泡排序可以说是我们学习第一个真正的排序算法，并且解决了桶排序浪费空间的问题，但在算法的执行效率上却牺牲了很多，它的时间复杂度达到了O(N2)。假如我们的计算机每秒钟可以运行10亿次，那么对1亿个数进行排序，桶排序则只需要0.1秒，而冒泡排</p>
			</a></div>
			<div class = "description"><a href = "Blog2.html" target = "_blank">
				<h2>邻居好说话——冒泡排序</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;简化版的桶排序不仅仅有上一节所遗留的问题，更要命的是：它非常浪费空间！例如需要排序数的范围是0~2100000000之间，那你则需要申请2100000001个变量，也就是说要写成int a[2100000001]。因为我们需要用2100000001个“桶”来存储0~2100000000之间每一个数</p>
			</a></div>
			<div class = "description"><a href = "Blog1.html" target = "_blank">
				<h2>最快最简单的排序——桶排序</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;最快最简单的排序——桶排序　　在我们生活的这个世界中到处都是被排序过的。站队的时候会按照身高排序，考试的名次需要按照分数排序，网上购物的时候会按照价格排序，电子邮箱中的邮件按照时间排序……总之很多东西都需要排序，可以说排序是无处不在。现在我</p>
			</a></div>
			<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
		</div>
	</body>
</html>