<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add users</title>
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
						<h2 class="counter_title">Add Users</h2>
						
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="add.php" method="post">
							<h3>Add teacher and manager</h3>
							<br>
							<input type="text" class="counter_input" placeholder="Teacher/manger name"  name="uname" >
							<input type="text" class="counter_input" placeholder="Teacher/mangerSSN" name="ussn" >
                           <input type="email" class="counter_input" placeholder="Teacher/manger email" name="uemail" >
                
							<div style="margin-right: 60%;">
								<input type="radio" id="male" value="male" name='ugender'>
								  <label for="male">Male</label>
                                  <input type="radio" id="female" value="female" name='ugender'>
                                  <label for="female">Female</label>
							</div>
                           <input type="password" class="counter_input" placeholder="password:" name="upassword" >
						    <input type="password" class="counter_input" placeholder="password:" name="urpassword" >
                           <input type="phone" class="counter_input" placeholder="Teacher/manger phone" name="uphone" >
						<select name="unational" id="counter_select" class="counter_input counter_options" >
								<option disabled="disabled">Nationality:</option>
								<option value="Jordanian">Jordanian</option>
                                <option value="Syrian">Syrian</option>
                                <option value="Egyptian">Egyptian</option>
                                <option value="Palestinian">Palestinian</option>
                                <option value="Iraqi">Iraqi</option>
                                <option value="Saudi">Saudi</option>
                                <option value="Otherwise">Otherwise</option>
							</select>
							<select name="subject"  class="counter_input counter_options" >
								<option >Maths</option>
								<option >Arabic</option>
                                <option >English</option>
                                <option >Biology</option>
                                <option >chemistry</option>
                                <option >gelogy</option>
                                <option >islamic</option>
                                <option >sport</option>
                                <option>manager</option>
                                
							</select>


							<select name="uid" class="counter_input counter_options">
							<option disabled> Select User Catagory </option>
								<option value="1">Teacher</option>
								<option value="2">Manager</option>
								
							</select>
							
							<select name="School" class="counter_input counter_options">
										<option  disabled="disabled" selected="selected">- - - - -Choose school- - - - - </option>
	<option value="1">Sakina Bint Al Hussein Elementary School for Girls</option>
    <option value="2">Ain Galot Comprehensive School for Girl</option>
    <option value="3">Saad bin Abi Waqas Secondary School for Boys</option>
    <option value="4">Umm Hbiba Elementary school for girls</option>
    <option value="5">Umm salamah Elementray School for Girls</option>
    <option value="6">Khawlah Bint Al Azwar Elementary School for Girls</option>
    <option value="7">Maryam Bint Omran Elementary Mixed School</option>
    <option value="8">Aidoun Comprehensive Secondary School for Girl</option>
    <option value="9">Aidon Elementary School for Boys</option>
    <option value="10">Ibn Zaidoun Elementary School for Boys</option>
    <option value="11">Al-Qassila Secondary Comprehensive School for Girls</option>
    <option value="12">Prince Al-Hassan Comprehensive Secondary School for Boys</option>
    <option value="13">Dhahiyat Al-Hussein Comprehensive School for Girls</option>
    <option value="14">Dhahiyat Al-Hussein Elementary School</option>
    <option value="15">Al-Hussein Elementary School for Boys</option>
    <option value="16">Khaled Bin Al-Waleed Secondary School for Boys</option>
    <option value="17">Abu Bakr Al-Siddiq Elementary School for Boys</option>
    <option value="18">Al-Qadisiyah Primary School for Girls</option>
							</select>
							<div>
 
							<button value='abcde' type="submit" class="counter_form_button" style="width: 50px;" name='uadd'>Save</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>


	