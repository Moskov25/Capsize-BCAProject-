<?php session_start();
         if(isset($_REQUEST["sbmt"]))
        {
        $adminname=$_REQUEST["adminname"];
        $password=md5($_REQUEST["pass"]);
       include 'db.php';
       $qry="SELECT * FROM admins WHERE adminname='".$adminname."' AND password='".$password."'";
        mysql_query($qry,$con);       
       if(mysql_affected_rows()>0)
       {
           $_SESSION["adminname"]=$adminname;
           header("Location:admin_home.php");
       }
 else           
 {
     echo"<h1>HA HA You are Not Admin</h1>";
 }
       
        }
       ?>

<!DOCTYPE html>
<html>
    <head >
        <meta charset="UTF-8">
        <title>Admin-Login</title>
        
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body >
       
        <div id="header"> <img  src="images/admin.png" alt="Admin logo" id="adminlogo"><br><h2> Admin Login</h2> </div>
        <form>
            <table class="tab" id="loginbar">
                <tr>
                    <td style="" >Admin-Name</td>
                    <td><input type="text" name="adminname" value="" placeholder="Admin ID" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" value="" placeholder="Password" /></td>
                </tr>
                <tr  >
                    <td colspan="1" align="center"></td>
                    <td > <input type="submit" name="sbmt" value="Login" class="my_btn"/></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>
 