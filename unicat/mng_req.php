<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Request</title>
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
		
		.zoom:hover{
			height: 500px;
			width: 500px;
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
									<div class="logo_text">Schools gu<span>ide</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li ><a href="index.php">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="courses.html">News</a></li>
							
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
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="about.html">About</a></li>
				<li class="menu_mm"><a href="new.html">News</a></li>
				
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<br>
						<br>
						<div class="section_subtitle"><h2>Welcome to The  Schools Guide</h2></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/mn.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="mng_info.php">Manager informatin</a></div>
							
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/re.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="mng_req.php">Request</a></div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/te.png" alt="" ></div>
						<div class="team_body">
							<div class="team_title"><a href="tea_re.php"> Teachers record</a></div>
							
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/sd.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="std_re.php">Student record</a></div>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?PHP
	if($_SESSION['urname'] && $_SESSION['type']=="Manager")
	{
	    $dbconnect=mysqli_connect("localhost","root","","project") or die("Error Connecting");
		$getr=mysqli_query($dbconnect,"Select * from regester where ID=(Select MIN(ID) from regester where school=(select school from regester where email='$_SESSION[urname]') and status='pending' and type='Parent')")  or die("Error get r");
        if(mysqli_num_rows($getr)<1)
		{
			?>
			<div class='errors'> There Are No Requests Availiable At This Moment </div>
			<?PHP
		}
		if(isset($_POST['ac']))
		{
			if($_POST['reqs']=="ac")
			{
				$upst=mysqli_query($dbconnect,"update regester set status='auth' where student_ssn='$_POST[rsn]'");
				if($upst)
				{
					
					?>
					<div class='success'> Request Accept , You Will Be Redirected in <span id='tie' style='color:red'> 10 </span> seconds </div>
					<meta http-equiv="refresh" content="10;url=mng_req.php">
					<?PHP	
				}
				    
			}
			if($_POST['reqs']=="rj")
			{
				$upst1=mysqli_query($dbconnect,"Delete from regester where student_ssn='$_POST[rsn]'");
				if($upst1)
				{
					?>
					<div class='success'> Request Rejected  ,You Will Be Redirected in <span id='tie' style='color:red'> 10 </span> seconds </div>
					<meta http-equiv="refresh" content="10;url=mng_req.php">
					<?PHP
				}
				    
			}
			
		}
		else
		{
			$sex="";
			$fetch=mysqli_fetch_array($getr);
			switch($fetch['gender'])
			{
				case "0" : $sex="Male";
				break;
				case "1" : $sex="Female";
				break;
			}
			?>
			<div class="counter">
		<div class="counter_background" style="background-image:url(images/w.jpg)" ></div>
		<div class="container" style="height:500px">
        <div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="" method="post">
							<br>
							<div class="counter_form_title">Request</div>
							<input type="text" class="counter_input" placeholder="Your Name:" required="required" value='<?PHP echo $fetch['Name']; ?>' readonly="true">
							<input name='rsn' type="text" class="counter_input" placeholder="Student_SSN:" required="required" value='<?PHP echo $fetch['student_ssn']; ?>' readonly="true">
							
							<input type="text" class="counter_input" placeholder="Gender" required="required" value='<?PHP echo $sex; ?>' readonly="true">
                           <input type="email" class="counter_input" placeholder="email:" required="required" value='<?PHP echo $fetch['email']; ?>' readonly="true">
                           <input type="phone" class="counter_input" placeholder="phone" required="required" value='<?PHP echo $fetch['phone']; ?>' readonly="true">
						<input type="text" class="counter_input" value='<?PHP echo $fetch['nationality']; ?>' readonly="true" >
						
						<img src='<?PHP echo $fetch['card'] ; ?>' style="width: 80px;" class="zoom"  >
						

						<img src='<?PHP echo $fetch['birth'] ; ?>' style="width: 80px;" class="zoom">
						
						

						<select name="reqs" id="counter_select" class="counter_input counter_options" >
							
						<option selected value="ac">Accept </option>
						<option value="rj"> Reject </option>
						</select>

							<p>
							<input type="submit" class="counter_form_button" value="Apply" name='ac'>
							
							</p>
						</form>
						
					</div>
				</div>
			</div>

		</div>
	</div>
<script>

</script>
			<?PHP
			
		}
		
	}
	
	?>

		
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
<script>
var myvar;
if(document.getElementById("tie"))
{
	var val=document.getElementById("tie").innerHTML;
	var tonum=parseInt(val,10);
	function aa()
	{
		if(tonum > 0)
			
		    tonum=tonum-1;
		    document.getElementById("tie").innerHTML=tonum;
		
	}
	function repeat() 
	{
			
	    setInterval(aa, 1000);
			//alert("zz");
    }
	repeat();
	//alert("as");
}
</script>