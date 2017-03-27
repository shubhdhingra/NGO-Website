<html>
<head>
 

<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>End User Details</h1>
</html>
<?php
require 'connect.php';
$query="SELECT * FROM end_user";
if($is_query_run=mysql_query($query))
{
//echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px">
<table>
<tr>
  <th>Name</th>
  <th>Address</th>
  <th>Contact no</th>
</tr>
     <tr>
     <td>'.$query_execute['dn_name'].'</td> 
     <td>'.$query_execute['dn_address'].'</td>
     <td>'.$query_execute['dn_contact_no'].'</td>
<td>'.$query_execute['amount'].'</td>
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>