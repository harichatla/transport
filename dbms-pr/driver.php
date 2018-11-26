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

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.shade{
  text-color:red;
  text-shadow:2px 2px yellow;

}

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
$qry = 'SELECT * FROM driver'; 

/*Execute query*/ 
$result = @mysql_query($qry);
echo '<center><h1 class="shade" >DRIVER DETAILS  </h1>';

 /*Draw the table for Players*/ 
echo '<table  border="10"> 

<th class="td1"> Driverid</th> 
<th>  DriverName</th>
 <th> EmployeeDate</th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = @mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td >'.$row['driver_id'].'</td>
<td>'.$row['driver_name'].'</td>
<td>'.$row['employee_date'].'</td> 
 
</tr>'; 
}

echo '</table></center>';

 
?>
