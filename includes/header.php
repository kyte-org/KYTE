<?php
require 'config/config.php';


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: index.php");
}

?>

<html>
<head>
	<title>Welcome to KYTE</title>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/jquery.jcrop.js"></script>
	<script src="assets/js/jcrop_bits.js"></script>




	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/jquery.Jcrop.css" type="text/css">

</head>
<body>

	<div class="top_bar">

		<div class="logo">
			<img src="assets/images/kyte.png"  height="38px" width="67px">
		</div>

		<nav>
			<a href="profile.php">
				<?php echo $user['first_name']; ?>
			</a>
			<a href="profile.php">
				<i class="fa fa-home fa-lg"></i>
			</a>
			<a href="profile.php">
				<i class="fa fa-envelope fa-lg"></i>
			</a>
			<a href="profile.php">
				<i class="fa fa-bell fa-lg"></i>
			</a>
			<a href="settings.php">
				<i class="fa fa-cog fa-lg"></i>
			</a>
			<a href="includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg"></i>
			</a>



		</nav>

	</div>


	<div class="wrapper">
