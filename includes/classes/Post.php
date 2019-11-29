<style>
.post_form {
 width: 100%;
}

.post_form textarea {
 width: 81%;
 height: 60px;
 border-radius: 3px;
 margin-right: 5px;
 border: 1px solid #D3D3D3;
 font-size: 12px;
 padding: 5px;
}

textarea:focus {
 outline: 0;
}

.post_form input[type="submit"] {
 width: 11%;
 height: 60px;
 border: none;
 border-radius: 3px;
 background-color: #3498db;
 font-family: 'Bellota-BoldItalic', sans-serif;
 color: #1E75CA;
 text-shadow: #73B6E2 0.5px 0.5px 0px;
 font-size: 90%;
 position: absolute;
 outline: 0;
 margin: 0;
}

.post_form input[type="submit"]:active {
 padding: 5px 4px 4px 5px;
}

.status_post {
 width: 96%;
 font-size: 15px;
 padding: 0px 5px;
 min-height: 75px;
 cursor:pointer;
}

.post_profile_pic {
 float: left;
 margin-right: 7px;
}

.post_profile_pic img {
 border-radius: 5px;
}

#comment_iframe {
 max-height: 250px;
 width: 100%;
 margin-top: 5px;

}

.comment_section {
 padding: 0 5px 5px 5px;
}

.comment_section img {
 margin: 0 3px 3px 3px;
 border-radius: 3px;
}

#comment_form textarea {
 border-color: #D3D3D3;
 width: 85%;
 height: 35px;
 border-radius: 5px;
 color: #616060;
 font-size: 14px;
 margin: 3px 3px 3px 5px;
}
#comment_form input[type="submit"] {
 border:none;
 background-color: #20AAE5;
 color: #156588;
 border-radius: 5px;
 width: 13%;
 height: 35px;
 margin-top: 3px;
 position: absolute;
 font-family: 'Bellota-BoldItalic', sans-serif;
 text-shadow: #73B6E2 0.5px 0.5px 0px;
}

.newsfeedPostOptions {
 padding: 0px;
 text-decoration: none;
 color:#20AAE5;
 border:none;
}

.newsfeedPostOptions iframe {
 border: 0px;
 height: 17px;
 width: 120px;
}

.comment_like {
 background-color: transparent;
 border: none;
 font-size: 14px;
 color: #3498db;
 padding: 0;
 height: auto;
 width: auto;
 margin: 0;
}

.like_value {
 display: inline;
 font-size: 14px;
}</style>
<?php
class Post {
	private $user_obj;
	private $con;

	public function __construct($con, $user){
		$this->con = $con;
		$this->user_obj = new User($con, $user);
	}

	public function submitPost($body, $user_to, $imageName) {
		$body = strip_tags($body); //removes html tags
		$body = mysqli_real_escape_string($this->con, $body);
		$check_empty = preg_replace('/\s+/', '', $body); //Deltes all spaces

		if($check_empty != "") {


			//Current date and time
			$date_added = date("Y-m-d H:i:s");
			//Get username
			$added_by = $this->user_obj->getUsername();

			//If user is on own profile, user_to is 'none'
			if($user_to == $added_by) {
				$user_to = "none";
			}

			//insert post
			$query = mysqli_query($this->con, "INSERT INTO posts VALUES('', '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0', '$imageName')");
			$returned_id = mysqli_insert_id($this->con);

			//Insert notification

			//Update post count for user
			$num_posts = $this->user_obj->getNumPosts();
			$num_posts++;
			$update_query = mysqli_query($this->con, "UPDATE users SET num_posts='$num_posts' WHERE username='$added_by'");

		}
	}

