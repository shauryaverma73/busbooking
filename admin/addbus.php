<?php
include "../admin/admin_nav.php";
include "../admin/sidebar.php";
//session_start();
?>

<?php
if(!isset($_SESSION['id']))
{
	header("Location: ../index.php");
}

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="asset/css/bootstrap.css">
		<style>
			.col{
				margin-left:250px;
				margin-top:25px;
				background-color:aliceblue;
			}
		</style>
	</head>
	<body style="background-color:aliceblue;">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="col-xl-5">
						<div>
							<form method="post" action="../admin/addbus.php">
								<h2>Add Bus Details</h2>
								<div class="form-group">
									<label for="exampleInputEmail1">Bus Name</label>
									<input type="text" name="busname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bus Name">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Source</label>
									<input type="text" name="source" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Source">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Destination</label>
									<input type="text" name="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Destination">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Time And Date</label>
									<input type="datetime-local" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Time and date">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Seats</label>
									<input type="text" name="seats" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Seats">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Fare</label>
									<input type="text" name="fare" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fare">
								</div>

								<button type="submit" name="insert" class="btn btn-primary">Submit</button>
							</form>
						</div>

					</div>
				</div>
			</div>

			<?php
			$connection=mysqli_connect("localhost","root","","bus");
			if(isset($_POST['insert']))
			{
				$bname=$_POST['busname'];
				$bsource=$_POST['source'];
				$bdest=$_POST['destination'];
				$btime=$_POST['time'];
				$bseats=$_POST['seats'];
				$bfare=$_POST['fare'];
				$query="INSERT INTO `bustiming`(`id`, `name`, `source`, `destination`, `time`, `seats`,`fare`) VALUES (DEFAULT,'$bname','$bsource','$bdest','$btime','$bseats','$bfare')";
				mysqli_query($connection,$query);


			}






			?>





			</body>
		</html>