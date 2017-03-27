
<html>
<body background="background.jpg">
 <center>
 <h1> Area Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM area";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Area Name</h2></td><td align='center'><h2>Slum No</h2></th><td align='center'><h2>Volunteer Id</h2></th><td align='center'><h2>status of Food</h2></th><td align='center'><h2>status of Cleanliness</h2></th><td align='center'><h2>status of Teaching</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['area_name'].'</td> 
     <td align="center">'.$query_execute['slum_no'].'</td>
     <td align="center">'.$query_execute['vol_id'].'</td>
<td align="center">'.$query_execute['status_fooding'].'</td>
<td align="center">'.$query_execute['status_cleanliness'].'</td>
<td align="center">'.$query_execute['status_teaching'].'</td> 
</tr>';

}
}
else
{
echo "query not executed";
}
?>
