<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>View_Cafe</title>
        <link rel="stylesheet" type="text/css" href="css/design_style.css">
    </head>
    <body >

        
        
        
        <div id="uheader">
            <h1> Welcome to capsize</h1>
            <h1><a href="new_cafe_suggests.php">Suggest to Admin</a></h1>
        </div>
        
        <?php
      include 'db.php';
         $qry = "SELECT * FROM add_cafe";
    $result = mysql_query($qry, $con);
    echo"<table border=''>";
    echo"<tr>
     <td>cid</td>
     <td>Cafe Name</td>
     <td>Speciality of Cafe</td>
     <td>Address</td>
     <td>Street</td>
     <td>City</td>
     <td>Pics of Cafe</td>
  </tr>";
    while ($row = mysql_fetch_array($result)) {
        echo"<tr>
     <td>" . $row['cid'] . "</td>
     <td>" . $row['cname'] . "</td>
     <td>" . $row['speciality'] . "</td>
     <td>" . $row['address'] . "</td>
     <td>" . $row['street'] . "</td>
     <td>" . $row['city'] . "</td>
     <td>
     <img src='uploads/" . $row['image'] . "' width=420 height=250></td>
  </tr>";
    }
    echo"</table>";
      
        ?>
        
<p id="demo">Click the button to get your location.</p>

<button onclick="getLocation()">Get Your Location</button>

<div id="mapholder"></div>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>
        
    </body>
</html>
