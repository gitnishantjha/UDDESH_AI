<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Uddesh AI</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/s.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>
			.content {
				padding: 12px;
	position: relative;
}

.content h2 {
	color: #fff;
	
	font-size: 3em;
	position: absolute;
	transform: translate(-50%, -50%);
}

.content h2:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 1px   #282727;
}

.content h2:nth-child(2) {
	color: #282727;
	animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
	0%,
	100% {
		clip-path: polygon(
			0% 45%,
			16% 44%,
			33% 50%,
			54% 60%,
			70% 61%,
			84% 59%,
			100% 52%,
			100% 100%,
			0% 100%
		);
	}

	50% {
		clip-path: polygon(
			0% 60%,
			15% 65%,
			34% 66%,
			51% 62%,
			67% 50%,
			84% 45%,
			100% 46%,
			100% 100%,
			0% 100%
		);
	}
}
			</style>
    </head>
	<body>

		<!--Header-->
        <header id="header" class="transparent-nav" style="background: #12c2e9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="content">
						
					<h2>Uddesh.AI</h2>
                    <h2>Uddesh.AI</h2>
      
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="main.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></a>
                            <div class="dropdown-content">
								<a href="http://127.0.0.1/php%20CAREERLY/login.php">Career Prediction</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/courses.php">Courses</a>
                                <a href="http://127.0.0.1/php%20CAREERLY/blog.php">Knowledge Network</a>
								<a href="http://127.0.0.1/php%20CAREERLY/mentor.html">Mentors</a>
                            </div>
                        </li>
						<li><a href="main.php#about">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li>
							<a href="login.php">Login</a>
						</li>
						<li>
							<a href="register.php">Register</a>
						</li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php else: ?>
					<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="main.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn" href="javascript:void(0)">Services <span>&#11167;</span></i></a>
                            <div class="dropdown-content">
								<a href="http://127.0.0.1:5000/">Career Prediction</a>
                                <a href="courses.php">Courses</a>
                                <a href="blog.php">Knowledge Network</a>
								<a href="mentor.html">Mentors</a>
                            </div>
                        </li>
						<li><a href="#about">About Us</a></li>
						<li><a href="https://discord.com/invite/G9uz5PWs">Community</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="logout.php" >Log out</a></li>
						
                        
					</ul>
				</nav>
				<!-- /Navigation -->
				<?php endif ?>

			</div>
		</header>
		<!-- /Header -->