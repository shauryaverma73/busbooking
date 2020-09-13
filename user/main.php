<?php
include"user_nav.php";
include"sidebar.php";
?>

<?php
if(!isset($_SESSION['id']))
{
	header("Location: ../index.php");
}
?>

<html>
	<head>
	<style>
			.jumbotron{
				margin-left: 220px;
				background-color: aliceblue;
			}
		</style>
	</head>
	<body style="background-color:aliceblue;">
		<div class="page-content-wrapper">
			<div class="container">
				<div class="jumbotron">
					<h2>Welcome : <?php echo $_SESSION['username'];?></h2>
					<p class="lead">Hello <?php echo $_SESSION['username'];?> here you can book bus tickets.</p>
  <hr class="my-4">
					
				</div>
			</div>
		</div>
	</body>
</html>

