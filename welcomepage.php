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
    
    <body>
        <div id="uheader"  style="z-index:9999;">
             <?php
          echo"<h1 style='color:#fff;'>Welcome ".$_SESSION["username"]."</h1>";
        ?>
        </div>
              
        <div class="commentbox">
            <form name="comment" action="welcomepage.php">    
            <input type="text" name="comment"  placeholder="Your Thoughts">
            <input type="submit" name="sbmt" value="Comment">
            <div><a href="logout.php"><h3>Sign Out</h3></a></div>
            </form>
        </div>
            <div id="title" class="slide_header" >
           
                <h1 class="mainh1">Welcome to capsize</h1>
            </div>        
        
            <div id="slide1" class="slide"> 
                    <!--<div class="title" >-->
                        
                        
                        
                        
                        
                    </div>
            <!--</div>--> 
        
        
        
            <div id="slide2" class="slide" > 
                
                <div id="akhri_bg" >
                       
                            <h1 class="mainh1"><a href="enquiry.php">Query to Admin</a></h1>
                            <h1><a href="view_cafe_user.php">View hangouts</a></h1>
                            <h1><a href="new_cafe_suggests.php">Suggest to Admin</a></h1>
                                                  
                    </div>
                
             <!--   <div>
                    <img class="mainimg" src="images/hookahlo.jpg"><br>
                    <img class="mainimg" src="images/cafe.jpg"><br>
                </div>
             -->   
            </div>    
            
            <div id="slide4" class="slide header">
                <h1 class="mainh1">thank you for visiting our site</h1>
            </div>
        
    
        
     </body>

<?php
}
else {
header("Location:login.php");    
}
?>