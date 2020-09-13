<html>
	<body>
		<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Source</th>
									<th>Destination</th>
									<th>Time</th>
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
										$db_fare = $row['fare'];

									?>

									<td><?php echo $row ['id'];?></td>
									<td><?php echo $row ['name'];?></td>
									<td><?php echo $row ['source'];?></td>
									<td><?php echo $row ['destination'];?></td>
									<td><?php echo $row ['time'];?></td>
									<td><?php echo $row ['fare'];?></td>

									<td style="text-align:center">

										<a rel="tooltip"  title="Delete" id="<?php echo $candidate_id; ?>" href="#delete_user<?php echo $candidate_id; ?>" data-target="#delete_user<?php echo $candidate_id?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
										<?php include ('delete_candidate_modal.php'); ?>
										<a rel="tooltip"  title="Edit" id="<?php echo $row['candidate_id'] ?>" href="#edit_candidate<?php echo $row['candidate_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	

									</td>

									
								</tr>

								<?php } ?>
							</tbody>
						</table>
	</body>
</html>