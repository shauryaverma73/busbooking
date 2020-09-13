
<?php
if(!isset($_SESSION['id']))
{
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Online Ticket </title>
		<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
		<link rel="stylesheet" href="../asset/css/bootstrap.css">



		<style>
			.sidebar-container {
				position: absolute;
				width: 220px;
				height: 100%;
				left: 0;
				overflow-x: hidden;
				overflow-y: auto;
				background: #1a1a1a;
				color: #fff;
			}

			.content-container {
				padding-top: 20px;
			}

			.sidebar-logo {
				padding: 10px 15px 10px 30px;
				font-size: 20px;
				background-color: #158CBA;
			}

			.sidebar-navigation {
				padding: 0;
				margin: 0;
				list-style-type: none;
				position: relative;
			}

			.sidebar-navigation li {
				background-color: transparent;
				position: relative;
				display: inline-block;
				width: 100%;
				line-height: 20px;
			}

			.sidebar-navigation li a {
				padding: 10px 15px 10px 30px;
				display: block;
				color: #fff;
			}

			.sidebar-navigation li .fa {
				margin-right: 10px;
			}

			.sidebar-navigation li a:active,
			.sidebar-navigation li a:hover,
			.sidebar-navigation li a:focus {
				text-decoration: none;
				outline: none;
			}

			.sidebar-navigation li::before {
				background-color: #2574A9;
				position: relative;
				content: '';
				height: 100%;
				left: 0;
				top: 0;
				-webkit-transition: width 0.2s ease-in;
				transition: width 0.2s ease-in;
				width: 3px;
				z-index: -1;
			}

			.sidebar-navigation li:hover::before {
				width: 100%;
			}

			.sidebar-navigation .header {
				font-size: 12px;
				text-transform: uppercase;
				background-color: #007399;
				padding: 10px 15px 10px 30px;
			}

			.sidebar-navigation .header::before {
				background-color: transparent;
			}

			.content-container {
				padding-left: 220px;
			}</style>



	</head>
	<body>
		<div class="sidebar-container">

			<ul class="sidebar-navigation">
				<li class="header">Menu</li>
				<li>
					<a href="../admin/main.php">
						<i class="fa fa-tachometer" aria-hidden="true"></i> Home
					</a>
				</li>
				<li>
					<a href="../admin/addbus.php">
						<i class="fa fa-home" aria-hidden="true"></i> Add Bus
					</a>
				</li>

				<li>
					<a href="../admin/editbus.php">
						<i class="fa fa-tachometer" aria-hidden="true"></i> Manage Bus
					</a>
				</li>
				<li>
					<a href="../admin/bookings.php">
						<i class="fa fa-tachometer" aria-hidden="true"></i> Bookings
					</a>
				</li>
				
				<li>
					<a href="../admin/edituser.php">
						<i class="fa fa-cog" aria-hidden="true"></i> Manage Users
					</a>
				</li>
				<li>
					<a href="../admin/logout.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i> Logout
					</a>
				</li>
			</ul>
		</div>




	</body>
</html>