<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Marks</title>
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
            <div class="section_subtitle"><h2>Welcome to The The The Schools Guide</h2></div>
          </div>
        </div>
      </div>
      <div class="row team_row">
        
        
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
if($_SESSION['urname'] && $_SESSION['type']=='Teacher')
{
	$dbconnect=mysqli_connect("localhost","root","","project") or die ("<div class='errors'> OoOoOoPS! Sorry  It Seems There Is Problem With Connection To Data In Marks.php  </div>");
	$get_mem_type=mysqli_query($dbconnect,"Select * from regester where email='$_SESSION[urname]'") or die ("<div class='errors'>OoOoOoPS Sorry  It seems That There Is Problem With Executing Query in Marks.php! </div>");
    $mem_type=mysqli_fetch_array($get_mem_type);
	if($mem_type['type']!="Teacher")
	{
		?>
		<div class='errors'> Sorry Your Aren't Authorized To View This Page </div>
		<?PHP
	}
	elseif($mem_type['type']=="Teacher")
	{
		?>
		<div class='success' id='resp'></div>
		<button id='addr' onclick='addnewr()' class="counter_form_button" style="width: 50px;"> Add </button>
			<table id="customers" >
			<tr>
			<th>Students SSN</th>
			<th>Students Name</th>
			
			<th>Class</th>
			<th>First</th>
			<th>Second</th>
			<th>third</th>
			<th>Final</th>
			<th>delete</th>
			</tr>
			<?PHP
		/* query get subject which teacher teach  */
		$sub=mysqli_query($dbconnect,"Select * from teachers Where Link=(Select ID from regester where email='$_SESSION[urname]')") or die("<div class='errors'>OoOoOoPS Sorry Sweety Rahaf It seems That There Is Problem With Executing Query (2) in Marks.php! </div>");
		/* export subject */
		$get_sub=mysqli_fetch_array($sub);
		/**/
		$students=mysqli_query($dbconnect,"Select * from studentm where subject='$get_sub[Subject]'");
		$count_m=mysqli_num_rows($students);
		if($count_m<1)
		{
			/* query to get students info (ssn,name,rsults,subject which teacher teach , use join to merge tables data) */
			$marks_info=mysqli_query($dbconnect,"select name , class,subject,result1,result2,result3,result4 from regester INNER join studentm on studentm.link=regester.ID and studentm.subject='$get_sub[Subject]'");
			$fetch_info=mysqli_fetch_array($marks_info);
			?>
			<div class='errors'> There Is No Result </div>
			<?PHP
		}
		elseif($count_m>0)
		{
			?>

			<?PHP
			$marks_info=mysqli_query($dbconnect,"select name,student_ssn , class,subject,result1,result2,result3,result4 from regester INNER join studentm on studentm.link=regester.ID and studentm.subject='$get_sub[Subject]'");
			
			//$fetch_info_p=mysqli_fetch_array($marks_info);
			?>
			<?PHP
			while($fetch_info=mysqli_fetch_array($marks_info))
			{
				?>
				<tr>
				<td><?PHP echo $fetch_info['student_ssn']; ?></td>
				<td><?PHP echo $fetch_info['name']; ?></td>
				<td><?PHP echo $fetch_info['class']; ?></td>
				<td contenteditable="true"	onfocus="checkv(this.id)" onblur="appch(this.id)"><?PHP echo $fetch_info['result1']; ?> </td>
				<td contenteditable="true"	onfocus="checkv(this.id)" onblur="appch(this.id)"><?PHP echo $fetch_info['result2']; ?> </td>
				<td contenteditable="true"	onfocus="checkv(this.id)" onblur="appch(this.id)"><?PHP echo $fetch_info['result3']; ?>  </td>
				<td contenteditable="true"	onfocus="checkv(this.id)" onblur="appch(this.id)"><?PHP echo $fetch_info['result4']; ?> </td>
				<td><button id='del' class="counter_form_button" style="width: 50px;" onclick='deld(this.parentElement.id)'> delete </button></td>
				</tr>
				<?PHP
			}
			
			?>


			<?PHP
		}
		?>
		</table>
		<input type='hidden' value="<?PHP echo $get_sub['Subject']; ?>" id='keys'>
		
			
		<?PHP
	}
}

