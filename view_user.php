<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View_User</title>
    </head>
    <body>
        <?php
      include 'db.php';
         $qry = "SELECT * FROM registration";
    $result = mysql_query($qry, $con);
    echo"<table border=''>";
    echo"<tr>
     <td>Id</td>
     <td>Username</td>
     <td>Gender</td>
     <td>E-mail</td>
     <td>Password</td>
  </tr>";
    while ($row = mysql_fetch_array($result)) {
        echo"<tr>
     <td>" . $row['id'] . "</td>
     <td>" . $row['username'] . "</td>
     <td>" . $row['gender'] . "</td>
     <td>" . $row['email'] . "</td>
     <td>" . $row['password'] . "</td>
  </tr>";
    }
    echo"</table>";
        
   
        
        ?>
    </body>
</html>
