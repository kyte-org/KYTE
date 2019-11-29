<?php

if(isset($_POST['login_button'])) {

  $enroll = $_POST['log_enroll'];
	$_SESSION['log_enroll'] = $enroll; //Store email into session variable
	$password = md5($_POST['log_password']); //Get password

	$check_database_query = mysqli_query($con, "SELECT * FROM users WHERE username='$enroll' AND password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$username = $row['username'];

		$user_closed_query = mysqli_query($con, "SELECT * FROM users WHERE username='$enroll' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query) == 1) {
			$reopen_account = mysqli_query($con, "UPDATE users SET user_closed='no' WHERE username='$enroll'");
		}

		$_SESSION['username'] = $username;
		header("Location: profile.php");
		exit();
	}
	else {
		array_push($error_array, "Username or password was incorrect<br>");
	}


}

?>
