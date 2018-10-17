<?php

class main{
	public function view_blog(){

		$conn = mysqli_connect("localhost", "root", "root", "cms");

		$query = mysqli_query($conn, "Select * from blog_content");
		$rows = mysqli_fetch_array($query);
		return $rows;	
	}

	public function create_blog(){
		header("Location: create_blog.php");
	}

	public function create_user(){
		header("Location: add_user.php");
	}
}
?>