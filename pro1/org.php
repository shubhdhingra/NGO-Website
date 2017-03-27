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
$query="SELECT organiser_name,id from organiser where no_of_slums>1";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Organiser Name</h2></td><td align='center'><h2>Organiser Id</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>
     <td align="center">'.$query_execute['organiser_name'].'</td> 
     <td align="center">'.$query_execute['id'].'</td>
    
</tr>';
}
}
else
{
echo "query not executed";
}
?>