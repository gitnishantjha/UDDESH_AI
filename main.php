<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="sty.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="script.js" defer></script>
  </head>
  <link rel="icon" href="./img/prom.png" type="image/icon type">
<style>
	.rounded-img {
		width: 180px; 
        height: 180px;
		border-radius: 50%;
		overflow: hidden;
		margin: 5px;
	}
	.image-container {
            display: flex;
            justify-content: space-around; /* Adjust as needed */
            align-items: center;
        }
		.animate-charcter
{
   text-transform: uppercase;
  background-image:  rgb(181,79,183);
background: linear-gradient(90deg, rgba(181,79,183,1) 17%, rgba(218,107,33,1) 49%, rgba(252,176,69,0.8380602240896359) 88%);
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 8s linear infinite;
  display: inline-block;
      font-size: 35px;
}
@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

</style>
<body>
<?php include 'header.php' ?>
<!-- Home -->
<div id="home" class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg3333.jpg); width:100%; height: 656px;">
	</div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8">


					<h1 class="animate-charcter">AI To Navigate Your Destination</h1>

					<?php
					// Check if the user is logged in, if not then redirect him to login page
					if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
						<p class="lead white-text" style="margin-left: 5px;"><b>Discover yourself<br>Take the test to find
								the perfect role for you after Engineering</b></p>

						<a class="main-button icon-button" href="login.php">Get Started!</a>

					<?php else: ?>
						<p class="lead white-text" style="margin-left: 5px;"><b>Hi,
								<?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Take
									the test to find the perfect role for you after Engineering</b></p>

						<a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a>

					<?php endif ?>


				</div>
			</div>
		</div>
	</div>

</div>
<!-- /Home -->



<!-- Why us -->
<div id="why-us" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">
			<div class="section-header text-center">


				<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Uddesh AI</h2>
				<!--<p class="lead">We all want to fly high and in real time!<br> And in this random pursuit of success, we end up making wrong career choices.</p>-->
				<p class="lead"><b style="color: rgb(56, 48, 48);">Uddesh AI</b> is one stop destination <br>in helping
					you understand yourself, the best career for you <br> and providing all the resources in the
					process.</p>
			</div>
		</div>

		<div class="row">
			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
					<div class="feature-content">
						<a href="#">
							<?php
							// Check if the user is logged in, if not then redirect him to login page
							if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
								<a href="login.php">
									<h4>Career Prediction</h4>
								</a>
							<?php else: ?>
								<a href="http://127.0.0.1:5000/">
									<h4>Career Prediction</h4>
								</a>


							<?php endif ?>

							<p>Take the test to find the perfect role for you after Engineering.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
					<div class="feature-content">
						<a href="blog.php">
							<h4>Knowledge Network</h4>
						</a>
						<p>Gain knowledge through various sources, like important informational links, access to study
							materials, etc.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
					<div class="feature-content">
						<a href="courses.php">
							<h4>Online Courses</h4>
						</a>
						<p>Links to relevant Courses.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

		</div>
		<!-- /row -->

		<hr class="section-hr">

	</div>
	<!-- /container -->

</div>
<!-- /Why us -->

<!-- Call To Action -->
<div id="cta" class="section" style="height: 400px;">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgmid.jpg)"></div>
	<!-- /Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-6">


				<?php
				// Check if the user is logged in, if not then redirect him to login page
				if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true): ?>
					<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

					<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins
						Here</h2>
					<p class="lead white-text">We Create Beautiful Experiences
						That Drive Successful Careers.</p>
					<a class="main-button icon-button" href="register.php">Get Started!</a>
				<?php else: ?>
					<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b>
							<?php echo htmlspecialchars($_SESSION["username"]); ?> !
						</b></h2>

					<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins
						Here</h2>
					<p class="lead white-text">We Create Beautiful Experiences
						That Drive Successful Careers.</p>
					<a class="main-button icon-button" href="main.php">Get Started!</a>

				<?php endif ?>
			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Call To Action -->

<!-- About -->
<div id="about" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-6">
				<div class="section-header">
					<h2 style="font-size: 35px;">About Uddesh AI</h2>
					<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">Education seekers get
						a personalised experience on our site, based on educational background and career interest,
						enabling them to make well informed course and career decisions. The decision making is
						empowered with easy access to detailed information on career choices, courses, exams, colleges,
						admission criteria, eligibility, placement statistics, rankings, reviews, scholarships, latest
						updates etc as well as by interacting with other career.ly users, experts, current students in
						colleges and alumni groups. We have introduced several student oriented products and tools like
						Career Prediction, Knowledge Network, Daily Bytes, Blogs, Community discussion forum, and
						various Courses.</p>
					<!--Education seekers get a personalised experience on our site, based on educational background and career interest, enabling them to make well informed course and college decisions. The decision making is empowered with easy access to detailed information on career choices, courses, exams, colleges, admission criteria, eligibility, fees, placement statistics, rankings, reviews, scholarships, latest updates etc as well as by interacting with other Shiksha.com users, experts, current students in colleges and alumni groups. We have introduced several student oriented products and tools like Career Central, Common Application Form, Top Colleges, College Compare, Alumni Employment Stats, Campus Connect, College Reviews, College Predictors, MyShortlist and Shiksha Café.-->
				</div>

			</div>

			<div class="col-md-6">
				<div class="about-img">
					<img src="./img/about.png" alt="" />
				</div>
			</div>

		</div>
	</div>
	<div class="container">
	<div class="col-md-6">
				<div class="section-header">
					<center><h2 style="font-size: 35px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u>About Us</h2></u></center>
				</div>

	</div>
	</div>
			
	<div class="image-container">
		<div class="row">
			<div class="col-lg-3">
				<img class="rounded-img"  src="./img/nam.jpeg">
				<h3>Naman Chawla</h3>
				<p>ML and Backend Developer</p>
				<p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-3">
				<img class="rounded-img" src="./img/nish.jpeg">
				<h3>Nishant kr jha</h3>
				<p>Backend Developer</p>
				<p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-3">
				<img class="rounded-img"src="./img/may.jpeg">
				<h3>Mayank Bajaj</h3>
				<p>Frontend and UI Developer</p>
				<p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
			</div>
			<div class="col-lg-3">
				<img class="rounded-img" src="./img/nit2.jpeg">
				<h3>Nitish Kumar</h3>
				<p>Frontend Developer</p>
				<p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
			</div>
			<!-- /.col-lg-4 -->
		</div>
	</div>

	<hr class="section-hr">

	<!-- container -->
</div>
<!-- /About -->

<!-- Contact CTA -->
<div id="contact-cta" class="section" style="height: 400px;">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
	<!-- Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="white-text">Contact Us</h2>
				<p class="lead white-text">Help us to get to know you.</p>
				<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Contact CTA -->
<button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Uddesh Buddy</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>


<?php include 'footer.php' ?>
<script src="scr.js" defer></script>
                </body>
</html>