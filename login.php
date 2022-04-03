<?php session_start();
         if(isset($_REQUEST["sbmt"]))
        {
             
       // echo'<script> alert("hello");</script>';
        $username=$_REQUEST["username"];
        $password=md5($_REQUEST["pass"]);
       include 'db.php';
       
       $qry="SELECT * FROM registration WHERE username='".$username."' AND password='".$password."'";
      // echo $qry;
        $res=mysql_query($qry,$con);
        $r=mysql_fetch_array($res);
       if(mysql_affected_rows()>0)
       {
           $_SESSION["username"]=$username;
           $_SESSION["uid"]=$r["id"];
          // echo   $_SESSION["username"];
           //  echo   $_SESSION["uid"];
           header("Location:welcomepage.php");
       }
        else           
        {
            echo"<script> alert('Invalid Username or Password'); window.location.href='login.php';</script>";
        }
       
      
        }
       ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
   
    </head>
    
    <body class="user_login" >
   <div id="uheader"></div>
        <div class="container"  > 
            
            <form action="login.php" method="get">    
                <div><img src="images/logo.png"></div>
                <div class="login_input"  >
                    <input type="text" name="username" value="" placeholder="User name Buddy" required/>
                </div>
                
                <div class="login_input" >
                    <input type="password" name="pass" value="" placeholder="Password" required/>
                    
                </div>
                
                <div class="btnlogin" >
                    <input type="submit" name="sbmt" value="Login" />
                </div>
                
                <div>
<!--                    <a href="">Forget Password</a>-->
                </div>
                
                <div>
                    <a href="reg.php">Not have an account ! Register now.</a>
                </div>
                    
            
                         
             </form>
        </div>
    </body>
</html>
