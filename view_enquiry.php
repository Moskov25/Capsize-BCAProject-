<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title></title>
         <style type="text/css">
            #vi
            {
                float:left;
                
            }
        </style>
    </head>
    <body>
     <?php
      include 'db.php';
             $qry = "SELECT * FROM enquiry";
             $result = mysql_query($qry, $con);
    echo"<table border='1'>";
    echo"<tr>
            <td>Enquiry ID</td>
            <td>User ID</td>
            <td>Enquirues</td>
            <td>Date</td>
     </tr>";
    
    while ($row = mysql_fetch_array($result)) 
      {
    echo"<tr >
            <td >" . $row['enquiryid'] . "</td>
            <td>" . $row['userid'] . "</td>
            <td>" .$row['enquiry'] . "</td>
            <td>" .$row['enquirydate'] . "</td>
       </tr>";
    }
    echo"</table>";
    ?>
    </body>
</html>
