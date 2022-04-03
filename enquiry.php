<?php session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["uid"]))
{ 
?>

<?php
	if(isset($_REQUEST["sbmt"]))
	{
		
		$enquiry=$_REQUEST["enq"];
	
		include 'db.php';
		$qry ="INSERT INTO enquiry(userid,enquiry,enquirydate) VALUES('".$_SESSION["uid"]."','".$enquiry."',now())";
		
		if(mysql_query($qry,$con))
		{
			echo"<h4>Your words are now gone to Admin</h4>";
		}
		else
		{
			echo"Something is Not Right..".mysql_error();
		}
	}
?>
<html>
    <head><title>Enquiry</title>
    <link rel="stylesheet" type="text/css" href="css/design_style.css">
    
    </head>
    <body >
<form name=""action="" method="" id="header_enq" >
	<table border ="1" cellpadding="0" cellspacing="0" align = "center">			
                <tr>
                        <td>Enquiry</td>
                        <td> <textarea row="3" col="3"name="enq"></textarea> </td>
		</tr>	
                 <tr>
                       
		</tr>	
                    <tr>
                        <td colspan="2" align="center"><input type="submit"name ="sbmt" value="Submit" /></td>
                </tr>
        </table>
</form>
</body>
</html>
<?php
}
else {
header("Location:login.php");    
}
?>