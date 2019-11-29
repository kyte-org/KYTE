	<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>College Networking Site</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/register_style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/caroufredsel.js"></script>
<script src="css/js/register.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
  	<div class="container">
  	 <div class="row">
  	 <a href="" class="logo"><img src="images/kyte.png"></a>
  	<nav>
  		<ul>
  		<li><a href="#">Home</a></li>
  		<li><a href="#">About</a></li>
  		<li><a href="#">Admin</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="#ttm">Team</a></li>
  		</ul>
  	</nav>
  		</div>
  	</div>
  </header>
  <section class="slider">
  	<ul class = "slidr-carousel" id="slider-carousel">
  		<li class="img1">
  			<h2>BE CONNECTED  <span>ABB3</span></h2>
  			<p> Hustle </p>
  			<i class="fa fa-apple"></i>
  			<i class="fa fa-android"></i>
  			<i class="fa fa-windows"></i>
  			<p><br>
  				College Networking Site.
  			</p><br>
  			<a href="#adarsh" class="btn btn-half">Sign Up!</a>
  			<a href="#adarsh" class="btn btn-full">Login!</a>
  		</li>
  		<li class="img2">
  			<h2>BE CONNECTED  <span>ANNAPURNA</span></h2>
  			<p> JIIT</p>
  			<i class="fa fa-apple"></i>
  			<i class="fa fa-android"></i>
  			<i class="fa fa-windows"></i>
  			<p class="pk"><br>
  				College Networking Site.
  			</p><br>
  			<a href="#adarsh" class="btn btn-half">Sign Up!</a>
  			<a href="#adarsh" class="btn btn-full">Login</a>
  		</li>
  		<li class="img3">
  			<h2>BE CONNECTED  <span>JIIT</span></h2>
  			<p> Hustle </p>
  			<i class="fa fa-apple"></i>
  			<i class="fa fa-android"></i>
  			<i class="fa fa-windows"></i>
  			<p class="pn"><br>
          College Networking Site.
  			</p><br>
  			<a href="#adarsh" class="btn btn-half">Sign Up!</a>
  			<a href="#adarsh" class="btn btn-full">Login</a>
  		</li>
  	</ul>
  </section>
  <section class="intro-area white" id="intro">
  	<div class ="container">
  	<div class="row">
  		<div class="col-sm-12 text-center">
  			<h2>KYTE</h2>
  			<div class="sub-heading">
  				<p>
  					This is the college networking site where people can <br> talk,share images,share files, and many more to explore.
  				</p>
          </div>
          KYTE is similar to popular social networking site like Facebook. But,
              it is not fully social as it is reserved for college students only.
              With this application, college students can share information
              between them such as educational materials, their profiles,
              images, videos, and more.
              The positive impact of social media has a lot of favorable
              features for any kind of business. The people also get a lot of
              opportunities to know about your brands and find you in such
              a huge platform. Developed using html, css, scss , jquery,
              javascript, php etc.
  			</div>
  		</div>

  	</div>
  </section>
  <section class="feature-area" id="feature">
    <a name="adarsh"></a>
  	<div class="container">
  	<div class="row">
  		<div class="col-sm-12 text-center">


<div class="first">
	<form action="index.php" method="POST">
<input type="text" name="log_enroll" placeholder="Username" value="<?php
if(isset($_SESSION['log_enroll'])) {
echo $_SESSION['log_enroll'];
}
?>" required>
<br>
<input type="password" name="log_password" placeholder="Password">
<br>
<?php if(in_array("Username or password was incorrect<br>", $error_array)) echo  "Username or password was incorrect<br>"; ?>
<input type="submit" name="login_button" value="Login">
<br>
<a href ="#" id="signup" class = "signup">Need an account ? Register here!</a>

</form>

</div>
	<div class="">



				<form action="index.php" method="POST">
		<input type="text" name="reg_fname" placeholder="First Name" value="<?php
		if(isset($_SESSION['reg_fname'])) {
			echo $_SESSION['reg_fname'];
		}
		?>" required>
		<br>
		<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>




		<input type="text" name="reg_lname" placeholder="Last Name" value="<?php
		if(isset($_SESSION['reg_lname'])) {
			echo $_SESSION['reg_lname'];
		}
		?>" required>
		<br>
		<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

		<input type="email" name="reg_email" placeholder="Email" value="<?php
		if(isset($_SESSION['reg_email'])) {
			echo $_SESSION['reg_email'];
		}
		?>" required>

		<br>
		<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
		else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>"; ?>

		<input type="text" name="reg_enroll" placeholder="Enrollment" value="<?php
		if(isset($_SESSION['reg_enroll'])) {
			echo $_SESSION['reg_enroll'];
		}
		?>" required>
	<br>
