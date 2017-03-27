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
$query="SELECT o_id,organiser_name from ngo n,organiser o where s_f=0 AND s_c=0 AND s_t=0 AND n.o_id=o.id";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Organiser Id</h2></td><td align='center'><h2>Organiser Name</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['o_id'].'</td> 
     <td align="center">'.$query_execute['organiser_name'].'</td>
    
</tr>';
}
}
else
{
echo "query not executed";
}
?>