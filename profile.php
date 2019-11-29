<?php
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");


if(isset($_POST['post'])){
	$uploadOk = 1;
	$imageName = $_FILES['FileToUpload']['name'];
	$errorMessage = "";
	if($imageName != "")
	{
		$targetDir = "assets/images/posts";
		$imageName = $targetDir . uniqid() . basename($imageName);
		$imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);
		if($_FILES['FileToUpload']['size']> 100000000)
		{
			$errorMessage = "sorry your file is to large";
			$uploadOk = 0;
		}
		if(strtolower($imageFileType) !="jpeg" && strtolower($imageFileType) != "png" && strtolower($imageFileType)!= "jpg" ){
		 $errorMessage = "sorry only jpeg";
			$uploadOk = 0;
	}
	if($uploadOk)
	{
		if(move_uploaded_file($_FILES['FileToUpload']['tmp_name'],$imageName))
		{
		}
		else
		{
			$uploadOk = 0;
		}
	}
	}
	if($uploadOk)
	{
		$post = new Post($con, $userLoggedIn);
		$post->submitPost($_POST['post_text'], 'none',$imageName);
	}
	else {
		echo "<div style = 'text-align:center;' class = 'alert alert-error'>
		$errorMessage</div>";
	}

	
}


 ?>













	<div class="user_details column">
	 <img src="<?php echo $user['profile_pic']; ?>">

		<div class="user_details_left_right">
			<?php
			echo $user['first_name'] . " " . $user['last_name'];

			 ?>
			<br>
			<?php echo "Posts: " . $user['num_posts']. "<br>";
			echo "Likes: " . $user['num_likes'];

			?>
		</div>

	</div>

	<div class="main_column column">
		<form class="post_form" action="profile.php" method="POST" enctype = "multipart/form-data">
		    <input type ="file" name = "FileToUpload" id = "FileToUpload">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>

		</form>

				<?php

			$post = new Post($con, $userLoggedIn);
			$post->loadPostsFriends();

				?>


	</div>




	</div>
</body>
</html>
