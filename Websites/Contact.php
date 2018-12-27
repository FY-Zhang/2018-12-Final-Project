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
		<title>Contact</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Total.css">
		<link rel="stylesheet" type="text/css" href="Sidebar.css">
		<link rel="stylesheet" type="text/css" href="Topbar.css">
		<link rel="stylesheet" type="text/css" href="Article.css">
		<link rel="stylesheet" type="text/css" href="HomePage.css">
		<link rel="stylesheet" type="text/css" href="Map.css">
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=zOhV9xertGmzxyxHN4YzptKAFUHrrrks"></script>
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
				<h1>Contact</h1>
			</div>
			<div class = "description">
				<h2>NAP information</h2>
				<ul>
					<li>Name: Ellis</li>
					<li>Address: Zibo, Shandong, China</li>
					<li>Phone number: 17852030214</li>
					<li>E-mail: 457591198@qq.com</li>
				</ul>
			</div>
			<div id = "map">
				<h2>Where I live</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;You can come here to find me.</p>
				<div id="allmap"></div>
			</div>
			<script type="text/javascript">
				// 百度地图API功能
				var map = new BMap.Map("allmap");
				var point = new BMap.Point(118.005533,36.817135);
				map.centerAndZoom(point, 17);
				var marker = new BMap.Marker(point);	// 创建标注
				map.addOverlay(marker);		// 将标注添加到地图中
				marker.setAnimation(BMAP_ANIMATION_BOUNCE);	//跳动的动画
			</script>
			<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
		</div>
	</body>
</html>