<?php
require_once("connection.php");
$query="select * from bustiming";
$result=mysqli_query($db_handle,$query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Online Ticket </title>
		<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="asset/css/bootstrap.css">
		<style>
			.size{

				top: 50px;


			}

			.fix{
				width:100%;
				height:100%;
				background-color: aliceblue;
				padding: 70px;
			}
			.bliss{
				width:100%;
				height:30%;
				text-align: center;
				background-color: aliceblue;
				padding-top:60px;

			}

		</style>



	</head>
	<body>
		<?php include "./nav.php" ?>

		<div class="bliss">
			<h2>BUS TIMINGS</h2>
		</div>

		<div class="fix">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Source</th>
						<th scope="col">Destination</th>
						<th scope="col">Time</th>
						<th scope="col">Seats</th>
						<th scope="col">Fare</th>
					</tr>
				</thead>
				<tbody>

					<?php
	while($row=mysqli_fetch_assoc($result))
	{
					?>	
					<tr class="table-info">
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['source']; ?></td>
						<td><?php echo $row['destination']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['seats']; ?></td>
						<td><?php echo $row['fare']; ?></td>
					</tr>
					<?php	
	}
					?>




				</tbody>
			</table> 
		</div>




	</body>
</html>