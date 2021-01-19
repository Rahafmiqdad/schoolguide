<?PHP
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add</title>
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
	
<?PHP
if($_POST['uadd'])
{
	
	//echo "Verified";
	if(empty($_POST['uname']) || !$_POST['uname'])
	{
		echo "<div class='errors'> User Name Is Required! </div>";
		
	}
	elseif(empty($_POST['ussn']) || !$_POST['ussn'])
	{
		echo "<div class='errors'> 	user Number Is Required! </div>";
		
	}
	

	elseif(empty($_POST['uemail']) || !$_POST['uemail'])
	{
		echo "<div class='errors'> Email Is required</div>";
	}
	elseif(empty($_POST['uphone']) || !$_POST['uphone'])
	{
		echo "<div class='errors'> Phone Is required</div>";
	}
	elseif(empty($_POST['upassword']) || !$_POST['upassword'])
	{
		echo "<div class='errors'> Password Is Required! </div>";
	}
	elseif($_POST['urpassword']!=$_POST['upassword'])
	{
		echo "<div class='errors'> Password Not Match! </div>";
	}
	elseif(empty($_POST['unational']) || !$_POST['unational'])
	{
		echo "<div class='errors'>Please Specify Your Nationality ! </div>";
	}
	elseif(empty($_POST['uid']) || !$_POST['uid'] )
	{
		echo "<div class='errors'>Please Specify Your Nationality ! </div>";
	}
	elseif($_POST['uid']!=1 && $_POST['uid']!=2)
	{
		?>
		<div class='errors'> Unknown Parameter Value  </div>
		<?PHP
	}
	
	if($_POST['uid']==1)
	{
		$_POST['uid']="Teacher";

		
	}
	elseif($_POST['uid']==2)
	{
		$_POST['uid']="Manager";

	}
	
	
		$dbconnect=mysqli_connect("localhost","root","","project");
		if(!$dbconnect)
		{
			echo "<div class='errors'>errors".mysqli_connect_error($dbconnect)."</div>";
		}
		//$dbconnect=mysqli_connect('localhost','root','','project') or die("div class='errors'>Fail Connection</div>");
		elseif($dbconnect)
		{
			$checkRepeated_ssn=mysqli_query($dbconnect,"Select * from regester where student_ssn='$_POST[ussn]'");
			$checkRepeated_email=mysqli_query($dbconnect,"Select * from regester where email='$_POST[uemail]'");
			$checkRepeated_phone=mysqli_query($dbconnect,"Select * from regester where phone='$_POST[uphone]'");	
			$count_ssn=mysqli_num_rows($checkRepeated_ssn);
			$count_email=mysqli_num_rows($checkRepeated_email);
			$count_phone=mysqli_num_rows($checkRepeated_phone);
			if($count_ssn>=1)
			{
				?>
				<div class='errors'> user Number Already Exists </div>
				<?PHP
			}
			elseif($count_email>=1)
			{
				?>
				<div class='errors'> Email Already Exists </div>
				<?PHP
			}
			elseif($count_phone>=1)
			{
				?>
				<div class='errors'> Phone Number Already Exists </div>
				<?PHP
			}
			else
			{
				
				
				$insertv=mysqli_query($dbconnect,"INSERT INTO regester  (Name,student_ssn,password,email,gender,phone,card,birth,nationality,type,school) values ('$_POST[uname]','$_POST[ussn]','$_POST[upassword]','$_POST[uemail]','$_POST[ugender]','$_POST[uphone]','$_POST[uid]','$_POST[uid]','$_POST[unational]','$_POST[uid]','$_POST[School]')") or die (mysqli_error($dbconnect));
				if($insertv && $_POST['uid']=="Teacher")
				{
					$subject=mysqli_query($dbconnect,"INSERT INTO teachers (Link,Subject) values ((select ID from regester where email='$_POST[uemail]'),'$_POST[subject]') ") or die ("inseret 2 F");
					

				}
				?>

				<div class='success'><?PHP echo "USer with This User Name ".$_POST['uname']."Registered As ".$_POST['uid']; ?></div>
				<?PHP

				
			}
			/****/
			
		}


	
	
}
/*if(!$_POST['scrmreg'])
{
	echo "zzz ";
}*/


?>

	
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