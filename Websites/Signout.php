<?php
	session_start();
	unset($_SESSION['user']);
	header("refresh: 0;url = HomePage.php");	/* 成功后跳转网页 */
	exit;
?>