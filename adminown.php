<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>        
        <meta charset="UTF-8">
        <title>Mate Are You SERIOUS</title>
       
    </head>
    <body>
        <h1>Admin Ink</h1>
        
        <fieldset>
            <legend>
             Its Not That Easy Mate   
            </legend>
            <form>
                <table>
                <tr>
                    <td>Name
                        <input type="text" name="adminname" placeholder="Don,t do this">
                    </td>
                </tr><br>
                <tr>
                    <td>Password
                        <input type="password" name="pass" placeholder="Ok As YOU WISH">
                    </td>
                </tr>
                <br>
                <tr>
                    <td> Ready For Responsiblity
                        <input type="submit" name="sbmt" value="YES" >
                    </td>
                </tr>
          
            </form>
             </form>
             </fieldset>
        
        <a href="adminlogin.php"> See What You Can Handle</a>
    </html>
</body>
         
  
<?php
        if(isset($_REQUEST["sbmt"]))
        {
            $adminname=$_REQUEST["adminname"];
            $password=$_REQUEST["pass"];
           

            $con = mysql_connect("localhost","root","") or die("sorry cannot connect");
            mysql_select_db("capsize",$con);
            $qry="INSERT INTO admins(adminname,password)VALUES('".$adminname."','".md5($password)."')";
            
         
            if(mysql_query($qry,$con))
            {
                echo"<h3>WOW You are Welcome To Crew</h3>";
            }
            else 
            {
                echo"GOD SAVED YOU. Don't Try Again".mysql_error();
            }


        }
	?>	
     