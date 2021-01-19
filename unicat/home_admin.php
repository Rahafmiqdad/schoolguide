<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
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
									<li><div class="question">Admin Account </div></li>
									
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div></div>
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
	<br>
	<br>
	<br>
	<br>
<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/user.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="Admin.php">Add Users</a></div>
							
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
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



	