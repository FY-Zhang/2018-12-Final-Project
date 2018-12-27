<?php 
/* 设置中国时间 */
date_default_timezone_set("Etc/GMT");
date_default_timezone_set("Etc/GMT+8");
date_default_timezone_set("Etc/GMT-8");
date_default_timezone_set('PRC');

session_start();
	if(isset($_GET['id'])) {
		$cover = $_GET['id'];
		$_SESSION['id'] = $cover;
	}
	else
		$cover = $_SESSION['id'];
	/* 连接数据库 */
	$conn = mysqli_connect("localhost","root","","Animation");
	$sql = "select Name,Type,Episodes,Country,Cover from Information where Cover like '%$cover%'";
	$animation = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($animation);
	if(isset($_POST['submit'])) {
		if(isset($_SESSION['user'])) {
			$name = $_SESSION['user'];
			$Name1 = $row['Name'];
			$Type = $row['Type'];
			$Episodes = $row['Episodes'];
			$Country = $row['Country'];
			$q = "delete from user where interest='$cover'";
			$result = mysqli_query($conn,$q);
			mysqli_close($conn);
			header("refresh: 0;url = MyFavorite.php");	/* 跳转网页 */
			exit;
		}
		else {
			header("refresh: 0;url = Login.php");	/* 跳转网页 */
			exit;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $row['Name'] ?></title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Information.css">
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
		<div id = "picture">
			<img src = "<?php echo $row['Cover'] ?>" height = "550px" width = "330px"><br/>
		</div>
		<div id = "information">
			<ul>
				<li>Name:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Name'] ?></li>
				<li>Type:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Type'] ?></li>
				<li>Episodes:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Episodes'] ?></li>
				<li>Country:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['Country'] ?></li>
			</ul>
		</div>
		<div id = "like">
			<form action = "ILikeIt.php" method = "post">
				<input type = "submit" name = "submit" value = "I do not like it" id = "submit">
			</form>
		</div>
		<!-- Footer -->
		<div id = "footer">
			&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
		</div>
	</body>
</html>