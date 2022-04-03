<?php  
if(isset($_REQUEST["sbmt"]))
{
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
        include'db.php';        
        $qry="INSERT INTO add_cafe(cname,speciality,address,street,city,image) 
                VALUES 
            ('".$cname."','".$speciality."','".$address."','".$street."','".$city."','".$imagename."')";
        if(mysql_query($qry,$con))
        {
            echo"<h1>Data Saved</h1>";
        }
        else
        {
            echo"Error".mysql_error();
        }
    }
    else
    {
     echo"Error in file uploading";   
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add_Cafe</title>
         <link rel="stylesheet" type="text/css" href="css/design_style.css">
         
    </head>
    <body>
        <form name="addcafe" action="add_cafe.php" method="POST" enctype="multipart/form-data">
            <div class="add_btn">
            <table align="center" >
                
                <tr class="add_tr">
            <td>Cafe Name</td>
                <td><input type="text" name="cfnm" value=""></td>
            </tr>
            <tr>
                <td>Speciality About Cafe</td>
                <td><input type="text" name="scf" value=""></td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="adrs"></td>
                
            </tr>
            <tr>
                <td>Street</td>
                <td>
            <input type="text" name="strt">
                
                </td>
            </tr>
            
            <tr>
                <td>City</td>
                <td><input type="text" name="ct" value=""></td>
            </tr>
            
            <tr>
                <td>Picture of Cafe</td>
                <td><input type="file" name="upfile" accept="image/x-png,image/gif,image/jpeg"> </td>
            </tr>
            <tr>
                <td colspan="2">
                 <input type="submit" name="sbmt" value="Add Cafe">
                            </td>
               
            </tr>
            
        </table>
            </div>
             </form>
      
    </body>
</html>
