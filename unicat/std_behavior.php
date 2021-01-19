r<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>students behavior</title>
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
            <br>
            <br>
            <div class="section_subtitle"><h2>Welcome to The  Schools Guide</h2></div>
          </div>
        </div>
      </div>
      <div class="row team_row" >
        
        
<!-- Team Item -->
        <div class="col-lg-3 col-md-6 team_col">
          <div class="team_item" style="margin-left: 100px">
            <div class="team_image"><img src="images/per.jpg" ></div>
            <div class="team_body">
              <div class="team_title"><a href="Personal.php">Personal informatin</a></div>
              
            </div>
          </div>
        </div>


        <!-- Team Item -->
        <div class="col-lg-3 col-md-6 team_col">
          <div class="team_item" style="margin-left: 140px">
            <div class="team_image"><img src="images/mark.jpg" ></div>
            <div class="team_body">
              <div class="team_title"><a href="Marks.php">Marks</a></div>
            </div>
          </div>
        </div>

        <!-- Team Item -->
        <div class="col-lg-3 col-md-6 team_col">
          <div class="team_item" style="margin-left: 180px">
            <div class="team_image"><img src="images/att.png" ></div>
            <div class="team_body">
              <div class="team_title"><a href="std_behavior.php">Students behavior</a></div>
              
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

	<?PHP
	if($_SESSION['urname'] && $_SESSION['type']=="Teacher")
	{
	?>
	<div class='success' id='resp'></div>
	<button id='addr' onclick='addnewr(this.value)' value='t1' class="counter_form_button" style="width: 50px;"> Add </button>
	<table id="customers" class='tble'>
  <tr>
     
    <th>Student-SSN</th>
	<th>Name</th>
    <th>Punishment</th>
    <th>Date</th>
    <th>Reason</th>
  </tr>
  <?PHP
  $dbcon=mysqli_connect("localhost","root","","Project") or die ("C Err!");
  $punish=mysqli_query($dbcon,"SELECT date,Name,descr,link,reason,student_ssn FROM std_behavior join regester on std_behavior.link=regester.ID and std_behavior.type='1'") or die("E Exec!");
  $fre=mysqli_query($dbcon,"SELECT date,Name,descr,link,reason,student_ssn FROM std_behavior join regester on std_behavior.link=regester.ID and std_behavior.type='3'") or die ("E Exec 2!");
  //i can add multi punish or fre
  while($getp=mysqli_fetch_array($punish))
  {
	  ?>
	  <tr>
	  <td><?PHP echo $getp['student_ssn']; ?></td>
	  <td><?PHP echo $getp['Name']; ?></td>
	  <td><?PHP echo $getp['descr']; ?></td>
	  <td><?PHP echo $getp['date']; ?></td>
	  <td><?PHP echo $getp['reason']; ?></td>
	  </tr>
	  <?PHP
  }
  
  ?>

</table>
<br>
<br>
<button id='addr1' onclick='addnewr(this.value)' value='t2' class="counter_form_button" style="width: 50px;"> Add </button>
<table id="customers" class='tble'>
  <tr>
    <th>Student-SSN</th>
	<th>Name</th>
    <th>Franchises</th>
    <th>Date</th>
    <th>Reason</th>
  </tr>
  <?PHP
  while($getfre=mysqli_fetch_array($fre))
  {
	  ?>
	  <tr>
	  <td><?PHP echo $getfre['student_ssn']; ?></td>
	   <td><?PHP echo $getfre['Name']; ?></td>
	  <td><?PHP echo $getfre['descr']; ?></td>
	  <td><?PHP echo $getfre['date']; ?></td>
	  <td><?PHP echo $getfre['reason']; ?></td>
	  </tr>
	  <?PHP
  }
  ?>

</table>
<?PHP
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
<script>
var orig_tr=document.getElementsByClassName("tble");
function tdids() //give id  to cells and rows **(i for tables) (c for rows) (z for cells)
{
	var count_ts=document.getElementsByClassName("tble"); //save how much table i have
	for(var i=0;i<count_ts.length;i++)
	{
		//var count_tr=document.getElementsByClassName("tble");
		
		if(count_ts[i].rows.length>0 || count_ts[i].rows.length>orig_tr[i].rows.length) 
		{
			for(c=0;c<count_ts[i].rows.length;c++) //c==rows has id
			{
				var isid=count_ts[i].rows[c].hasAttribute("id"); //get id
				if(isid==false) //check id 
				{
					if(i==0) //0=table1
					{
						count_ts[i].rows[c].id='t1r'+c;
					}
					else if(i==1)
					{
						count_ts[i].rows[c].id='t2r'+c;
					}
				    
				}
				var pidtd=count_ts[i].rows[c].cells;
				for(var z=0;z<pidtd.length;z++)
				{
					if(i==0)
					{
						pidtd[z].id='t1'+c+z;
					}
					else if(i==1)
					{
						pidtd[z].id='t2'+c+z;
					}
				}
			}
			
		}
	}
}
function addnewr(bvalue) //add anew row in table 
{
	if(bvalue=='t1') //if click on button number1 do this
	{
		var t1=document.getElementsByClassName("tble")[0]; //add row in table number1
		var ckcdid=document.getElementById("def");//check the table if has empty row 
		var ckcdid1=document.getElementById("jf");//has data but not transfer to database
	    if(t1.contains(ckcdid)==false && t1.contains(ckcdid1)==false)
	    {
		    var newr=t1.insertRow();
			newr.setAttribute("id","def"); //add new empty row id=def
		    var cell1 = newr.insertCell(0);
		    cell1.setAttribute("contenteditable","true"); //user can edit the content
		    cell1.setAttribute("onkeyup","full(this.parentElement.id)"); //
			var cell2 = newr.insertCell(1);
		    var cell3 = newr.insertCell(2);
		    cell3.setAttribute("contenteditable","true");
		    cell3.setAttribute("onkeyup","full(this.parentElement.id)");
		    var cell4 = newr.insertCell(3);
		    cell4.setAttribute("contenteditable","true");
		    cell4.setAttribute("onkeyup","full(this.parentElement.id)");
			var cell5 = newr.insertCell(4);
		    cell5.setAttribute("contenteditable","true");
		    cell5.setAttribute("onkeyup","full(this.parentElement.id)");
	    }
		
	}
	else if(bvalue=='t2')
	{
		var t2=document.getElementsByClassName("tble")[1];
		var ckcdid=document.getElementById("def1");
		var ckcdid1=document.getElementById("jf1");
	    if(t2.contains(ckcdid)==false && t2.contains(ckcdid1)==false)
	    {
		    var newr=t2.insertRow();
			newr.setAttribute("id","def1");
		    var cell1 = newr.insertCell(0);
		    cell1.setAttribute("contenteditable","true");
		    cell1.setAttribute("onkeyup","full(this.parentElement.id)");
			var cell2 = newr.insertCell(1);
		    var cell3 = newr.insertCell(2);
		    cell3.setAttribute("contenteditable","true");
		    cell3.setAttribute("onkeyup","full(this.parentElement.id)");
		    var cell4 = newr.insertCell(3);
		    cell4.setAttribute("contenteditable","true");
		    cell4.setAttribute("onkeyup","full(this.parentElement.id)");
			var cell5 = newr.insertCell(4);
		    cell5.setAttribute("contenteditable","true");
		    cell5.setAttribute("onkeyup","full(this.parentElement.id)");
	    }
		tdids();
	}
}

function full(parid)//check the table is full
{
	if(parid=="def" || parid=="jf") 
	{
		var testalltd=1; //varible to test the  number of fill cells
		var tdlen=document.getElementById(parid).cells; //varible store data in cells 
		for(var h=0;h<tdlen.length;h++) //for loop to fill the cells.. tdlen.length= number of cells in row=4
		{
			if(h==1)
			{
				continue;
			}
			if(tdlen[h].innerHTML!="")
			{
				testalltd=testalltd+1;
			}
			if(tdlen[h].innerHTML=="")
			{
				testalltd=testalltd-1; //if the cell is empty the varible testalltd-1
				if(document.getElementById("jf")) //if id is jf
				{
					testalltd=testalltd-1; //delete data in cells
					document.getElementById("jf").setAttribute("id","def"); //change the jf to def
				}
			}
			if(testalltd==tdlen.length && tdlen[h].innerHTML!="") 
			{
				//alert("all full "+testalltd);
				document.getElementById("def").setAttribute("id","jf");
				document.getElementById("addr").setAttribute("onclick","insertdata(this.id)"); //this.id refar to button
			}
		}
	}
	else if(parid=="def1" || parid=="jf1")
	{
		var testalltd=1;
		var tdlen=document.getElementById(parid).cells;
		for(var h=0;h<tdlen.length;h++)
		{
			if(h==1)
			{
				continue;
			}
			if(tdlen[h].innerHTML!="")
			{
				testalltd=testalltd+1;
			}
			if(tdlen[h].innerHTML=="")
			{
				testalltd=testalltd-1;
				if(document.getElementById("jf1"))
				{
					testalltd=testalltd-1;
					document.getElementById("jf1").setAttribute("id","def1");
				}
			}
			if(testalltd==tdlen.length && tdlen[h].innerHTML!="")
			{
				//alert("all full "+testalltd);
				document.getElementById("def1").setAttribute("id","jf1");
				document.getElementById("addr1").setAttribute("onclick","insertdata(this.id)");
			}
		}
	}
	
}
function insertdata(bid) //bid=this.id for button1
{
	var getrdata;
	var dtype;
	switch(bid)
	{
		case "addr":
		getrdata=document.getElementById("jf"), //get jf to varible 
		dtype="1"; //pun
		break;
		case "addr1":
		getrdata=document.getElementById("jf1"),
		dtype="3"; //fre
		break;
	}

	if(getrdata)
	{
		var tdvs=[]; //empty array store the data in cells
		var fetchinfo=getrdata; //varible u
		for(var q=0;q<fetchinfo.cells.length;q++)
		{
			tdvs.push(fetchinfo.cells[q].innerHTML); //fill data in array from cells
		}
		var request=new XMLHttpRequest();
		request.onreadystatechange=function() {
			if(this.readyState=="4" && this.status=="200") // 4 mean the server is  okay ... 200 mean the no error
			{
				document.getElementById("resp").style.color="green";
				var resp=document.getElementById("resp").innerHTML=this.responseText;
				var filsname=this.responseText.indexOf(",");
				var cutfsn=this.responseText.substr(0,filsname);
				var tdsname=getrdata.cells[1].innerHTML=cutfsn;
			}
		}
		var sn=tdvs[0];
		var sname=tdvs[1]
		var desc=tdvs[2];
		var time=tdvs[3];
		var rsn=tdvs[4];
		var param="sn="+sn+"&sname="+sname+"&desc="+desc+"&date="+time+"&rsn="+rsn+"&type="+dtype;
		request.open("POST","stdb.php",true);
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
		request.send(param);
	}
}
tdids();
</script>