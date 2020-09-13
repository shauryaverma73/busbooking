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
				padding-top: 10px;
				padding-left: 100px;
				padding-right: 100px;
				padding-bottom: 150px;

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
			<h2>User Signup</h2>
		</div>

		<div class="container">
			<div class="fix">
				<form action="signup.php" method="post">
					<div class="form-group">
						<div class="form-group">
							<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
						</div>

						<div class="form-group">
							<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Lastname" required="true">
						</div>
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="true">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="true">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm Password</label>
						<input required="true" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
					</div>

					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>

			</div>
		</div>
		<?php

	$connection=mysqli_connect("localhost","root","","bus");

		if(isset($_POST['submit']))
		{
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$email = $_POST['email'];
			$pwd   = $_POST['password'];    

			$query= "INSERT INTO `register` (`id`, `username`, `lastname`, `email`, `password`) values ('DEFAULT', '$fname', '$lname', '$email', '$pwd')";

			mysqli_query($connection, $query);


		?>
		<script>
			alert("Registered Successfully");
		</script>


		<?php

			$connection -> close();
		} 

		?>




	</body>
</html>
