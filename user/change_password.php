<?php include("../user/user_nav.php");?>
<?php include("../user/sidebar.php");?>

<html>
	<head><title>Online Ticket</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="asset/css/bootstrap.css">
		<style>
			.col{
				margin-left:150px;
				margin-top: 20px;
				background-color:aliceblue;
			}
		</style>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
				integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
				crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.js"></script>





	</head>
	<?php
	$conn=mysqli_connect("localhost","root","","bus");
	$quer="SELECT * FROM `register` WHERE `email`='{$_SESSION['email']}'";
	$run=mysqli_query($conn,$quer);
	while($row=mysqli_fetch_assoc($run))
	{
		$db_pwd=$row['password'];
	}
	if(isset($_POST['insert']))
	{
		$foldpw=$_POST['oldpwd'];
		$fnewpw=$_POST['newpwd'];
		if($foldpw==$db_pwd)
		{
			$query="UPDATE `register` SET `password`='{$fnewpw}' WHERE `email`='{$_SESSION['email']}'";
			if(mysqli_query($conn,$query))
			{
				echo'<script type="text/javascript"> alert("Password Changed Successfully") 
		window.location = "../user/change_password.php";
		</script>';

			}			
		}
		else
		{
			echo '<script type="text/javascript">alert("Old Password Not Matching")</script>';
		}
	}
	?>
	<body style ="background-color:aliceblue;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="col-xl-5">
						<div>
							<form method="post" action="../user/change_password.php">
								<h2>Change Password</h2><br>
								<div class="form-group">
									<label>Old Password</label>
									<input type="password" name="oldpwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Old Password">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Confirm Password</label>
									<input type="password" name="newpwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Password">
								</div>
								<button type="submit" name="insert" class="btn btn-primary">Submit</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>





	</body>

</html>