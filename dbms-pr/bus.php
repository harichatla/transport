
<html>
<head>
<style>


.left{
  position:absolute;
  margin-top:40px;
  margin-left:40%;
  border:solid 1px;
  width:400px;
  height:320px;
  background-color:rgb('255,255,204');
  border-radius:5px;
  }
  
 
  
  input{
 border-radius:5px;
  margin-top:20px;
  height:30px;
  width:300px;
  }
  
 .button{
	  border-radius:5px;
	 width:150px;
	 height:30px;
	 background-color:wheat;
 }

  
</style>
</head>
<body ><?php
 include("2.php");
 
 ?>


<div class="left"><center>
<form method="post" action="searchbus.php">
<h1 align="center">Search for buses!<h1>
<input type="text" name="from" placeholder="FROM"  required="required"><br><br>
<input type="text" name="to" placeholder="TO" required="required" ><br><br>
<button type="submit" class="button" name="submit" align="center" value="SEARCH_BUSES">SEARCH BUSES</button>
</form></center>
</div>





</body>
</html>
