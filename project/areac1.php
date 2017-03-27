<html>
<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT area_name,vol_id FROM area where status_cleanliness=1";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Area name</h2></td><td align='center'><h2>vol_id</h2></th></tr>";
  
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