?>



<script>
/************** Applying ids for tds and btns  *************/
var count_td_def;
var tid=document.getElementById("customers");
var orig_count_tr=document.getElementById("customers").rows;
var count_tr=document.getElementById("customers").rows;
var pbtns=document.getElementsByClassName("toedit");

function tdids()
{

if(count_tr.length>0 || count_tr.length>orig_count_tr.length)
{
for(var i=0;i<count_tr.length;i++)
{
	var isid=tid.rows[i].hasAttribute("id");
	if(isid==false)
	{
		tid.rows[i].id=i;
	}
	var pidtd=document.getElementById("customers").rows[i].cells;
	for(var z=0;z<pidtd.length;z++)
	{
		var idtd=document.getElementById("customers").rows[i].cells[z];
		var idt=idtd.setAttribute("id","A"+i+z); //i=table c=rows z=cells
		var getid=idtd.getAttribute("id");
	}
}

}
}
/*  add new row in table */
function addnewr()
{
	/*  */
	if(!document.getElementById("def") && !document.getElementById("jf"))
		var newr=tid.insertRow();
		newr.setAttribute("id","def");

		count_td_def=document.getElementById("def").cells;
		var cell1 = newr.insertCell(0);
		cell1.setAttribute("contenteditable","true");
		cell1.setAttribute("onkeyup","full()");
		var cell2 = newr.insertCell(1);
		cell2.setAttribute("contenteditable","false");
		cell2.setAttribute("onkeyup","full()");
		var cell3 = newr.insertCell(2);
		cell3.setAttribute("contenteditable","true");
		cell3.setAttribute("onkeyup","full()");
		var cell4 = newr.insertCell(3);
		cell4.setAttribute("contenteditable","true");
		cell4.setAttribute("onkeyup","full()");
		var cell5 = newr.insertCell(4);
		cell5.setAttribute("contenteditable","true");
		cell5.setAttribute("onkeyup","full()");
		var cell6 = newr.insertCell(5);
		cell6.setAttribute("contenteditable","true");
		cell6.setAttribute("onkeyup","full()");
		var cell7 = newr.insertCell(6);
		cell7.setAttribute("contenteditable","true");
		cell7.setAttribute("onkeyup","full()");
		tdids();
}
function full()
{
	var testalltd=1;
	for(var c=0;c<count_td_def.length;c++)
{
	if(c==1)
	{
		continue;
	}
	if(count_td_def[c].innerHTML!="")
	{
		testalltd=testalltd+1;
	}
	if(count_td_def[c].innerHTML=="")
	{
		testalltd=testalltd-1;
		var jfid=document.getElementById("jf");
		jfid.setAttribute("id","def");
	}

	if(testalltd==count_td_def.length && count_td_def[c].innerHTML!="")
	{
		
		var defid=document.getElementById("def");
		defid.setAttribute("id","jf");
		var btnid=document.getElementById("addr");
		btnid.setAttribute("onclick","insertdata()");
	}

}
}
function insertdata()
{
	var tdvs=[];
	var rowtd=document.getElementById("jf");
	var tdv;
	for(var j=0;j<rowtd.cells.length;j++)
	{
		tdv=rowtd.cells[j].innerHTML;
		tdvs.push(tdv); //add 8eiam in array
		
	}
	var request=new XMLHttpRequest();
	request.onreadystatechange=function() {
	if(this.readyState=="4" && this.status=="200")
	{
		document.getElementById("resp").style.color="green";
		var resp=document.getElementById("resp").innerHTML=this.responseText;
		var filsname=this.responseText.indexOf(",");
		var cutfsn=this.responseText.substr(0,filsname);
		var tdsname=document.getElementById("jf").cells[1].innerHTML=cutfsn;
		rowtd.setAttribute("id",count_tr.length-1);
		for(var q=0;q<rowtd.cells.length;q++)
	   {
		   rowtd.cells[q].removeAttribute("onkeyup");
		   rowtd.cells[q].setAttribute("onfocus","checkv(this.id)");
		   rowtd.cells[q].setAttribute("onblur","appch(this.id)");
		
	   }
	   if(this.responseText.indexOf("Successfully")>=0)
	   {
		   var btnid=document.getElementById("addr");
		   btnid.setAttribute("onclick","addnewr()")
	   }
    }
	}
	var sn=tdvs[0];
	var cls=tdvs[2];
	var nro=tdvs[3];
	var nrt=tdvs[4];
	var nrth=tdvs[5];
	var nrf=tdvs[6];
	var teacsubj=document.getElementById("keys").value;
	var paramsn="nsn="+sn+"&subjt="+teacsubj+"&sclass="+cls+"&nr1="+nro+"&nr2="+nrt+"&nr3="+nrth+"&nr4="+nrf;
	request.open("POST","medit.php",true);
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	request.send(paramsn);
}

