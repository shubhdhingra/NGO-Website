<html>
<body background="background.jpg">
 <center>
 <h1> Volunteer Details</h1>
 </center>
 <link href="site.css" rel="stylesheet"
 </hed>
 </body>
 </html>
<?php
require 'connect.php';
$query="SELECT * FROM volunteer";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Volunteer Id</h2></td><td align='center'><h2>Volunteer Name</h2></th><td align='center'><h2>Address</h2></th><td align='center'><h2>Phone no</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>

     <td align="center">'.$query_execute['vol_id'].'</td> 
     <td align="center">'.$query_execute['vol_name'].'</td>
     <td align="center">'.$query_execute['address'].'</td>
<td align="center">'.$query_execute['phone_no'].'</td>
</tr>';}
     


}
else
{
echo "query not executed";
}
?>