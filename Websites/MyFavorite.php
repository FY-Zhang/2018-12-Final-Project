<?php 
/* 设置中国时间 */
date_default_timezone_set("Etc/GMT");
date_default_timezone_set("Etc/GMT+8");
date_default_timezone_set("Etc/GMT-8");
date_default_timezone_set('PRC');

session_start();
	$username = $_SESSION['user'];
	/* 页面切换 */
	define("PAGE_SIZE",15);
	$start1 = 0;
	$start = 0;
	if(isset($_GET["start"]) and $_GET["start"] >= 0)
		$start = $_GET["start"];
	$end = $start + PAGE_SIZE - 1;
	/* 连接数据库 */
	$conn = mysqli_connect("localhost","root","","Animation");
	$country = "All";
	$type = 0;
	setcookie("country",$country);
	setcookie("type",$type);
	if($start == 0 and isset($_POST['Country'])) {
		$country = $_POST['Country'];
		$type = $_POST['Type'];
		setcookie("country",$_POST['Country']);
		setcookie("type",$_POST['Type']);
	}
	elseif($start != 0) {
		$country = $_COOKIE["country"];
		$type = $_COOKIE["type"];
	}
	/* 读取数据 */
	if($country == "All" and $type != 0) {
		if($type == 12)
			$sql1 = "select distinct Name,Type,Episodes,Country,interest from user where Episodes<18 and username='$username' and password=''";
		else
			$sql1 = "select distinct Name,Type,Episodes,Country,interest from user where Episodes>18 and username='$username' and password=''";
	}
	elseif($country != "All" and $type == 0)
		$sql1 = "select distinct Name,Type,Episodes,Country,interest from user where Country='$country' and username='$username' and password=''";
	elseif($country == "All" and $type == 0)
		$sql1 = "select distinct Name,Type,Episodes,Country,interest from user where username='$username' and password=''";
	else {
		if($type == 12)
			$sql1 = "select distinct Name,Type,Episodes,Country,interest from user where Country='$country' and Episodes<18 and username='$username' and password=''";
		else
			$sql1 = "select distinct Name,Type,Episodes,Country,interest from user where Country='$country' and Episodes>18 and username='$username' and password=''";
	}
	$animation = mysqli_query($conn,$sql1);
	$rubbish1 = mysqli_query($conn,$sql1);
	/* 统计有多少条数据 */
	if($start == 0) {
		for($j = 0;$row1 = mysqli_fetch_assoc($rubbish1);$j++);
		$num1 = $j;
		setcookie("num",$num1);
	}
	else
		$num1 = $_COOKIE['num'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MyFavorite</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="WebTopbar.css">
		<link rel="stylesheet" type="text/css" href="Animation.css">
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
					else {
						header("refresh: 0;url = Login.php");	/* 跳转网页 */
						exit;
					} ?>
				</ul>
			</div>
		</div>
		<!--Row Picture-->
		<div id = "RowPicture">
			<img src = "../Images/Background1.png" height = "180px" width = "1380px">
		</div>
		<!-- Title -->
		<div id = "header">
			<h2>MyFavorite</h2>
		</div>
		<!-- Select -->
		<div id = "Select">
			<form action = "MyFavorite.php" method = "post">
				<ul>
					<li>Filter</li>
					<li>
						<select name = "Country">
							<option value="All">--Country--</option>
							<option value="日本">Japan</option>
							<option value="中国">China</option>
						</select>
					</li>
					<li>
						<select name = "Type">
							<option value=0>--Type--</option>
							<option value=24>Half A Year</option>
							<option value=12>Quarter A Year</option>
						</select>
					</li>
					<li>
						<input type = "submit" value = "GO"/>
					</li>
				</ul>
			</form>
		</div>
		<!-- Data -->
		<?php
			for($i = 1;$i < $start;$i++)
				$row = mysqli_fetch_assoc($animation);
			for($i = $start;$i <= $end and $row2 = mysqli_fetch_assoc($animation);$i++) { ?>
				<div id = "each"><a href = "ILikeIt.php?id=<?php echo $row2['interest'] ?>">
				<img src = "<?php echo $row2['interest'] ?>" height = "300px" width = "210px"><br/>
				<?php
					$name2 = $row2['Name'] . "&nbsp;&nbsp;" . $row2['Type'];
				?><p><?php echo $name2 ?></p><br/>
				</a></div>
			<?php }
				$k = $num1 / 15;
				if($num1 % 15 != 0)
					$k++;
			?>
				<div id = "Page">
			<?php
				for($l = 1;$l <= $k;$l++) { ?>
				<a href = "MyFavorite.php?start=<?php echo $start1 + ($l - 1) * PAGE_SIZE + 1 ?>"><?php echo $l ?></a>
			<?php } ?>
			</div>
		<!-- Footer -->
		<div id = "footer">
			&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
		</div>
	</body>
</html>