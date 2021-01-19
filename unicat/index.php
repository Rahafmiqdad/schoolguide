<?php 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$val = $_POST['School'];
	if($val == 1)
	{
		header("location:school2.html");
	}elseif($val == 2)
	{
		header("location:school4.html");
	}
	elseif($val == 3)
	{
		header("location:school1.html");
	}
	elseif($val == 4)
	{
		header("location:school6.html");
	}
	elseif($val == 5)
	{
		header("location:school5.html");
	}
	elseif($val == 6)
	{
		header("location:school3.html");
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
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
										<div>SchoolGuide@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="login.html"> Login</a></div>
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
									<li class="active"><a href="#">Home</a></li>
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

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="abut.html">About</a></li>
				<li class="menu_mm"><a href="news.html">News</a></li>
				
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/book.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Schools Guide</div>
									<div class="home_slider_subtitle">Your best destination to find a goverment school for you sons</div>
									<div class="home_slider_form_container">
										<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
									
											<select name="School" style="margin-left: 30%;" class="sel1">
										<option  disabled="disabled" selected="selected">- - - - -Choose area- - - - - </option>
	<option value="1"><a href="school2.html"> Alturkman</a></option>
    <option value="2"> <a href="school4.html"> Alqaselh </a> </option>
    <option value="3"><a href="school1.html"> Albarha</a></option>
    <option value="4"> <a href="school6.html">Alhai alsharqi </a></option>
    <option value="5">Dahiet alhussin<a href="school5.html">
     </a></option>
    <option value="6"><a href="school3.html">
     </a>Aidoun</option>
												</select>
											<button type="submit" class="home_search_button" style="margin-right: 25%;">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/bo.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Schools Guide</div>
									<div class="home_slider_subtitle">Your best destination to find a goverment school for you sons</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											
											<select name="School" style="margin-left: 30%;" class="sel1">
										<option  disabled="disabled" selected="selected">- - - - -Choose area- - - - - </option>
	<option value="1"><a href="school2.html"> Alturkman</a></option>
    <option value="2"> <a href="school4.html"> Alqaselh </a> </option>
    <option value="3"><a href="school1.html"> Albarha</a></option>
    <option value="4"> <a href="school6.html">Alhai alsharqi </a></option>
    <option value="5">Dahiet alhussin<a href="school5.html">
     </a></option>
    <option value="6"><a href="school3.html">
     </a>Aidoun</option>
												</select>
											<button type="submit" class="home_search_button" style="margin-right: 25%;">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/col.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The schools Guide</div>
									<div class="home_slider_subtitle">Your best destination to find a goverment school for you sons</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<select name="School" style="margin-left: 30%;" class="sel1">
										<option  disabled="disabled" selected="selected">- - - - -Choose area- - - - - </option>
	<option value="1"><a href="school2.html"> Alturkman</a></option>
    <option value="2"> <a href="school4.html"> Alqaselh </a> </option>
    <option value="3"><a href="school1.html"> Albarha</a></option>
    <option value="4"> <a href="school6.html">Alhai alsharqi </a></option>
    <option value="5">Dahiet alhussin<a href="school5.html">
     </a></option>
    <option value="6"><a href="school3.html">
     </a>Aidoun</option>
												</select>
											<button type="submit" class="home_search_button" style="margin-right: 25%;">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To  The Schools Guide</h2>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/se.png" alt="" width="80px"></div>
						<h3 class="feature_title">Search</h3>
						<div class="feature_text"><p>Search for the required area and choose the school.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/reg.png" alt="" width="80px"></div>
						<h3 class="feature_title">Register</h3>
						<div class="feature_text"><p>Fill in your information and send it.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/app.png" alt="" width="80px"></div>
						<h3 class="feature_title">School approval</h3>
						<div class="feature_text"><p>Wait for the school to approve your request.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/fo.png" width="80px" alt=""></div>
						<h3 class="feature_title">follow your son</h3>
						<div class="feature_text"><p>Now you can follow the signs and behavior of your sons</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>
<br>
<br>
	
	<!-- About -->

	<div class="about" >
		<div class="container">
			<div class="row">
				<div class="col">
					
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
					<div class="col-lg-4 about_col about_col_middle">
					<div class="about_item">
						
						<div> <p><h3>What we do?</h3> </p></div>
						<div class="about_item_text">
							    <p>
Many parents faced trouble attending meetings because of their work
schedule, family issues, etc.so our system activate the roll of parents
through the possibility to register their children in selected school and
follow up their grades.
School managers can access a particular teachers class schedule, daily
reports of the teacher, etc. With the Help of artificial intelligence school
management systems can even monitor the performance of teachers and
give real-time suggestions to improve the teaching quality. It also
Provides a dedicated portal for teachers making it easier for them to find
all the information related to students and school activities.</p>
						</div>
					</div>
				</div>

				<!-- About Item -->
		
<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="images/we.jpg" alt="" height="300px"></div>
			
						 <div class="right-about-text">
                             <div> <p><h3>Who we are?</h3> </p></div>
                              <p>We are an educational platform that aims to facilitate the search for a school near you and also allow you to follow your children through us.</p>
                              
                            </div>
					</div>
				</div>
				<!-- About Item -->
				<div class="col-lg-4 about_col about_col_right">
					<div class="about_item">
				
						<div class="about_item_title"> <p> <h3> What the purpose of awebsit ? </h3> </p></div>
						<div class="about_item_text">
							<p>Make the process of finding public schools easy.
Manages the details of schools , students , classes , teachers and
registration.-Convert the paper registration to electronic ( reduce the use of paper ).
Organaizing the process of insert student&#39;s marks and their average.
Allow parents to check about the status of their children.
Increase efficiency of managing the schools.
Make better interaction between teachers , parents and management.
Provide timely , engaging and current information to parents , staff and
community.
Attract new students (through their parents or guardians)..</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<br>
	<br>



	

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
                      <li>Phone: +962-027211111</li>
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