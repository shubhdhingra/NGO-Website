<html>
<body background="background.jpg">
 <center>
 <h1> </h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT area_name,vol_id FROM area where status_cleanliness=0";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Area Name</h2></td><td align='center'><h2>Volunteer Id</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>


    <td align="center">'.$query_execute['area_name'].'</td> 
     <td align="center">'.$query_execute['vol_id'].'</td>  
</tr>';
}
}
else
{
echo "query not executed";
}
?>
</html>