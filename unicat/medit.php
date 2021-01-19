
<?PHP
$dbconnect=mysqli_connect("localhost","root","","project") or die("<div class='errors'> Ax Connection Error </div>");
if(isset($_POST['sn']) && isset($_POST['changedv']) && isset($_POST['dcl']) && isset($_POST['subj']))
{
	
	if(!preg_match("/^[0-9]*$/",$_POST['changedv']))
	{
		echo "<font color='red'>Value Change Detected , Cancelled , Result Must Be number <BR>[Operation Terminated , No Rows Effected]</font>";
		exit;
	}
	$qry=mysqli_query($dbconnect,"UPDATE studentm set $_POST[dcl]='$_POST[changedv]' where subject='$_POST[subj]' and link=(select ID from regester where student_ssn='$_POST[sn]')");
	if($qry)
	{
		echo "Changed Successfully".$_POST['sn'];
	}
	else
	{
		echo "<font color='red'>failed ".mysqli_error($dbconnect)."</font>";
		
	}
}
elseif(isset($_POST['nsn']) && isset($_POST['nr1']) && isset($_POST['nr2']) && isset($_POST['nr3']) && isset($_POST['nr4']) && isset($_POST['subjt']) && isset($_POST['sclass']))
{
	$getinfo=mysqli_query($dbconnect,"select * from regester WHERE student_ssn='$_POST[nsn]'") or die ("Error Executing");
	$namesn=mysqli_fetch_array($getinfo);
	$count_r=mysqli_num_rows($getinfo);
	if($count_r<1)
	{
		echo "There Is No Result With This SSN ".$_POST['nsn'];
	}
	elseif($count_r==1)
	{
		$insert_data=mysqli_query($dbconnect,"insert into studentm (link,class,subject,result1,result2,result3,result4) values ('$namesn[ID]','$_POST[sclass]','$_POST[subjt]','$_POST[nr1]','$_POST[nr2]','$_POST[nr3]','$_POST[nr4]')") or die("Error Inserting".mysqli_error($dbconnect));
		if($insert_data)
		{
			echo $namesn['Name'].", Added Result Successfully";
		}
		else
		{
			echo"No There Is An Error";
		}
	}
}
elseif(isset($_POST['dsn']) && isset($_POST['dr1']) && isset($_POST['dr2']) && isset($_POST['dr3']) && isset($_POST['dr4']) && isset($_POST['tsubj']))
{
	$query=mysqli_query($dbconnect,"delete from studentm where link=(select ID from regester where student_ssn='$_POST[dsn]') and result1='$_POST[dr1]' and result2='$_POST[dr2]' and result3='$_POST[dr3]' and result4='$_POST[dr4]' and subject='$_POST[tsubj]'");
	if($query)
	{
	?>
	Row Deleted
	<?PHP
	}
}
else
{
	echo "No";
}
?>
