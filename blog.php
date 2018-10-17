<?php
	include "main.php";

?>

<html>
<title></title>
<style>
.blog-content{
	margin: 0 auto;
	width: 900px;
	padding: 1em;
	border: 1px solid #CCC;
	border-radius: 1em;
}
.card {
	background-color: #ccc;
	padding: 20px;
	margin-top: 20px;
}
</style>
<body>
	<div class="blog">
		<div class = "blog-menu">
			<button type="button"> Add user </button>
			<button type="button"> Create post </button>
			<button type="button" style = "float: right; "> Logout </button>
		</div>
		<?php
			$blog = new main();
			$data = $blog->view_blog();
	 	?>
		<div class = "card blog-content">
			<h2 align = "center"><?= $data['title'] ?></h2>
			<div>
				<p><?= $data['content'] ?></p>
			</div>
		</div>
	</div>
</body>
</html>