<?php
session_start();

$_SESSION['id']=null;
$_SESSION['username']=null;
$_SESSION['lastname']=null;
$_SESSION['email']=null;
$_SESSION['password']=null;
		
header("Location: ../index.php");
?>