<?php if(in_array("Username already in use<br>", $error_array)) echo "Username already in use<br>"; ?>

		<input type="password" name="reg_password" placeholder="Password" required>
		<br>
		<input type="password" name="reg_password2" placeholder="Confirm Password" required>
		<br>
		<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";
		else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
		else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


				<input type="submit" name="register_button" value="Register">
		<br>

		<?php if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
<a href ="#" id ="signin" class = "signin">Already have an account? Sign in here!</a>
	</form>
</div>
  		</div>
  </section>
   <section class="more-feature-area" id="more_feature">
   	<div class="container">
   		<div class="row">
   			<div class="col-sm-12 text-center">
  			<h2>WEBSITE FEATURES</h2>
  			<div class="sub-heading">
  				<p>
  					This is the college networking site where people can <br> talk,share images,share files, and many more to explore.
  				</p>
  				</div>
  			</div>
   		</div>
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <img src="images/feature.png" class="img-responsive">
        </div>
        <div class="col-sm-12 col-md-5">
          <div class="feature-list">
            <ul>
              <li>
                <div class="feature-icon">
                  <i class="fa fa-cog"></i>
                </div>
                <div class="feature-details">
                  <h3>Student Login</h3>
                  <p>Stugents Can log in and access their profile</p>
                </div>

              </li>
               <li>
                <div class="feature-icon">
                  <i class="fa fa-mobile"></i>
                </div>
                <div class="feature-details">
                  <h3>Notification</h3>
                  <p>New notifications can pop up.</p>
                </div>

              </li>
               <li>
                <div class="feature-icon">
                  <i class="fa fa-cab"></i>
                </div>
                <div class="feature-details">
                  <h3>Exam Schedule</h3>
                  <p>Student can view upcoming Exam schedule</p>
                </div>

              </li>
               <li>
                <div class="feature-icon">
                  <i class="fa fa-arrows-alt"></i>
                </div>
                <div class="feature-details">
                  <h3>Responsive</h3>
                  <p>This website is responsive site.</p>
                </div>

              </li>
            </ul>
          </div>


        </div>
      </div>
   	</div>
   </section>
   <section class="testimonials" id="testimonial">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 text-center">
           <h2>AWESOME CLIENT</h2>
           <div class="sub-heading">
             <p>akad bakad bambe bo assi nab-be pure show
             </p>
           </div>
         </div>
       </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
      <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-testimonials" data-slide-to="1"></li>
      <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  </ol>

      <div class="carousel-inner">
          <div class="item active text-center">
            <img src="" class="center-block">
                <h2>Akshat Verma</h2>
                    <h4></h4>
                     <p>The most beautiful people we have known are those who have known defeat, <br> known suffering, known struggle, known loss, and have found their way out of the depths.
                     </p>
          </div>
    <div class="item text-center">
      <img src="" class="center-block">
      <h2>Vikas Gautam</h2>
      <h4></h4>
      <p>The most beautiful people we have known are those who have known defeat, <br> known suffering, known struggle, known loss, and have found their way out of the depths.
      </p>
    </div>
    <div class="item text-center">
      <img src="" class="center-block">
      <h2>Atishay Srivastava</h2>
      <h4></h4>
      <p>The most beautiful people we have known are those who have known defeat, <br> known suffering, known struggle, known loss, and have found their way out of the depths.</p>
    </div>
        </div>
      </div>
</div>
</div>
   </section>
   <section class="team-area" id="team">
   <a name="ttm"></a>
    <div class="container">
      <div class="row">
         <div class="col-sm-12 text-center">
           <h2>OUR TEAM</h2>
           <div class="sub-heading">
             <p>University projects created as a team.
             </p>
           </div>
         </div>

      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="team-man">
            <img src="">
          </div>
          <div class="team-description ">
            <div class="team-title">
              <h3>Hrithik Nigam</h3>
              <span>project manager</span>
            </div>
            <p> 18104055
            </p>
            <div class="team-social-network text-center" >
              <a href=""><i class="fa fa-facebook" ></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3">
          <div class="team-man">
            <img src="assets/images/profile_pics/nikhil.jpg">
          </div>
          <div class="team-description">
            <div class="team-title">
              <h3>Prashant Srivastava</h3>
              <span>project manager</span>
            </div>
            <p> 18104041
            </p>
            <div class="team-social-network text-center">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3">
          <div class="team-man">
            <img src="assets/images/profile_pics/kshitijdp.jpg">
          </div>
          <div class="team-description">
            <div class="team-title">
              <h3>Vikas Gautam</h3>
              <span>project manager</span>
            </div>
            <p> 18104057
            </p>
            <div class="team-social-network text-center">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3">
          <div class="team-man">
            <img src="assets/images/profile_pics/roy.jpg">
          </div>
          <div class="team-description">
            <div class="team-title">
              <h3>Atishay Srivastava</h3>
              <span>project manager</span>
            </div>
            <p> 18104058
            </p>
            <div class="team-social-network text-center">
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>




   </section>
  <script src="js/main.js"></script>
</body>
</html>
