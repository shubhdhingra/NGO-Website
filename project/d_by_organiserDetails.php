<html>
<body background="background.jpg">
 <center>
 <h1> Donation by Organiser</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM d_by_organiser";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Donator Id</h2></td><td align='center'><h2>Amount</h2></td></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>
     <td>'.$query_execute['dn_id'].'</td> 
     <td>'.$query_execute['amount'].'</td>
     
</tr>';


}
}
else
{
echo "query not executed";
}
?>