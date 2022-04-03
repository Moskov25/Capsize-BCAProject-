<?php session_start();
if(isset($_SESSION["adminname"]))
{ 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>admin_home</title>
    <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
        <body>
            <div id="header">  <h1>Welcome Admin</h1>
            
                <img  src="images/admin.png" alt="Admin logo" id="adminlogo"> </div>
                
            
            
            <div id="sidebar">
                
                <ul>
                    
                   <li>   <a href="#a" target="_self"> Add Cafes</a>         </li>        
                   <li>   <a href="#b" target="_self"> New Cafe Suggestions </a> </li>
                   <li>   <a href="view_cafe.php" target="_new"> View Cafe</a>         </li>       
                   <li>   <a href="#d" target="_self"> View Users</a>        </li>       
                   <li>   <a href="#e" target="_self"> View Comments</a></li>           
                   <li>   <a href="#f" target="_self"> View Enquiry</a>   </li>           
                   <li>   <a href="adminlogout.php">Sign Out</a>
                </ul>
                
            </div> 
            <a name="a"></a><div  > <iframe src="add_cafe.php" height="350px" width="550px" ></iframe></div>
            <a name="b"></a><div> <iframe src="view_new_cafe_suggestion.php" height="350px" width="550px" ></iframe></div>
<!--            <a name="c"></a> <div> <iframe src="view_cafe_admin.php" height="200px" width="600px" ></iframe></div>-->
            <a name="d"></a> <div> <iframe src="view_user.php" height="200px" width="600px" ></iframe></div>
<!--            <div id="frame" class="admin_homespace" > <iframe src="view_cafe.php" height="350px" width="550px" ></iframe></div>-->
<!--           <a name="en"></a> <div > <iframe src="view_user.php" height="1000px" width="600px" ></iframe></div>-->
           <a name="e"></a> <div> <iframe src="view_comments.php" height="1000px" width="600px" ></iframe></div>
           <a name="f"></a> <div> <iframe src="view_enquiry.php" height="200px" width="600px" ></iframe></div>
            
            
            
        </body>
</html>

<?php
}
 else {
header("Location:adminlogin.php");    
}
?>
