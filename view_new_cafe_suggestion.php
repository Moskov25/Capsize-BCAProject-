<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View_new_cafe_suggestion</title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body>
        <?php
      include 'db.php';
         $qry = "SELECT * FROM new_cafe_suggestions";
    $result = mysql_query($qry, $con);
    echo"<table border=''>";
    echo"<tr>
     <td>Suggestion's Id</td>
     <td>User id</td>
     <td>Cafe Name</td>
     <td>Cafe Address</td>
     <td>Street</td>
     <td>City</td>
   
  </tr>";
    while ($row = mysql_fetch_array($result)) {
        echo"<tr>
     <td>" . $row['sid'] . "</td>
     <td>" . $row['userid'] . "</td>
     <td>" . $row['cafename'] . "</td>
     <td>" . $row['cafeaddress'] . "</td>
     <td>" . $row['street'] . "</td>
     <td>" . $row['city'] . "</td>
  </tr>";
    }
    echo"</table>";
        
   
        
        ?>
    </body>
</html>
