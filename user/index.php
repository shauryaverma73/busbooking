<!DOCTYPE html>
<html>
	<head>
		<title> Online Ticket </title>
		<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="../asset/css/bootstrap.css">

		<style>
			.fix{
				width:100%;
				height:100%;
				background-color: aliceblue;
				padding-left: 100px;
				padding-right:100px;
				padding-top:20px;
				padding-bottom: 200px;
			}
			.bliss{
				width:100%;
				height:50%;
				text-align: center;
				background-color: aliceblue;
				padding-top:50px;
				padding-bottom: 1px;
				padding:50px;

			}
		</style>



	</head>
	<body style="background-color:aliceblue;">
		<?php include "../nav.php" ?>



		<div class="bliss">
			<h2>User Login</h2>
		</div>



		<div class="container">
			<div class="fix">
				<form action="../user/loginquery.php" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary" name="login">Submit</button>
				</form>

			</div>
		</div>


	</body>
</html>