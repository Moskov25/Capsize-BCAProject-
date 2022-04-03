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
    <div id="uheader"  ></div><br>
    <body  ><br><br><br><br><br>
        <?php
          echo"<h1 style=''>Welcome ".$_SESSION["username"]."</h1>";
        ?>
        
        <div>
        <form name="comment" action="welcomepage.php">
            
            <div class="commentbox"><input type="text" name="comment"  placeholder="Your Thoughts">      <br>
                    
            <input type="submit" name="sbmt" value="Comment">
            <div><a href="logout.php"><h3>Sign Out</h3></a></div>
            </div>
                    
        
            <div id="title" class="slide_header" >
                <h1 class="mainh1">Welcome to capsize</h1>
            </div>
            
            
            <div id="slide1" class="slide"> 
                    <div class="title" >
                        <h1 class="mainh1"><a href="enquiry.php">Query to Admin</a></h1>
                    </div>
            </div>    
        
        
        
            <div id="slide2" class="slide" > 
                    <div class="title" >
                        <h1 class="mainh1"><a href="new_cafe_suggests.php">Suggest to Admin</a></h1>
                    </div>
                
                <img class="mainimg" src="images/tea1.jpg">
                <img class="mainimg" src="images/hookah1.jpg">
                
            </div>    
            
            <div id="slide4" class="slide header">
                <h1 class="mainh1">The End</h1>
            </div>
        
        
        </form>
        </div>
        
     </body>

<?php
}
else {
header("Location:login.php");    
}
?>