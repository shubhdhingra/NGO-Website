<html>
<head>
<body background="background.jpg">
 <center>
 <h1> Organiser Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM organiser";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Organiser Id</h2></td><td align='center'><h2>Organiser Name</h2></th><td align='center'><h2>Address</h2></th><td align='center'><h2>Phone no</h2></th><td align='center'><h2>Area</h2></th><td align='center'><h2>No of Slums</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>
     <td align="center">'.$query_execute['id'].'</td> 
     <td align="center">'.$query_execute['organiser_name'].'</td>
     <td align="center">'.$query_execute['address'].'</td>
<td align="center">'.$query_execute['phone_no'].'</td>
<td align="center">'.$query_execute['area'].'</td>
<td align="center">'.$query_execute['no_of_slums'].'</td> 
</tr>';


}
}
else
{
echo "query not executed";
}
?>