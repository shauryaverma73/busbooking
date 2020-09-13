<?php session_start(); ?>

<?php
if(!isset($_SESSION['id']))
{
	header("Location: ../index.php");
}
?>

<?php

$connection=mysqli_connect("localhost","root","","bus");

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pwd=$_POST['password'];

	$email =mysqli_real_escape_string($connection,$email); 
	$pwd =mysqli_real_escape_string($connection,$pwd);

	$query = "SELECT * FROM admin WHERE email = '{$email}' ";
	$email_select_query = mysqli_query($connection,$query);

	if(!$email_select_query){
		die("error");
	}

	while($row=mysqli_fetch_array($email_select_query))
	{
		$db_id = $row['id'];
		$db_uname = $row['username'];
		$db_email = $row['email'];
		$db_pwd = $row['password'];

	}

	if($email !== $db_email && $pwd !== $db_pwd)
	{
		header("Location: ../admin/index.php");	
	}
	else if($email == $db_email && $pwd == $db_pwd)
	{
		$_SESSION['id']=$db_id;
		$_SESSION['username']=$db_uname;
		$_SESSION['email']=$db_email;
		$_SESSION['password']=$db_pwd;
		header("Location: ../admin/main.php");	
	}
	else
	{
		header("Location: ../admin/index.php");	
	}

}

?>





