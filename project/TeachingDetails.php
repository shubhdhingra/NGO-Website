<html>
<body background="background.jpg">
 <center>
 <h1> Teaching Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM teaching";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Teacher name</h2></td><td align='center'><h2>teacher Address</h2></th><td align='center'><h2>Teacher contact no</h2></th><td align='center'><h2>Volunteer Id</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['t_name'].'</td> 
     <td align="center">'.$query_execute['t_address'].'</td>
     <td align="center">'.$query_execute['t_contact_no'].'</td>
<td>'.$query_execute['vol_id'].'</td>
</tr>';


}
}
else
{
echo "query not executed";
}
?>