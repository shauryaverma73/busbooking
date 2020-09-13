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
	$u_uname=$_POST['uname'];
	$u_lname=$_POST['lname'];
	$u_email=$_POST['email'];
	$u_pwd=$_POST['password'];
	
	
	$query="UPDATE `register` SET `id`='$u_id',`username`='$u_uname',`lastname`='$u_lname',`email`='$u_email',`password`='$u_pwd' WHERE `id`='$u_id' ";
	
	if($run=mysqli_query($connection,$query))
	{
		echo '<script> alert("Data Updated"); </script>';
		header("location: ../admin/edituser.php");
	}
	else
	{
		echo '<script> alert("Data Not Updated"); </script>';
		header("location: ../index.php");
	}
	
}

?>