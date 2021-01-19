<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div> +962-027211111</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>SchoolGuide@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="Login.html"> Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Schools gu<span>ide</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="news.html">News</a></li>
									
									<li><a href="contact.php">Contact</a></li>
								</ul>
								
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="about.html">About</a></li>
				<li class="menu_mm"><a href="news.html">News/a></li>
				
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<br>
	<br>

	<div class="contact">
		


		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Contact</div>
							<form class="comment_form"  method='post' action=''>
								<div>
									<div class="form_title">Name</div>
									<input type="text" class="comment_input" required="required" name='name'>
								</div>
								<div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" required="required" name='email'>
								</div>
								<div>
									<div class="form_title">Message</div>
									<input type='text' class="comment_input comment_textarea" required="required" name='msg'>
									<input type="submit" class="comment_button trans_200" name='submit' value='submit now'>
								</div>
								
									
							</form>
						</div>
						<?PHP
						if($_POST['submit'])
						{
						$conn=mysqli_connect("localhost","root","","project");
						$insmes=mysqli_query($conn,"insert into messages (msg,name,email) values ('$_POST[msg]','$_POST[name]','$_POST[email]')") or die (mysqli_error($conn));
						}
						?>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
							<div class="contact_info_text">
								<p>You can call at any time if you have problems or have a question.</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Irbid Office</div>
								<ul class="location_list">
									<li> Jordan , Irbid, Yarmouk university</li>
									<li>+962-027211111</li>
									<li>SchoolGuide@gmail.com </li>
								</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Footer -->

	<footer class="footer" style="max-height:  300px;">
		<div class="footer_background" style="background-image:url(images/footer_background.png)">
		 </div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">
												schools gu<span>ide</span></div>
										</a>
									</div>
									
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact"  >

									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: SchoolGuide@gmail.com</li>
											<li>Phone:  >Phone: +962-027211111</li>
										
										</ul>
									</div>
								</div>
							
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links" >


									<div class="footer_links_container">


											
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<p>Copyright &copy; 2020 Yrmouk university 
                                
        	| Designed by  all team</p>
</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>