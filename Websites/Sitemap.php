<?php 
/* 设置中国时间 */
date_default_timezone_set("Etc/GMT");
date_default_timezone_set("Etc/GMT+8");
date_default_timezone_set("Etc/GMT-8");
date_default_timezone_set('PRC');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sitemap</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Sitemap.css">
	</head>
	<body>
		<h2>Sitemap</h2>
		<div id = "List">
			<ul>
				<li><a href = "HomePage.php">Home&nbsp;&nbsp;Page</a></li>
				<li><a href = "About.php">About</a></li>
				<li><a href = "FAQ.php">Frequently&nbsp;&nbsp;Asked&nbsp;&nbsp;Questions</a></li>
				<li><a href = "Reviews.php">Reviews</a></li>
				<li><a href = "Contact.php">Contact</a></li>
				<li><a href = "Blog.php">Blog</a></li>
				<ul>
					<li><a href = "Blog1.html">Blog1：最快最简单的排序——桶排序</a></li>
					<li><a href = "Blog2.html">Blog2：邻居好说话——冒泡排序</a></li>
					<li><a href = "Blog3.html">Blog3：最常用的排序——快速排序</a></li>
					<li><a href = "Blog4.html">Blog4：队列——解密QQ号</a></li>
				</ul>
				<li><a href = "Animation.php">Animation</a></li>
				<li><a href = "MyFavorite.php">My&nbsp;&nbsp;Favorite</a></li>
				<li><a href = "Login.php">Log&nbsp;&nbsp;in</a></li>
				<li><a href = "Signup.php">Sign&nbsp;&nbsp;up</a></li>
			</ul>
		</div>
		<!-- Footer -->
		<div id = "footer">
			&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
		</div>
	</body>
</html>