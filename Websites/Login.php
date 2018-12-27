<?php 
/* 设置中国时间 */
date_default_timezone_set("Etc/GMT");
date_default_timezone_set("Etc/GMT+8");
date_default_timezone_set("Etc/GMT-8");
date_default_timezone_set('PRC');

session_start();
	/* 连接数据库 */
	$conn = mysqli_connect("localhost","root","","Animation");
	$Error = "";
	if(!empty($_POST['name']) and !empty($_POST['password'])) {
		$name = $_POST['name'];
		$password = $_POST['password'];
		$sql = "select username,password from user where username='$name' and password='$password'";
		$result = mysqli_query($conn,$sql);
		$rows = mysqli_num_rows($result);	/* 返回数据数目 */
		if($rows) {
			$_SESSION['user'] = $name;
			header("refresh: 0;url = HomePage.php");	/* 成功后跳转网页 */
			exit;
		}
		else
			$Error = "Wrong user name or password!";
		mysqli_close($conn);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="Login.css">
	</head>
	<body>
		<h2>Log In</h2>
		<div id = "Login">
			<form action = "Login.php" method = "post">
				<p>Username<input type = "text" name = "name" class = "input"></p>
				<p>Password<input type = "password" name = "password" class = "input"></p><p id = "Error"><?php echo $Error ?></p>
				<input type = "submit" name = "submit" value = "Log in" id = "submit">
			</form>
			<p>No account? <a href = "Signup.php">Sign up here!</a></p>
		</div>
		<!-- Footer -->
			<div id = "footer">
				&copy;&nbsp;2018.12.10 10:24:00-<?php echo date("Y.m.d H:i:s") ?> Copyright&nbsp;Ellis&nbsp;||&nbsp;<a href = "Sitemap.php">Sitemap</a>
			</div>
	</body>
</html>