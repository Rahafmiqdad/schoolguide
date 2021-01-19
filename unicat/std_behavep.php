<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>students Behavior</title>
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
                  <div class="logo_text">schools gu<span>ide</span></div>
                </a>
              </div>
              <nav class="main_nav_contaner ml-auto">
                <ul class="main_nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="News.html">News</a></li>
                  
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
    <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#14bdee;
  color: white;
}
</style>    
  </header>

  <!-- Menu -->

  <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    
    <nav class="menu_nav">
      <ul class="menu_mm">
        <li class="menu_mm"><a href="index.php">Home</a></li>
        <li class="menu_mm"><a href="about.html">About</a></li>
        <li class="menu_mm"><a href="news.html">News</a></li>
       
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
            
            <div class="section_subtitle"><h2>Welcome to The  Schools Guide</h2></div>
          </div>
        </div>
      </div>
      <div class="row team_row">
        
        
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item" style="margin-left: 100px">
						<div class="team_image"><img src="images/s.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="std_info.php">Student informatin</a></div>
							
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col" style="margin-left: 180px ">
					<div class="team_item">
						<div class="team_image"><img src="images/sm.png" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="std_mark.php"> Student Marks</a></div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col" style="margin-left: 100px">
					<div class="team_item">
						<div class="team_image"><img src="images/sp.png" alt="" ></div>
						<div class="team_body">
							<div class="team_title"><a href="std_behavep.php"> Student behavior</a></div>
							
						</div>
					</div>
				</div>

        <!-- Team Item -->


      </div>
    </div>
  </div>
			<?PHP
			if($_SESSION['urname'] && $_SESSION['type']=="Parent")
			{
				?>
				<table id="customers">
				<tr>
				<th>Student-SSN</th>
				<th>Punishment</th>
				<th>Date</th>
				<th>Reason</th>
				</tr>
				<?PHP
				
				$dbcon=mysqli_connect("localhost","root","","project") or die("C Err");
				
				$sbp=mysqli_query($dbcon,"SELECT date,descr,link,reason,student_ssn FROM std_behavior join regester on std_behavior.link=regester.ID and std_behavior.type='1' and regester.email='$_SESSION[urname]'") or die("Err Exec!".mysqli_error($dbcon));
				$sbf=mysqli_query($dbcon,"SELECT date,descr,link,reason,student_ssn FROM std_behavior join regester on std_behavior.link=regester.ID and std_behavior.type='3' and regester.email='$_SESSION[urname]'") or die("Err Exec!".mysqli_error($dbcon));
				$nr=mysqli_num_rows($sbp);
				$nr2=mysqli_num_rows($sbf);
				if($nr<1 && $nr2<1)
				{
					?>
					<div class='errors'> There Are No Results To Show </div>
					<?PHP
				}
				if($nr>=1)
				{
					while($getp=mysqli_fetch_array($sbp))
				   {
					   ?>
					   <tr>
					   <td><?PHP echo $getp['student_ssn']; ?></td>
					   <td><?PHP echo $getp['descr']; ?></td>
					   <td><?PHP echo $getp['date']; ?></td>
					   <td><?PHP echo $getp['reason']; ?></td>
					   </tr>
					   <?PHP
					
				   }
				}
				?>
				</table>
				<table id="customers">
				<tr>
				 <th>Student-SSN</th>
				 <th>Franchises</th>
				 <th>Date</th>
				 <th>Reason</th>
				</tr>
				<?PHP
				if($nr2>=1)
				{
					
					while($getf=mysqli_fetch_array($sbf))
					{
						?>
						<tr>
						<td><?PHP echo $getf['student_ssn']; ?></td>
						<td><?PHP echo $getf['descr']; ?></td>
						<td><?PHP echo $getf['date']; ?></td>
						<td><?PHP echo $getf['reason']; ?></td>
						</tr>
						<?PHP
					}
				}
				?>
				</table>
				<?PHP
				?>
				
				
				<?PHP
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