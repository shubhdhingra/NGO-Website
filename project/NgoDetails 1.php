<html>
<body background="background.jpg">
 <center>
 <h1> Ngo Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM ngo";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Organiser Id</h2></td><td align='center'><h2>status of Fooding</h2></th><td align='center'><h2>status of cleanliness</h2></th><td align='center'><h2>status of Teaching</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

 
     <td align="center">'.$query_execute['o_id'].'</td> 
     <td align="center">'.$query_execute['s_f'].'</td>
     <td align="center">'.$query_execute['s_c'].'</td>
<td align="center">'.$query_execute['s_t'].'</td>
</tr>';

}
}
else
{
echo "query not executed";
}
?>