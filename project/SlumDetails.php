<html>
<body background="background.jpg">
 <center>
 <h1> Slum Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM slum";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Slum No</h2></td><td align='center'><h2>Volunteer Id</h2></th><td align='center'><h2>status of Food</h2></th><td align='center'><h2>status of Cleanliness</h2><td align='center'><h2>Status of Teaching</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>
     <td align="center">'.$query_execute['slum_no'].'</td> 
     <td align="center">'.$query_execute['vol_id'].'</td>
     <td align="center">'.$query_execute['s_food'].'</td>
<td align="center">'.$query_execute['s_cleanliness'].'</td>
<td align="center">'.$query_execute['s_teaching'].'</td> 
</tr>';


}
}
else
{
echo "query not executed";
}
?>