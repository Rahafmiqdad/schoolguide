<?php
function fetch_data()
{
    if(isset($_POST['gender'])){
       // print_r($_POST['gender']);
        $output = '';
        $conn = mysqli_connect("localhost", "root", "", "project");
        $sql = "SELECT * FROM regester where gender ='$_POST[gender]' ";

        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<tr>  
<td>'.$row["ID"].'</td>  
<td>'.$row["Name"].'</td>  
<td>'.$row["student_ssn"].'</td>  
<td>'.$row["email"].'</td>  
</tr>  
';
        }
        return $output;
    }else{

        $output = '';
        $conn = mysqli_connect("localhost", "root", "", "project");
        $sql = "SELECT * FROM regester ORDER BY ID";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $output .= '<tr>  
<td>'.$row["ID"].'</td>  
<td>'.$row["Name"].'</td>  
<td>'.$row["student_ssn"].'</td>  
<td>'.$row["email"].'</td>  
</tr>  
';
        }
        return $output;
    }


}
if(isset($_POST["generate_pdf"]))
{
    require_once('tcpdf.php');
    $date = date("Y/m/d") ;
    $time = date("H:m:s") ;
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Test");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 11);
    $obj_pdf->AddPage();
    $content = '';
    $content .= '  
<h4 align="center">Teacher Report</h4><br /> 
<table border="1" cellspacing="0" cellpadding="3">  
<tr>  
<th width="5%">Id</th>  
<th width="30%">Name</th>  
<th width="15%">SSN</th>  
<th width="50%">Email</th>  
</tr>  
';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
<br />
<div class="container">
    <h4 align="center"> All users</h4><br />
    <div class="table-responsive">
        <div class="col-md-12" align="right">
            <form method="post">
                <select name="gender" id="gender">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                </select>
                <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />
            </form>
        </div>
        <br/>
        <br/>
        <table class="table table-bordered">
            <tr>
                <th width="5%">Id</th>
                <th width="30%">Name</th>
                <th width="15%">SSN</th>
                <th width="50%">Email</th>
            </tr>
            <?php
            echo fetch_data();
            ?>
        </table>
    </div>
</div>
</body>
</html>