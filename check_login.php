<?php 
	include ("login.php");

	$error = "";
	session_start();

	if(isset($_POST['Login'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
			$error = "Username and password is invalid";
		}
		else{
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$conn = mysqli_connect("localhost", "root", "root", "cms");

			$query = mysqli_query($conn, "Select * from users where user_name = '$user' and password = '$pass'");
			$rows = mysqli_fetch_array($query);

			$_SESSION['login_user']= $rows['user_name']; 
			$_SESSION['login_password']= $rows['password']; 

			if($rows == 1){
				header("Location: blog.php");
			}
			else{
				$error = "Username and Password is Invalid";
			}
			mysqli_close($conn);
		}
	}
?>