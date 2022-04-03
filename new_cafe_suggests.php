<?php session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["uid"]))
{ 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>        
        <meta charset="UTF-8">
        <title>New_Cafe_Suggestion</title>
       <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body>
        <h1>Capsize</h1>
        
        <fieldset>
            <legend>
             Tell Me About That Cafe   
            </legend>
            <form>
                <table>
                <tr>
                    <td>Cafe Name
                        <input type="text" name="cafename" placeholder="Name of cafe you are suggesting">
                    </td>
                </tr><br>
                <tr>
                    <td>Cafe Address
                        <input type="text" name="cafeaddress" placeholder="Address cafe you are suggesting">
                    </td>
                </tr>    <br>
                    <tr>
                    <td>Street
                        <input type="text" name="street" placeholder="Street where suggested cafe is located">
                    </td>
                </tr>    <br>
            
                <tr>
                    <td>City
                        <input type="text" name="city" placeholder="City where cafe You are suggesting is located">
                    </td>
                </tr>
                <br>
                <tr>
                    <td> Suggest To Admin
                        <input type="submit" name="sbmt" value="Suggest" >
                    </td>
                </tr>
            </form>
             </form>
             </fieldset>
    </body>
</html>
<?php
        if(isset($_REQUEST["sbmt"]))
        {
            $cafename=$_REQUEST["cafename"];
            $cafeaddress=$_REQUEST["cafeaddress"];
            $street=$_REQUEST["street"];
            $city=$_REQUEST["city"];
           

            $con = mysql_connect("localhost","root","") or die("sorry cannot connect");
            mysql_select_db("capsize",$con);
            $qry="INSERT INTO new_cafe_suggestions(userid,cafename,cafeaddress,street,city)VALUES('".$_SESSION["uid"]."','".$cafename."','".$cafeaddress."','".$street."','".$city."')";
           
         
            if(mysql_query($qry,$con))
            {
                echo"<h3>Suggested To ADMIN </h3>";
            }
            else 
            {
                echo"Error".mysql_error();
            }


        }
			
        ?>

<?php
}
else {
header("Location:login.php");    
}
?>