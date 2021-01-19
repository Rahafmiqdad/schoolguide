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
										<div>info.deercreative@gmail.com</div>
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
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="newa.html">News</a></li>
									
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
if($_POST['llogin'])
{
	
	if(empty($_POST['lssn']) || !$_POST['lssn'])
		
		{
			
			?>
			<div class='errors'> Please Enter Your SSN </div>
			<?PHP
		}
	elseif(empty($_POST['lpass']) || !$_POST['lpass'])
	   {
		?>
		<div class='errors'> Please Enter Your Password </div>
		<?PHP
	   }

		$dbconnect=mysqli_connect("localhost","root","","project") or die ("<div class='errors'> OoOoOoPS! Covid-19 Found caused Fail connection  </div>");
		if($dbconnect)
		{
			$validate_v=mysqli_query($dbconnect,"Select * from  regester where student_ssn ='$_POST[lssn]' and password ='$_POST[lpass]'") or die ("<div class='errors'>Query Faild</div>");
			$num_data=mysqli_num_rows($validate_v);
			$get_data=mysqli_fetch_array($validate_v);
			if($num_data==1)
			{
				?>
				<div class='success'>Login Successffull</div>
				<?PHP
				if($get_data['type']=="Teacher")
				{
					$_SESSION['urname']=$get_data['email'];
					$_SESSION['type']=$get_data['type'];
					header("location:teacher.php");
				}
				if($get_data['type']=="Manager")
				{
					$_SESSION['urname']=$get_data['email'];
					$_SESSION['type']=$get_data['type'];
					header("location:manager.php");
				}
				if($get_data['type']=="Parent")
				{
					$_SESSION['urname']=$get_data['email'];
					$_SESSION['type']=$get_data['type'];
					header("location:Parent.php");
				}
				if($get_data['type']=="Admin")
				{
					$_SESSION['urname']=$get_data['email'];
					$_SESSION['type']=$get_data['type'];
					header("location:home_admin.php");
				}
			}
			elseif($num_data==0)
			{
				?>
				<div class='errors'> Invalid Login Info Please Make Sure From Info Which You entered </div>
				<?PHP
			}
			
		}
		else
		{
			?>
			<div class='errors'> Faiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiil!</div>
			<?PHP
		}
	
}
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
                      <li>Phone: 0000000000</li>
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
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="js/custom.js"></script>
</body>
</html>