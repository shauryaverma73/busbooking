<?php
require"../user/user_nav.php";
require"../user/sidebar.php";
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
		<title>Timings</title>
	</head>
	<body style="background-color:aliceblue;">
		<div class="container" style="position:relative; padding-left:150px;">
			<div class="page-content-wrapper">
				<div class="row">
					<div class="col ">
						<div class="panel-body">
							<div class="table-responsive"><br>
								<h2>Bus Timings</h2>
								<br>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Source</th>
											<th>Destination</th>
											<th>Date & Time</th>
											<th>Seats</th>
											<th>Fare</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php 
											$connection=mysqli_connect("localhost","root","","bus");
											$query = "SELECT * FROM bustiming";
											$result = mysqli_query($connection,$query);
											while($row = mysqli_fetch_assoc($result))
											{
											?>

											<td><?php echo $row ['id'];?></td>
											<td><?php echo $row ['name'];?></td>
											<td><?php echo $row ['source'];?></td>
											<td><?php echo $row ['destination'];?></td>
											<td><?php echo $row ['time'];?></td>
											<td><?php echo $row ['seats'];?></td>
											<td><?php echo $row ['fare'];?></td>

										</tr>

										<?php } ?>
									</tbody>
								</table>
							</div>
							<!-- /.table-responsive -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>