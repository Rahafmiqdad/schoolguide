<?PHP 
session_start();
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
									<div class="logo_text">schools gu<span>ide</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="newa.html">News</a></li>
									i
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
	
<?PHP
if($_POST['scrmreg'])
{
	$mdir="uploads/"; //fOLDER
	$birth="";
	$card="";
	$target_dir = dirname(__FILE__)."/uploads/";
	$first=$_FILES['sbirthcert']["name"]; //save pic name 
	$img1=$_FILES["sbirthcert"]["size"]; // save pic size
	$second=$_FILES['scard']["name"];
	$img2=$_FILES["scard"]["size"];
	$ups="0"; //number of pic uplode
	$imgs=array("jpg","jpeg","png");
	if($img1>0) //0=size
	{
		
		$checktype=strtolower(pathinfo($first,PATHINFO_EXTENSION)); //know type of file uplode
		if(in_array($checktype,$imgs)) //imgs=checktype
		{
			$def=$_FILES["sbirthcert"]["tmp_name"]; //save img as nickname
			$trans=move_uploaded_file($def,$target_dir.$first); //uplode img  to file 'uploads'
			if($trans) //if pic is uploade
			{
				$birth=$mdir.$first; //save pic path uploade/name.jpg and save in DB
				?>
				
				<?PHP
				$ups=$ups+1;
			}
			else
			{
				echo "<div class='errors'>type = ".$checktype. " size = ".$img1  ."</div>";
			}
		}
		else
		{
			?>
			<div class='errors'> error Array <?PHP echo $checktype; ?> </div>
			<?PHP
		}
		
	}
	if($img2>0)
	{
		
		$checktype=strtolower(pathinfo($second,PATHINFO_EXTENSION));
		if(in_array($checktype,$imgs))
		{
			$def=$_FILES["scard"]["tmp_name"];
			$trans=move_uploaded_file($def,$target_dir.$second);
			if($trans)
			{
				$card=$mdir.$second;
				$ups=$ups+1;
				?>
				
				<?PHP
			}
			else
			{
				echo "<div class='errors'>type = ".$checktype. " size = ".$img1  ."</div>";
			}
		}
		else
		{
			?>
			<div class='errors'> error Array <?PHP echo $checktype; ?> </div>
			<?PHP
		}
		
	}
	else
	{
		?>
		<div class="errors"> error main loop </div>
		<?PHP
	}
	if(empty($_POST['sname']) || !$_POST['sname'])
	{
		echo "<div class='errors'> User Name Is Required! </div>";
		
	}
	elseif(empty($_POST['school']) || !$_POST['school'] || !preg_match("/^[0-9]*$/",$_POST['school']))
	{
		header("location:index.html");
		
	}
	elseif(empty($_POST['snumber']) || !$_POST['snumber'])
	{
		echo "<div class='errors'> 	Studen Number Is Required! </div>";
		
	}
	elseif(empty($_POST['sgender']) || !$_POST['sgender'])
	{
		echo "<div class='errors'> 	Gender Is Required! </div>";
		
	}

	elseif(empty($_POST['semail']) || !$_POST['semail'])
	{
		echo "<div class='errors'> Email Is required</div>";
	}
	elseif(empty($_POST['sphone']) || !$_POST['sphone'])
	{
		echo "<div class='errors'> Phone Is required</div>";
	}
	elseif(empty($_POST['spassword']) || !$_POST['spassword'])
	{
		echo "<div class='errors'> Password Is Required! </div>";
	}
	elseif($_POST['rpassword']!=$_POST['spassword'])
	{
		echo "<div class='errors'> Password Not Match </div>";
	}
	
	elseif(empty($_POST['snational']) || !$_POST['snational'])
	{
		echo "<div class='errors'>Please Specify Your Nationality ! </div>";
	}
	elseif($img1<1 || $img2<1)
	{
		echo "<div class='errors'>Please Upload Required Images </div>";
	}
	elseif($ups<2)
	{
		echo "<div class='errors'> Make sre from upload images</div>";
	}	
	else
	{

		if($_POST['sgender']=='male')
		{
			$_POST['segender']='0';
		}
		elseif($_POST['sgender']=='female')
		{
			$_POST['sgender']='1';
		}
		
		$dbconnect=mysqli_connect("localhost","root","","project") or die ("<div class='errors'> OoOoOoPS! Covid-19 Found caused Fail connection  </div>");
		//$setdb=mysqli_select_db($dbconnect,"project");
		if(!$dbconnect)
		{
		echo "<div class='errors'> OOOOOPS ".mysqli_connect_error($dbconnect)."</div>";
		}
		//$dbconnect=mysqli_connect('localhost','root','','project') or die("div class='errors'>Fail Connection</div>");
		elseif($dbconnect)
		{
			$checkRepeated_ssn=mysqli_query($dbconnect,"Select * from regester where student_ssn='$_POST[snumber]'");
			$checkRepeated_email=mysqli_query($dbconnect,"Select * from regester where email='$_POST[semail]'");
			$checkRepeated_phone=mysqli_query($dbconnect,"Select * from regester where phone='$_POST[sphone]'");
			$count_ssn=mysqli_num_rows($checkRepeated_ssn);
			$count_email=mysqli_num_rows($checkRepeated_email);
			$count_phone=mysqli_num_rows($checkRepeated_phone);
			if($count_ssn>=1)
			{
				?>
				<div class='errors'> Student Number Already Exists </div>
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
			    $insertv=mysqli_query($dbconnect,"INSERT INTO regester (Name,student_ssn,password,email,gender,phone,card,birth,nationality,type,school,status) values ('$_POST[sname]','$_POST[snumber]','$_POST[spassword]','$_POST[semail]','$_POST[sgender]','$_POST[sphone]','$card','$birth','$_POST[snational]','Parent','$_POST[school]','pending')") or die (mysqli_error());
			}
			if($insertv)
			{
				?>
				<div class='success'><?PHP echo "$_POST[sname] "."Registeration Completed Successfully"; ?></div>
				<?PHP
			}
		}


	}

	
}
if(!$_POST['scrmreg'])
{
	echo "<div class='errors'>zzz</div> ";
}


?>

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