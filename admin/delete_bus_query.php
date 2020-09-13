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
if(isset($_POST['delbus']))
{
	$did=$_POST['delid'];

	$query="DELETE FROM `bustiming` WHERE `id`='$did'";

	mysqli_query($connection,$query);

	header("location: ../admin/editbus.php");

}


?>