<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View_Comments</title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body>
        <?php
      include 'db.php';
         $qry = "SELECT * FROM comment";
    $result = mysql_query($qry, $con);
    echo"<table border=''>";
    echo"<tr>
     <td>User id</td>
     <td>Comment</td>
     <td>Date</td>
    
  </tr>";
    while ($row = mysql_fetch_array($result)) {
        echo"<tr>
     <td>" . $row['user_id'] . "</td>
     <td>" . $row['comment'] . "</td>
     <td>" . $row['commentdate'] . "</td>
     </tr>";
     
    }
    echo"</table>";
        
   
        
        ?>
    </body>
</html>

