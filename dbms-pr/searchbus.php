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

.else{
	text-color:red;
  text-shadow:2px 2px yellow;
  margin-top:80px;
  margin-left:10%;
  font-size:30px;
}

.fcolumn{
	text-color:red;
}
	

</style>
</head>




 <?php 
include("2.php");
//Check if the user is authenticated first. Or else redirect to login page 

if ($_POST['submit'] == 'SEARCH_BUSES') 
{ 
if($_POST['from']&&$_POST['to']) 
{ 


$link = @mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = @mysql_select_db('transportation'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Prepare query 
$b_departure = $_POST['from']; 
$b_arrival = $_POST['to'];
$sql = "SELECT bus_route.bus_id, bus_route.route_id,b_route_stop.stop_id,b_route_stop.departuretime,b_route_stop.arriavaltime
 From bus_route,b_route_stop,bus_shedule
WHERE bus_shedule.route_id=(SELECT route_id FROM bus_shedule WHERE b_arrival=$b_arrival AND b_departure=$b_departure) AND b_route_stop.route_id=(SELECT route_id FROM bus_shedule WHERE b_arrival=$b_arrival AND b_departure=$b_departure ) AND bus_route.route_id=
(SELECT route_id FROM bus_shedule WHERE b_arrival=$b_arrival AND b_departure=$b_departure )";
//Execute query 
$result = @mysql_query($sql); 
if($result){
echo '<center><h1 class="shade">BUS DETAILS</h1>'; 
echo "<table border='10' > 
<tr><th>bus id</th> 
<th>route-id</th> 
<th>stop_id</th> 
<th>departure_time</th> 
<th>arrival_time</th> 
</tr>"; 

 
while($row = @mysql_fetch_array($result)) 
 
{ 
echo "<tr><td class='fcolumn'>" . $row['bus_id'] . "</td> 
<td>" . $row['route_id']."</td> 
<td>" . $row['stop_id'] . "</td> 
<td>" . $row['departuretime'] . "</td> 
<td>" . $row['arriavaltime'] . "</td> 
</tr>"; 
echo "<br/>"; 
} 
echo "</table></center>"; 
} 
else 
{ 
 
echo '<center class="else">NO RECORDS FOUND</ center>'; 
}
}
else 
{ 
 
echo "<center>NO RECORDS FOUND</ center>"; 
} 
} 
 

?>
