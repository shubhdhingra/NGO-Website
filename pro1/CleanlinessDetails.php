<html>
<body background="background.jpg">
 <center>
 <h1> Cleaning Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';
$query="SELECT * FROM cleanliness";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>C_Name</h2></td><td align='center'><h2>C_Address</h2></th><td align='center'><h2>C_Contact no</h2></th><td align='center'><h2>Volunteer Id</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['c_name'].'</td> 
     <td align="center">'.$query_execute['c_address'].'</td>
     <td align="center">'.$query_execute['c_contact_no'].'</td>
<td align="center">'.$query_execute['vol_id'].'</td>
</tr>';

}
}
else
{
echo "query not executed";
}
?>