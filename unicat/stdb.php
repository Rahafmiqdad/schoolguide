<?PHP
session_start();
if(isset($_POST['sn']) && isset($_POST['desc']) && isset($_POST['date']) && isset($_POST['rsn'])  && isset($_POST['type']) && isset($_POST['sname']))
{
	$dbc=mysqli_connect("localhost","root","","project") or die ("Connection err!");
	if($dbc)
	{
		$getstlink=mysqli_query($dbc,"Select * from regester where student_ssn='$_POST[sn]'") or die("Err executing");
		$fetchlink=mysqli_fetch_array($getstlink);
		$result=mysqli_num_rows($getstlink);
		if($result==0)
		{
			echo "There Is No Student With This SSN";
		}
		$insetdata=mysqli_query($dbc,"insert into std_behavior (link,descr,date,reason,type) values ('$fetchlink[ID]','$_POST[desc]','$_POST[date]','$_POST[rsn]','$_POST[type]')") or die("err inserting".mysqli_error($dbc));
		if($insetdata)
		{
			$getname=mysqli_query($dbc,"select name from regester where student_ssn='$_POST[sn]'") or die ("Failed To Exec Query");
			$fetchname=mysqli_fetch_array($getname);
			
		}
		if($insetdata)
		{
			echo $fetchname['name'].",Data Inserted Successfully ";
		}
	}
}
?>