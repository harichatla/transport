<html>
<head>
<style>

table {
	position:absolute;
    border-collapse: collapse;
    width: 30%;
	margin-top:40px;
	border-radius:5px;
	margin-left:60%;
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

.h1{
	text-align:right;
	margin-right:10%;
}

</style>
</head>
<body >

<?php 



 
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
$qry = 'SELECT b_departure,b_arrival FROM bus_shedule'; 

/*Execute query*/ 
$result = @mysql_query($qry);
echo '<center><h1 class="shade,h1" >STATION DETAILS </h1>';

 /*Draw the table for Players*/ 
echo '<table  border="10"> 

<th class="td1"> FROM</th> 
<th>  TO</th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = @mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td >'.$row['b_departure'].'</td>
<td>'.$row['b_arrival'].'</td>

 
</tr>'; 
}

echo '</table></center>';

 
?>
