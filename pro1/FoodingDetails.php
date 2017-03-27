<html>
<body background="background.jpg">
 <center>
 <h1> Fooding Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM fooding";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>F_Name</h2></td><td align='center'><h2>F_Address</h2></th><td align='center'><h2>F_phone no</h2></th><td align='center'><h2>Quantity</h2></th><td align='center'><h2>Organiser Id</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['f_name'].'</td> 
     <td align="center">'.$query_execute['f_address'].'</td>
     <td align="center">'.$query_execute['f_phone_no'].'</td>
<td align="center">'.$query_execute['quantity'].'</td>
<td align="center">'.$query_execute['o_id'].'</td>
</tr>';


}
}
else
{
echo "query not executed";
}
?>