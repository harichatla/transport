
<html>
<head>
<style>


table {
    border-collapse: collapse;
    width: 80%;
	margin-top:40px;
	border-radius:5px;
	margin-left:10%;
}

th ,td{
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.shade{
  text-color:red;
  text-shadow:2px 2px yellow;

}

tr:hover {background-color:#f5f5f5;}
</style>

</style>
</head>
<body >

<?php 

 include("2.php");
 /*Connect to mysql server*/ 
$link = @mysql_connect('localhost','root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . @mysql_error());
 } 

/*Select database*/ 
$db = @mysql_select_db('transportation'); 
if(!$db)
{
 die("Unable to select database"); 
}

 /*Create query*/ 
$qry = 'SELECT * FROM garage'; 

/*Execute query*/ 
$result = @mysql_query($qry);


echo '<center><h1 class="shade">DETAILS FOR GARAGE </h1>';

 /*Draw the table for Players*/ 
echo '<table  border="10"> 

<th> Addres</th> 
<th>  Garage name</th>
 <th> Phone_number</th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = @mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['addres'].'</td>
<td>'.$row['gname'].'</td>
<td>'.$row['phonenumber'].'</td> 
 
</tr>'; 
}

echo '</table></center>';
 
?>
</body>
</html>