	public function loadPostsFriends() {
			//
			// $page = $data['page'];
			// $userLoggedIn = $this->user_obj->getUsername();
			//
			// if($page == 1)
			// 	$start = 0;
			// else
			// 	$start = ($page - 1) * $limit;
			//
			//
			$str = ""; //String to return
			$data_query = mysqli_query($this->con, "SELECT * FROM posts WHERE deleted='no' ORDER BY id DESC");

			if(mysqli_num_rows($data_query) > 0) {
				//
				//
				// $num_iterations = 0; //Number of results checked (not necasserily posted)
				// $count = 1;
				//
				while($row = mysqli_fetch_array($data_query)) {
					$id = $row['id'];
					$body = $row['body'];
					$added_by = $row['added_by'];
					$date_time = $row['date_added'];
					$imagePath = $row['image'];

					//Prepare user_to string so it can be included even if not posted to a user
					if($row['user_to'] == "none") {
						$user_to = "";
					}
					// else {
					// 	$user_to_obj = new User($con, $row['user_to']);
					// 	$user_to_name = $user_to_obj->getFirstAndLastName();
					// 	$user_to = "to <a href='" . $row['user_to'] ."'>" . $user_to_name . "</a>";
					// }
					//
					//Check if user who posted, has their account closed
					$added_by_obj = new User($this->con, $added_by);
					if($added_by_obj->isClosed()) {
						continue;
					}

						//
						//
						// if($num_iterations++ < $start)
						// 	continue;
						//
						//
						// //Once 10 posts have been loaded, break
						// if($count > $limit) {
						// 	break;
						// }
						// else {
						// 	$count++;
						// }
						//
						$user_details_query = mysqli_query($this->con, "SELECT first_name, last_name, profile_pic FROM users WHERE username='$added_by'");
						$user_row = mysqli_fetch_array($user_details_query);
						$first_name = $user_row['first_name'];
						$last_name = $user_row['last_name'];
						$profile_pic = $user_row['profile_pic'];
						?>

						<script>
							function toggle<?php echo $id; ?>() {

								var target = $(event.target);
								if (!target.is("a")) {
									var element = document.getElementById("toggleComment<?php echo $id; ?>");

									if(element.style.display == "block")
										element.style.display = "none";
									else
										element.style.display = "block";
								}
							}

						</script>
						<?php

						$comments_check = mysqli_query($this->con, "SELECT * FROM comments WHERE post_id='$id'");
						$comments_check_num = mysqli_num_rows($comments_check);


						//Timeframe
						$date_time_now = date("Y-m-d H:i:s");
						$start_date = new DateTime($date_time); //Time of post
						$end_date = new DateTime($date_time_now); //Current time
						$interval = $start_date->diff($end_date); //Difference between dates
						if($interval->y >= 1) {
							if($interval == 1)
								$time_message = $interval->y . " year ago"; //1 year ago
							else
								$time_message = $interval->y . " years ago"; //1+ year ago
						}
						else if ($interval-> m >= 1) {
							if($interval->d == 0) {
								$days = " ago";
							}
							else if($interval->d == 1) {
								$days = $interval->d . " day ago";
							}
							else {
								$days = $interval->d . " days ago";
							}


							if($interval->m == 1) {
								$time_message = $interval->m . " month". $days;
							}
							else {
								$time_message = $interval->m . " months". $days;
							}

						}
						else if($interval->d >= 1) {
							if($interval->d == 1) {
								$time_message = "Yesterday";
							}
							else {
								$time_message = $interval->d . " days ago";
							}
						}
						else if($interval->h >= 1) {
							if($interval->h == 1) {
								$time_message = $interval->h . " hour ago";
							}
							else {
								$time_message = $interval->h . " hours ago";
							}
						}
						else if($interval->i >= 1) {
							if($interval->i == 1) {
								$time_message = $interval->i . " minute ago";
							}
							else {
								$time_message = $interval->i . " minutes ago";
							}
						}
						else {
							if($interval->s < 30) {
								$time_message = "Just now";
							}
							else {
								$time_message = $interval->s . " seconds ago";
							}
						
						}
						if($imagePath != "") {
							$imageDiv = "<div class = 'postedImage'>
							<img src = '$imagePath'></div>";
						}
						else{
							$imageDiv = "";
						}




						$str .= "<div class='status_post' onClick='javascript:toggle$id()'>
									<div class='post_profile_pic'>
										<img src='$profile_pic' width='50'>
									</div>

									<div class='posted_by' style='color:#ACACAC;'>
										<a href='$added_by'> $first_name $last_name </a> $user_to &nbsp;&nbsp;&nbsp;&nbsp;$time_message
									</div>
									<div id='post_body'>
										$body
										<br>
										$imageDiv
										<br>
										<br>
									</div>

									<div class='newsfeedPostOptions'>
										Comments($comments_check_num)&nbsp;&nbsp;&nbsp;
										<iframe src='like.php?post_id=$id' scrolling='no'></iframe>
									</div>

								</div>
								<div class='post_comment' id='toggleComment$id' style='display:none;'>
									<iframe src='comment_frame.php?post_id=$id' id='comment_iframe' frameborder='0'></iframe>
								</div>
								<hr>";
					} //End while loop

				// if($count > $limit)
				// 	$str .= "<input type='hidden' class='nextPage' value='" . ($page + 1) . "'>
				// 				<input type='hidden' class='noMorePosts' value='false'>";
				// else
				// 	$str .= "<input type='hidden' class='noMorePosts' value='true'><p style='text-align: centre;'> No more posts to show! </p>";
			}

			echo $str;


		}



}

?>
