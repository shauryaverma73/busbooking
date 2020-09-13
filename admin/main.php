<?php
include"admin_nav.php";
include"sidebar.php";
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<style>
			.jumbotron{
				margin-left: 220px;
				background-color: aliceblue;
			}
		</style>
	</head>

	<body style="background-color:aliceblue;">
		<div class="jumbotron">
			<h1 class="display-4">Welcome <?php echo $_SESSION['username']?></h1>
			<p class="lead">Here You can Manage all data</p>
			<hr class="my-4">
			
		</div>

		<?php
	if(!isset($_SESSION['id']))
	{
		header("Location: ../index.php");
	}

		?>

	</body>
</html>