var checkov;
var origv;
function checkv(elemid)
{
	orig v=document.getElementById(elemid).innerHTML;
}
function appch(elemid)
{
	checkov=document.getElementById(elemid).innerHTML;
	var pariid=document.getElementById(elemid).parentElement.id;
	
	if(checkov!=origv)
	{
		if(/^\d+$/.test(checkov))
		{
			
			var gcix=document.getElementById(elemid).cellIndex;
			var gthix=document.getElementById("customers").rows[0].cells[gcix].innerHTML;
			var datacol;
			if(gthix=="First")
			{
			   datacol="result1";
			   
			}
			if(gthix=="Second")
			{
			   datacol="result2";
			}
			if(gthix=="third")
			{
			   datacol="result3";
			}
			if(gthix=="Final")
			{
			   datacol="result4";
			}
			var request=new XMLHttpRequest();
			request.onreadystatechange=function() {
			if(this.readyState=="4" && this.status=="200")
			{
				document.getElementById("resp").style.color="green";
				var resp=document.getElementById("resp").innerHTML=this.responseText;
		    }
		}	
		var sn=document.getElementById(pariid).cells[0].innerHTML;
		var changedv=document.getElementById(elemid).innerHTML;
		var subj=document.getElementById("keys").value;
		var params="sn="+sn+"&changedv="+changedv+"&dcl="+datacol+"&subj="+subj;
		request.open("POST","medit.php",true);
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		request.send(params);
		}
		else
		{
			document.getElementById(elemid).innerHTML=origv;
			document.getElementById("resp").style.color="red";
			document.getElementById("resp").innerHTML="Not Numbers";
		}
	}
}
function deld(btid)
{
	var eleminfo=document.getElementById(btid);
	var rinfo=[];
	for(i=0;i<eleminfo.parentElement.cells.length;i++)
	{
		if(i==eleminfo.parentElement.cells.length-1)
		{
			continue;
		}
		var insr= rinfo.push(eleminfo.parentElement.cells[i].innerHTML);
		//alert(rinfo[i]+" "+i);
		
	}
	
	        var request=new XMLHttpRequest();
			request.onreadystatechange=function() {
			if(this.readyState=="4" && this.status=="200")
			{
				var resp=document.getElementById("resp").innerHTML=this.responseText;
				document.getElementById("resp").style.color="green";
				if(this.responseText.indexOf("Row Deleted")>=0)
				{
					document.getElementById(eleminfo.parentElement.id).remove();
				}
				
			}
		}
		var dsn=rinfo[0];
		var dr1=rinfo[3];
		var dr2=rinfo[4];
		var dr3=rinfo[5];
		var dr4=rinfo[6];
		var tsubj=document.getElementById("keys").value;
		var dparams="dsn="+dsn+"&dr1="+dr1+"&dr2="+dr2+"&dr3="+dr3+"&dr4="+dr4+"&tsubj="+tsubj;
		request.open("POST","medit.php",true);
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		request.send(dparams);
		
}
tdids();
</script>
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