<?php
session_start();
?>
<?php
if(!isset($_SESSION['id']))
{
	header("Location: ../index.php");
}

?>

<?php
$connection=mysqli_connect("localhost","root","","bus");
if(isset($_POST['updatedata']))
{
	$u_id=$_POST['id'];
	$u_name=$_POST['bname'];
	$u_src=$_POST['source'];
	$u_dstn=$_POST['destination'];
	$u_time=$_POST['time'];
	$u_seats=$_POST['seats'];
	$u_fare=$_POST['fare'];
	
	$query="UPDATE `bustiming` SET `id`='$u_id',`name`='$u_name',`source`='$u_src',`destination`='$u_dstn',`time`='$u_time',`seats`=$u_seats,`fare`='$u_fare' WHERE `id`='$u_id' ";
	
	if($run=mysqli_query($connection,$query))
	{
		echo '<script> alert("Data Updated"); </script>';
		header("location: ../admin/editbus.php");
	}
	else
	{
		echo '<script> alert("Data Not Updated"); </script>';
		header("location: ../admin/editbus.php");
	}
	
}

?>