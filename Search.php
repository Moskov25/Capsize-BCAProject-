<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search</title>
    </head>
    <body>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="" />
	<title>search</title>
<body>
	<div id="top">
		<div id="bottom">
			<h1 class="h1">Search What is Special</h1>
                        <FORM NAME="search" method="post" enctype="multipart/form-data" action="search.php">
				<table class="table" cellpadding="10" cellspacing="10" class="table">
                                         <tr id="category" >
                                                <td>Cafe</td>
                                                    <td>
                                                      <select name="cafe" >
                                                     <option value="">--Select--</option>
                                                        <?php
                                              include'db.php';
                                              $qry="SELECT * FROM add_cafe";
                                              $result=mysql_query($qry,$con);
                                              while($row= mysql_fetch_array($result))
                                              { 

                                                 echo"<option value='".$row["cid"]."'>".$row["cname"]."</option>";           

                                              }
                                              ?>
                                                                                            </select>
                
                                                </td>
                                        </tr>
                                        <tr>
						<td>Speciality</td>
                                                <td><input type="text" name="spl"  value="" /></td>
					</tr>
                                        
                                        <tr>
						<td></td>
                                                <td><input type="submit" name="submit" value="Search"/></td>
					</tr>
                                        
				</table>
			</form>
		</div>
	</div>
	
</body>
</html>

        <?php  
include'db.php'; 
if(isset($_REQUEST["submit"]))
{
    $cafe=$_REQUEST["cafe"];
    $speciality=$_REQUEST["spl"];
    if($cafe!="" && $speciality!="")
    {
        $qry="SELECT * FROM add_cafe where cname='".$cafe."'AND speciality ='".$speciality."'";
        echo $qry;
    }
    else if($cafe!="" && $speciality=="")
    {
        $qry="SELECT * FROM add_cafe where LIKE '%".$cafe."%'";
         echo $qry;
    }
    else if($cafe=="" && $speciality!="")
    {
        $qry="SELECT * FROM add_cafe where speciality='".$speciality."'" ;
         echo $qry;
    }
    else 
    {
        $qry="select * from add_cafe" ;
         echo $qry;
    }
    $result = mysql_query($qry, $con);
    while ($row = mysql_fetch_array($result)) 
            {
                echo"<div id=".'example'.">
                 <div>
                 <p>ID:" . $row['cid'] . "</p>
                 <p>Cafe Name:" . $row['cname'] . "</p>
                 <p>Speciality:" . $row['speciality'] . "</p>                 
                 <p>Address:" . $row['address'] . "</p>
                 <p>Street:" . $row['street'] . "</p>
                 <p>City:" . $row['city'] . "</p>
                 <p> <img src='uploads/" . $row['image'] . "' width=480 height=320></p>   
                </div>";
                 echo"</div>";
    }
   
}

?>
