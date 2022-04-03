<?php session_start();
if(isset($_SESSION["username"]) && isset($_SESSION["uid"]))
{ 
?>

<?php
        if(isset($_REQUEST["sbmt"]))
        {
          
            $comment=$_REQUEST["comment"];
           

            $con = mysql_connect("localhost","root","") or die("sorry cannot connect");
            mysql_select_db("capsize",$con);
            $qry="INSERT INTO comment(user_id,comment,commentdate)VALUES('".$_SESSION["uid"]."','".$comment."',now())";
            
         
            if(mysql_query($qry,$con))
            {
                echo"<h3>Posted</h3>";
            }
            else 
            {
                echo"Error".mysql_error();
            }


        }
			
        ?>


<!DOCTYPE html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
        
        
        
    </head>
    <div id="uheader" <img src="images/logo.png" >></div><br>
    <body class="welcomeb" ><br><br><br><br><br>
        <?php
          echo"<h1 style=''>Welcome ".$_SESSION["username"]."</h1>";
        ?>
        <div class="ubox" >
        <form name="comment" action="welcomepage.php">
            
            <div class="commentbox"><input type="text" name="comment"  placeholder="Your Thoughts">      <br>
                    
            <input type="submit" name="sbmt" value="Comment"></div>
                    
        
        <div><a href="enquiry.php">Query to Admin</a></div><br>
        
        <div><a href="new_cafe_suggests.php">Suggest to Admin)</a></div><br>
        <div><a href="logout.php">Sign Out</a></div>
        
        </form>
        </div>
        
     </body>

<?php
}
else {
header("Location:login.php");    
}
?>