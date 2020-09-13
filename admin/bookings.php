<?php
include "admin_nav.php";
include "sidebar.php";
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		</title>
		<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="asset/css/bootstrap.css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
				integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.js"></script>

	</head>

	<body style="background-color:aliceblue;">
		<body>
			<div class="container" style="position:relative; padding-left:150px;">
				<div class="row">
					<div class="col ">
						<div class="panel-body">
							<div class="table-responsive"><br>
								<h2>Bookings</h2>
								<br>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Booked By</th>
											<th>Email</th>
											<th>BUS Name</th>
											<th>Source</th>
											<th>Destination</th>
											<th>Time</th>
											<th>Seats</th>
											<th>Fare</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php 
											$connection=mysqli_connect("localhost","root","","bus");
											$query = "SELECT * FROM bookings";
											$result = mysqli_query($connection,$query);
											while($row = mysqli_fetch_assoc($result))
											{

												$db_id = $row['id'];
												$db_name = $row['booked_by'];
												$db_source = $row['booked_by_email'];
												$db_destination = $row['bus_name'];
												$db_time = $row['seats'];

											?>

											<td><?php echo $row ['id'];?></td>
											<td><?php echo $row ['booked_by'];?></td>
											<td><?php echo $row ['booked_by_email'];?></td>
											<td><?php echo $row ['bus_name'];?></td>
											<td><?php echo $row ['source'];?></td>
											<td><?php echo $row ['destination'];?></td>
											<td><?php echo $row ['time'];?></td>
											<td><?php echo $row ['seats'];?></td>
											<td><?php echo $row ['fare'];?></td>

											<td style="text-align:center">	
													<button onclick="myFunction()" type="button" class="btn btn-success /*deluser*/" data-toggle="modal">
													Print
												</button>
												<script>
													function myFunction() {
														window.print();
													}
												</script>
												<button href="" type="button" class="btn btn-danger delbook" data-toggle="modal">
													Delete
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
		</body>



		<!--		Modal For DElete bus-->
		<div class="modal fade" id="deletebook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Booking</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="../admin/delete_booking.php" method="post">
						<div class="modal-body">
							<input type="hidden" name="delid" id="delid">
							<h3>Are You Sure you want to delete Booking??</h3>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger" name="delbook">Delete Booking</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>





		<script>
			$(document).ready(function(){
				$('.delbook').on('click',function(){
					$('#deletebook').modal('show');

					$tr = $(this).closest('tr');

					var data = $tr.children("td").map(function(){
						return $(this).text();
					}).get();

					console.log(data);
					$('#delid').val(data[0]);

				});

			});

		</script>




	</body>
</html>