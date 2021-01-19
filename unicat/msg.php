<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Messages</title>
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
<link rel="stylesheet" type="text/css" href="styles/additions2.css">
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
									<li><div class="question">Admin Account </div></li>
									
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										
									</li>
								</ul>
								<div class="top_bar_login ml-auto" name="user">
								
									<div ><h5 style="margin-top: 15px; color: white;" ><?PHP echo $_SESSION['urname'] ?> </h5></div>
								</div>
								<h6 style="color:#14bdee;">_________</h6>
								<?PHP
								if($_SESSION['urname'])
								{
									?>
									<div class="login_button">
									<a href="logout.php"><h4>logout</h4></a>
									</div>
									<?PHP
								}
								?>
							</div>

								
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
		<br>


		

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
								<input type="search" class="search_input" placeholder="Search" >
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
<div class="row team_row" >
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col" >
					<div class="team_item">
						<div class="team_image"><img src="images/user.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="Admin.php">Add Users</a></div>
							
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col" style="">
					<div class="team_item">
						<div class="team_image"><img src="images/msg.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="msg.php">Message</a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/per.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="hi/exampleTeacherReport.php" target="_blank">Report</a></div>
						</div>
					</div>
				</div>

				

			</div>
		</div>
	</div>



<div class="counter"  >
		<div class="counter_background" style="background-image:url(images/courses_background.jpg)" ></div>
		<div class="container" style="height: 600px">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						
						
					</div>

				</div>
			</div>
			<?PHP
			
			if($_SESSION['urname'])
			{
				$conn=mysqli_connect("localhost","root","","project");
				$msg=mysqli_query($conn,"Select name,Email,link,msg from  messages where messages.link=(select min(link) from messages)");
				$fetch=mysqli_fetch_array($msg);
				if(isset($_POST['prev']) && $_POST['prev']=="prev")
				{
					if(!empty($_POST['msgr']))
					{
					    $msg=mysqli_query($conn,"Select name,Email,link,msg from  messages where messages.link=(Select max(link) from messages where link < '$_POST[msgr]')");	
                        $fetch=mysqli_fetch_array($msg);					
					}
						
				}
				if(isset($_POST['nex']) && $_POST['nex']=="nex")
				{
					if($_POST['msgr'])
					{
						//echo $name;
					    $msg=mysqli_query($conn,"Select name,Email,link,msg from  messages  where messages.link=(Select min(link) from messages where link > '$_POST[msgr]')");	
					    $fetch=mysqli_fetch_array($msg);
					}
						
				}
				
			?>
			<div class="counter_form" style="margin-left: 50%">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center"  method="post">
							<h3>Messages</h3>
							<br>
							 Name:<input type="name" class="counter_input" value="<?PHP echo $fetch['name']; ?>"  readonly="true" >
							
                           Email:<input type="email" class="counter_input" value="<?PHP echo $fetch['Email']; ?>" readonly="true">
                           Message<input type="text" class="counter_input" value="<?PHP echo $fetch['msg']; ?>" readonly="true">
						   <input type hidden name='msgr' value='<?PHP echo $fetch['link']; ?>'>
                          
           
 
							<button  type="submit" class="counter_form_button" style="width: 80px;" name='prev' value='prev'>previous</button>

							<button  type="submit" class="counter_form_button" style="width: 80px;" name='nex' value='nex'>Next</button>
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
												Schools gu<span>ide</span></div>
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