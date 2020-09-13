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
if(isset($_POST['deluser']))
{
	$did=$_POST['delid'];

	$query="DELETE FROM `register` WHERE `id`='$did'";

	mysqli_query($connection,$query);

	header("location: ../admin/edituser.php");

}


?>