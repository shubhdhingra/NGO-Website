
<html>
<body background="background.jpg">
 <center>
 <h1> EndUser Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM end_user";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Donater Name</h2></td><td align='center'><h2>Address</h2></th><td align='center'><h2>Contact no</h2></td><td align='center'><h2>Amount</h2></td></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['dn_name'].'</td> 
     <td align="center">'.$query_execute['dn_address'].'</td>
     <td align="center">'.$query_execute['dn_contact_no'].'</td>
<td align="center">'.$query_execute['amount'].'</td>
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>