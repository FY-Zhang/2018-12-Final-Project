<?php 
/* 设置中国时间 */
date_default_timezone_set("Etc/GMT");
date_default_timezone_set("Etc/GMT+8");
date_default_timezone_set("Etc/GMT-8");
date_default_timezone_set('PRC');
	/* 连接数据库 */
	$conn = mysqli_connect("localhost","root","","Animation");
	$formatName = "";
	$formatPassword = "";
	$formatCheck = "";
	$OK = "";
	if(isset($_POST['submit'])) {
		/* 判断是否符合格式要求 */
		if(empty($_POST['name']))
			$formatName = "Please enter a username.";
		else
			$name = $_POST['name'];
		if(empty($_POST['password']))
			$formatPassword = "Please enter a password.";
		else
			$password = $_POST['password'];
		if(empty($_POST['check']))
			$formatCheck = "You must agree to the terms and privacy policy to register.";
		/* 向数据库中插入值 */
		if(!empty($_POST['name']) and !empty($_POST['password'] and !empty($_POST['check']))) {
			$q = "insert into user(username,password) values ('$name','$password')";
			$result = mysqli_query($conn,$q);
			mysqli_close($conn);
			$OK = "You have created an account aucceed!";
			header("refresh: 0;url = Login.php");	/* 成功后跳转网页 */
			exit;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign up</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Signup.css">
	</head>
	<body>3
		<h2>Sign Up</h2>
		<div id = "Signup">
			<form action = "Signup.php" method = "post">
				<p>Username<input type = "text" name = "name" class = "input"><span class = "warning"><?php echo $formatName ?></span></p>
				<p>Password<input type = "password" name = "password" class = "input"><span class = "warning"><?php echo $formatPassword ?></span></p>
				<input type = "checkbox" name = "check"><span id = "check">I agree to the <a href = "TAC.html">Terms and Conditions</a> and the <a href = "PP.html">Privacy Policy</a></span><span class = "warning"><?php echo '<br/>' . $formatCheck ?></span><br/>
				<input type = "submit" name = "submit" value = "Sign up" id = "submit">
			</form>
			<p id = "OK"><?php echo $OK ?></p>
		</div>
		<div>
		<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
	</body>
</html>