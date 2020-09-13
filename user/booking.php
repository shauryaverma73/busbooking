<?php
include "../user/user_nav.php";
include "../user/sidebar.php";
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
				margin-left:150px;
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
	<body style="background-color:aliceblue;">
		<div class="container">
			<div class="page-content-wrapper">
				<div class="row">
					<div class="col ">
						<div class="panel-body">
							<div class="table-responsive"><br>
								<h2>Book Bus</h2>
								<br>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Source</th>
											<th>Destination</th>
											<th>Time</th>
											<th>Seats</th>
											<th>Fare</th>
											<th>Select</th>
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

												$db_id = $row['id'];
												$db_name = $row['name'];
												$db_source = $row['source'];
												$db_destination = $row['destination'];
												$db_time = $row['time'];
												$db_seats= $row['seats'];
												$db_fare = $row['fare'];

											?>

											<td><?php echo $row ['id'];?></td>
											<td><?php echo $row ['name'];?></td>
											<td><?php echo $row ['source'];?></td>
											<td><?php echo $row ['destination'];?></td>
											<td><?php echo $row ['time'];?></td>
											<td><?php echo $row ['seats'];?></td>
											<td><?php echo $row ['fare'];?></td>

											<td style="text-align:center">

												<button type="button" class="btn btn-success editbtn" data-toggle="modal">
													Select
												</button>	
											</td>
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

		<div class="modal fade" id="editbus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Book Bus</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="../user/booking_query.php">
							<input type="hidden" name="id" id="id">
<!--
							<input type="hidden" name="bname" id="name">
							<input type="hidden" name="source" id="source">
							<input type="hidden" name="destination" id="destination">
							<input type="hidden" name="time" id="time">
-->
							<div class="form-group">
								<label for="exampleInputEmail1">Bus Name</label>
								<input readonly type="text" name="bname" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bus Name">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Source</label>
								<input readonly type="text" name="source" id="source" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Source">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Destination</label>
								<input readonly type="text" name="destination" id="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Destination">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Time And Date</label>
								<input readonly type="text" name="time" id="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Time and date">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Seats</label>
								<input type="text" name="seats" id="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter seats">
							</div>
							<input type="hidden" name="actseat" id="seats">
							<input type="hidden" name="fare" id="fare">
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="bookticket">Book Ticket</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>




		<script>
			$(document).ready(function(){
				$('.editbtn').on('click',function(){
					$('#editbus').modal('show');

					$tr = $(this).closest('tr');

					var data = $tr.children("td").map(function(){
						return $(this).text();
					}).get();

					console.log(data);
					$('#id').val(data[0]);
					$('#name').val(data[1]);
					$('#source').val(data[2]);
					$('#destination').val(data[3]);
					$('#time').val(data[4]);
					$('#seats').val(data[5]);
					$('#fare').val(data[6]);


				});

			});

		</script>



	</body>
</html>