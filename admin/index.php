<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Online Ticket </title>
		<link rel="stylesheet" href="../asset/css/bootstrap.css">
		<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
		<style>
			.fix{
				width:100%;
				height:100%;
				background-color: aliceblue;
				padding-top: 20px;
				padding-bottom:200px;
				padding-left: 100px;
				padding-right: 100px;
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
			<h2>Admin Login</h2>
		</div>

		<div class="container">
			<div class="fix">
				<form action="../admin/loginquery.php" method="post">
					<fieldset>


						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" placeholder="Enter email" name="email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password" required="required" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary" name="login">Submit</button>
					</fieldset>
				</form>

			</div>
		</div>


	</body>
</html>