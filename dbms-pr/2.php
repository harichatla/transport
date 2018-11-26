

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.navbar {
    
    overflow: hidden;
    background-color: #333;
    font-family: Arial;

}

.navbar a {
     
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	display:inline-block;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}


.shade{
  text-color:green;
  text-shadow:2px 2px lightgreen;

}

</style>
</head>
<body>
<h1 align="center" class="shade">
 CITY TRANSPORTATION</H1>
 <hr>
 <marquee behavior="alternate"> <h3>Welcome to Jabalpur<h3></marquee>

<div class="navbar">
<center>
  
 
   <a href="1.php">Home</a>
  <a href="news.php">News</a>
   </center>
</div>



</body>
</html>









<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
#mySidenav a {
    position: absolute;
    left: -10px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 220px;
    background-color: #4CAF50;
}

#bus {
    top: 300px;
    background-color: #2196F3;
}



#metro {
    top: 380px;
    background-color: #555
}
#garge{
    top: 460px;
    background-color: #f44336;
}
#driver {
    top: 540px;
    background-color: #031
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="about.php" id="about">About</a>
  <a href="bus.php" id="bus">Bus</a>
  <a href="metro.php" id="metro">Metro</a>
  <a href="garge.php" id="garge">Garage</a>
  <a href="driver.php" id="driver">Driver</a>
   
</div>

<div style="margin-left:80px;">
  
</div>

</body>
</html> 
