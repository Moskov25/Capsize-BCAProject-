<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>        
        <meta charset="UTF-8">
        <title>Welcome Mate</title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body id="reg">
        <div id="uheader">
            <h1>Capsize</h1>
        </div>
        <div  >
               
            <form  method="post">
                
                    <table id="container_re">
                    <tr>
                        <td>    Name</td>
                        <td>        <input type="text" name="username" placeholder="Your Name"></td>
                    </tr>
                    <tr>     
                        <td>                Male
                            <td><input type="radio" name="gen" value="1"></td>
                     </tr>
                    <tr>
                        <td>                 Female  </td>
                           <td><input type="radio" name="gen" value="2"> </td>
                    </tr>
                    <tr>
                       <td>             E-Mail</td>
                       <td>            <input type="text" name="email" placeholder="E-mail"></td>
                    </tr>
                    <tr>
                       <td>             Password</td>
                       <td>            <input type="password" name="pass" placeholder="Secret"></td>
                    </tr>
                        <tr>
                       <td>          Confirm Password</td>
                       <td>            <input type="password" name="conpass" placeholder="Confirm Your Secret"></td>
                    </tr>
                    <tr >
                                  
                        <td id="btnlogin_user">      <input type="submit" name="sbmt" value="Register" ></td>
                        <td><a href="login.php"><h6>Hook Up !</h6></a></td>
                    </tr>
                    
                    <tr>
                        
                    </tr>
                    </table>
                        
            </form>
       
            </div>
             </fieldset>
             
    </body>
</html>
<?php
        if(isset($_REQUEST["sbmt"]))
        {
            $username=$_REQUEST["username"];
            $gender=$_REQUEST["gen"];
            $email=$_REQUEST["email"];
            $password=$_REQUEST["pass"];
           

            $con = mysql_connect("localhost","root","") or die("sorry cannot connect");
            mysql_select_db("capsize",$con);
            $qry="INSERT INTO registration(username,gender,email,password)VALUES('".$username."','".$gender."','".$email."','".md5($password)."')";
            
         
            if(mysql_query($qry,$con))
            {
                echo"<h3>Registration Succesfull</h3>";
            }
            else 
            {
                echo"Error".mysql_error();
            }


        }
			
        ?>

