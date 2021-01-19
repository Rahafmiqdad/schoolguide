<?PHP

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style type="text/css">
	.sel1{
		width: 30%;
		height: 45px;
		font-size: 20px;


		}
	
</style>
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
										<div>+962-027211111</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>>SchoolGuide@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="Login.html">Login</a></div>
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
									<div class="logo_text">schools gu<span>ide</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li ><a href="index.php">Home</a></li>
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

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>
<!-- Counter -->

	<div class="counter" style="margin-top: 10%;" >
		<div class="counter_background" style="background-image:url(images/counter_background.jpg)" ></div>
		<div class="container" style="height: 600px">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Register Now</h2>
						<div class="counter_text"><p>Please register You must have an account to be able to register sons .</p></div>
					</div>

				</div>
			</div>
			<?PHP
			if($_GET["school"] && preg_match("/^[0-9]*$/",$_GET["school"]))
			{
				
				?>
				<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="crmreg.php" method="post" enctype="multipart/form-data">
							<br>
							<div class="counter_form_title">Register now</div>
							<input type="text" class="counter_input" placeholder="Your Name:"  name='sname'>
							<input type="text" class="counter_input" placeholder="Student_SSN:"  name='snumber'>
							
							<div style="margin-right: 60%;">
								<input type="radio" id="male" value="male" name='sgender'>
								  <label for="male">Male</label>
                                  <input type="radio" id="female" value="female" name='sgender'>
                                  <label for="female">Female</label>
							</div>
                           <input type="text" class="counter_input" placeholder="email:"  name='semail'>
                           <input type="password" class="counter_input" placeholder="password:"  name='spassword'>
						   <input type="password" class="counter_input" placeholder="confirm password:"  name='rpassword'>
                           <input type="phone" class="counter_input" placeholder="phone"  name='sphone'>
						<select name="snational" id="counter_select" class="counter_input counter_options" >
								<option disabled="disabled">Nationality:</option>
								<option value="Jordanian">Jordanian</option>
                                <option value="Syrian">Syrian</option>
                                <option value="Egyptian">Egyptian</option>
                                <option value="Palestinian">Palestinian</option>
                                <option value="Iraqi">Iraqi</option>
                                <option value="Saudi">Saudi</option>
                                <option value="Otherwise">Otherwise</option>
							</select>
							<div>
							<label>Birth Certificate :</label>
                            <input type="file" name="sbirthcert" class="file" style="width: 30%">
                           <label>Vaccination Card:</label>
                           <input type="file" name="scard" class="file" style="width: 30%">
                           </div>
						   <input type="hidden" name="school" value='<?PHP echo $_GET["school"] ?>'>
							<button type="submit" value='aaa' class="counter_form_button" name='scrmreg'>submit now</button>
						</form>
					</div>
				</div>
			</div>
				<?PHP
			}
			?>
			

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
											<li> Jordan , Irbid, Yarmouk university</li>
									        <li>+962-027211111</li>
									        <li>SchoolGuide@gmail.com </li>
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