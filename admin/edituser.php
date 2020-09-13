<?php
include "admin_nav.php";
include "sidebar.php";
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
								<h2>Edit User Details</h2>
								<br>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Username</th>
											<th>Lastname</th>
											<th>Email</th>
											<th>Password</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php 
											$connection=mysqli_connect("localhost","root","","bus");
											$query = "SELECT * FROM register";
											$result = mysqli_query($connection,$query);
											while($row = mysqli_fetch_assoc($result))
											{

												$db_id = $row['id'];
												$db_name = $row['username'];
												$db_source = $row['lastname'];
												$db_destination = $row['email'];
												$db_time = $row['password'];

											?>

											<td><?php echo $row ['id'];?></td>
											<td><?php echo $row ['username'];?></td>
											<td><?php echo $row ['lastname'];?></td>
											<td><?php echo $row ['email'];?></td>
											<td><?php echo $row ['password'];?></td>

											<td style="text-align:center">

												<button type="button" class="btn btn-primary editbtn" data-toggle="modal">
													Edit
												</button>	
												<button href="" type="button" class="btn btn-danger deluser" data-toggle="modal">
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

			<!--Modal for Edit Data-->
			<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit User Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="../admin/edit_user_query.php">
								<input type="hidden" name="id" id="id">
								<div class="form-group">
									<label for="exampleInputEmail1">Username</label>
									<input type="text" name="uname" id="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Lastname</label>
									<input type="text" name="lname" id="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Source">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<input type="text" name="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Destination">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="text" name="password" id="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Time and date">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-success" name="updatedata">Save changes</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>




			<script>
				$(document).ready(function(){
					$('.editbtn').on('click',function(){
						$('#edituser').modal('show');

						$tr = $(this).closest('tr');

						var data = $tr.children("td").map(function(){
							return $(this).text();
						}).get();

						console.log(data);
						$('#id').val(data[0]);
						$('#uname').val(data[1]);
						$('#lname').val(data[2]);
						$('#email').val(data[3]);
						$('#password').val(data[4]);


					});

				});

			</script>







			<!--		Modal For DElete bus-->
			<div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="../admin/delete_user_query.php" method="post">

							<div class="modal-body">
								<input type="hidden" name="delid" id="delid">
								<h3>Are You Sure you want to delete User??</h3>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-danger" name="deluser">Delete User</button>
								</div>
								</form>
							</div>
						</form>
				</div>
			</div>
			</div>





		<script>
			$(document).ready(function(){
				$('.deluser').on('click',function(){
					$('#deleteuser').modal('show');

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