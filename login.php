<?php
	require("check_login.php");
?>
<html>
<title> Login </title>
<style>
.login{
	width: 360px;
	margin: 50px auto;
	border: 2px solid #ccc;
	padding: 10px 40px 25px;
	margin-top: 70px;
}

input[type=text], input[type=password]{
	width: 99%;
	margin-top: 8px;
	padding: 10px;
	border: 1px solid #ccc;
	font-size: 16px;
}

input[type=submit]{
	background-color: #009;
	color: #fff;
	border: 2px solid #06F;
	padding: 10px;
	font-size: 20px;
	cursor: pointer;
}
</style>
<body>
	<div class="login">
	<h2 align="center">Login</h2>
	<form name="login_form" id="login_form" method="post" action="check_login.php">
        <input type = "text" placeholder = "Username" id="user" name="user"><br/><br/>
        <input type = "password" placeholder = "Password" id="pass" name="pass"><br/><br/>
        <input type = "submit" name = "Login" value = "Login">
        <span><?php echo $error; ?></span>
	</form>
</body>
</html>