<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'db.php';
if(isset($_REQUEST["cid"]) && isset($_REQUEST["status"])=='update')
      {
      $id= base64_decode($_REQUEST["cid"]);
      
      $qry="SELECT * from add_cafe WHERE cid='".$id."'";
      $res=mysql_query($qry,$con);
      $row=mysql_fetch_array($res);
      }
     
      ?>
<?php  
//updation 
if(isset($_REQUEST["sbmt"]))
{
    $id=$_REQUEST["cid"];
    $cname=$_REQUEST["cfnm"];
    $speciality=$_REQUEST["scf"];
    $address=$_REQUEST["adrs"];
    $street=$_REQUEST["strt"];
    $city=$_REQUEST["ct"];
    $source_file=$_FILES["upfile"]["tmp_name"];
   //i leave this for experiment
  //  this line also
    $target_file="uploads/".$_FILES["upfile"]["name"];
   // this line tooooo
    if(move_uploaded_file($source_file, $target_file))
    {
        $imagename=$_FILES["upfile"]["name"];
              
        $qry="update add_cafe SET cname='".$cname."',speciality='".$speciality."',address='".$address."',street='".$street."',city='".$city."',image='".$imagename."' WHERE cid='".$id."'"; 
              
        if(mysql_query($qry,$con))
        {
            echo'<script>alert("updation successful with image ");window.location.href="view_cafe.php";</script>';
        }
        else
        {
            echo"Error".mysql_error();
        }
    }
    else
    {
     $qry="update add_cafe SET cname='".$cname."',speciality='".$speciality."',address='".$address."',street='".$street."',city='".$city."' WHERE cid='".$id."'"; 
              
        if(mysql_query($qry,$con))
        {
            echo'<script>alert("updation successful without image ");window.location.href="view_cafe.php";</script>';
        }
        else
        {
            echo"Error".mysql_error();
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add_Cafe</title>
    </head>
    <body>
        <form name="addcafe" action="update_cafe.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="cid" value="<?php echo $id;?>">
        <table align="">
            <tr>
                <td>Cafe Name</td>
                <td><input type="text" name="cfnm" value="<?php echo $row["cname"]?>"></td>
            </tr>
            <tr>
                <td>Speciality About Cafe</td>
                <td><input type="text" name="scf" value="<?php echo $row["speciality"]?>""></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="adrs" value="<?php echo $row["address"]?>""></td>
                
            </tr>
            <tr>
                <td>Street</td>
                <td>
            <input type="text" name="strt" value="<?php echo $row["street"]?>"">
                
                </td>
            </tr>
            
            <tr>
                <td>City</td>
                <td><input type="text" name="ct" value="<?php echo $row["city"]?>""></td>
            </tr>
            
            <tr>
                <td>Picture of Cafe</td>
                <td><input type="file" name="upfile" accept="image/x-png,image/gif,image/jpeg"> </td>
            </tr>
            
            <tr>
                <td colspan="2">
                 <input type="submit" name="sbmt" value="update">
                            </td>
               
            </tr>
        </table>
             </form>
      
    </body>
</html>
