<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View_Cafe</title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body>
        <?php
      include 'db.php';
      //deletion code
      if(isset($_REQUEST["cid"]) && isset($_REQUEST["status"])=='delete')
      {
      $id= base64_decode($_REQUEST["cid"]);
  
      $qry="delete from add_cafe WHERE cid='".$id."'";
      if(mysql_query($qry,$con))
      {
              echo'<script>alert("deletion successful");window.location.href="view_cafe.php";</script>';
      }
      else{
          echo mysql_error($con);
      }
      }
      //deletion code end
         $qry = "SELECT * FROM add_cafe";
    $result = mysql_query($qry, $con);
    echo"<table border=''>";
    echo"<tr>
     <td>cid</td>
     <td>Cafe Name</td>
     <td>Speciality of Cafe</td>
     <td>Address</td>
     <td>Street</td>
     <td>City</td>
     <td>Pics of Cafe</td>
     <td>Edit</td>
     <td>Delete</td>
  </tr>";
    while ($row = mysql_fetch_array($result)) {
        echo"<tr>
     <td>" . $row['cid'] . "</td>
     <td>" . $row['cname'] . "</td>
     <td>" . $row['speciality'] . "</td>
     <td>" . $row['address'] . "</td>
     <td>" . $row['street'] . "</td>
     <td>" . $row['city'] . "</td>
     <td>
     <img src='uploads/" . $row['image'] . "' width=480 height=320></td>
     <td><a href='update_cafe.php?cid=".base64_encode($row["cid"])."&status=update'>Edit</a></td>
     <td><a href='view_cafe.php?cid=".base64_encode($row["cid"])."&status=delete'>Delete</a></td>
     <td><a href='add_cafe'></a> Add </td>
  </tr>";
    }
    echo"</table>";
        
   
        
        ?>
    </body>
</html>
