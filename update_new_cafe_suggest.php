<!DOCTYPE html>
<?php
if(isset($_REQUEST["sid"]) && isset($_REQUEST["status"]))
{
    include 'db.php';
   $id= base64_decode($_REQUEST["id"]);
   $status=$_REQUEST["status"];
   if($status=='update')
   {
       
   $qry = "SELECT * FROM new_cafe_suggestions WHERE sid='".$sid."'";
   echo $qry;
    $result = mysql_query($qry,$con);
    $row = mysqli_fetch_array($result);
        echo'<script type="text/javascript">alert("update");</script>';
   }
   else if($status=='delete')
    {
    //    echo'<script type="text/javascript">alert("delete");</script>';
       $qry="delete FROM event WHERE sid='".$sid."'";
     if(mysql_query($qry,$con))
        {
     echo'<script type="text/javascript">alert("deletion successfull");window.location.href="event.php?show";</script>';
        }
     echo"Error". mysql_error($con);
    }
    else{}
}
    
 //updte code       
if(isset($_REQUEST["sbmt"]))
{
 $sid=$_REQUEST["id"];
 $userid=$_REQUEST["uid"];
 $cafename=$_REQUEST["cfname"];
 $cafeadd=$_REQUEST["cfadd"];
 $street=$_REQUEST["street"];
 $city=$_REQUEST["city"];   
  include 'db.php';
 $qry="UPDATE event SET cafename='".$cafename."',cafeadd='".$cfadd."',street='".$street."'city='".$city."' WHERE sid='".$sid."'";
echo $qry;
 if(mysql_query($qry,$con))
{
    echo'<script type="text/javascript">alert("updation successfull");window.location.href="event.php?show";</script>';
}
}
 



?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="upform" action="updatesuggetsion.php" method="REQUEST">
            <table cellpadding="2" cellspacing="2" border="0" align="center">
                <tr>
                    <td>Suggestion id</td>
                    <td><input type="text" name="id" value="<?php echo$row["sid"];?>" readonly/></td>
                </tr>
                 <tr>
                    <td>User id</td>
                    <td><input type="text" name="uid" value="<?php echo$row["userid"];?>"/></td>
                </tr>
                <tr>
                    <td>Cafe Name</td>
                    <td><input type="text" name="cfname" value="<?php echo$row["cafename"];?>"/></td>
                </tr>
                
                <tr>
                    <td>Cafe Address</td>
                    <td><textarea row="5" col="22" name="cfadd" value="<?php echo$row["cafeaddress"];?>"></textarea></td>
                </tr>
                <tr>
                    <td>Street</td>
                    <td><input type="text" name="street" value="<?php echo$row["street"];?>"/></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="ct" value="<?php echo$row["city"];?>"/></td>
                </tr>
                
                 <tr>
                     <td colspan="2" align="center"><input type="submit" name="sbmt" value="update"/>
                     </td>
     
                    
                </tr>
            
            
            </table>
        </form>
               
    </body>
</html>
