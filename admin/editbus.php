<?php
include"../admin/admin_nav.php";
include"../admin/sidebar.php";
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
		<link rel="stylesheet" href="asset/css/bootstrap.css">

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
		<div class="container" style="position:relative; padding-left:150px;">
			<div class="page-content-wrapper">
				<div class="row">
					<div class="col ">
						<div class="panel-body">
							<div class="table-responsive"><br>
								<h2>Edit Bus Timings</h2>
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
											<th>Options</th>
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

												<button type="button" class="btn btn-primary editbtn" data-toggle="modal">
													Edit
												</button>	
												<button href="" type="button" class="btn btn-danger deletebus" data-toggle="modal">
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
		</div>


		<!--Modal for Edit Data-->
		<div class="modal fade" id="editbus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Bus Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="../admin/update_bus_query.php">
							<input type="hidden" name="id" id="id">
							<div class="form-group">
								<label for="exampleInputEmail1">Bus Name</label>
								<input type="text" name="bname" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bus Name">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Source</label>
								<input type="text" name="source" id="source" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Source">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Destination</label>
								<input type="text" name="destination" id="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Destination">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Time And Date</label>
								<input type="datetime-local" name="time" id="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Time and date">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Seats</label>
								<input type="text" name="seats" id="seats" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter seats">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Fare</label>
								<input type="text" name="fare" id="fare" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fare">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="updatedata">Save changes</button>
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







		<!--		Modal For DElete bus-->
		<div class="modal fade" id="dltbus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Bus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="../admin/delete_bus_query.php" method="post">

						<div class="modal-body">
							<input type="hidden" name="delid" id="delid">
							<h3>Are You Sure you want to delete bus??</h3>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger" name="delbus">Delete Bus</button>
							</div>
							</form>
						</div>
					</form>
			</div>
		</div>
		</div>





	<script>
		$(document).ready(function(){
			$('.deletebus').on('click',function(){
				$('#dltbus').modal('show');

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