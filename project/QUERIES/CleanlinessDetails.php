<html>
<head>
 

<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Cleanliness Details</h1>
</html>
<?php
require 'connect.php';
$query="SELECT * FROM cleanliness";
if($is_query_run=mysql_query($query))
{
//echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px">
     <tr>
     <td>'.$query_execute['c_name'].'</td> 
     <td>'.$query_execute['c_address'].'</td>
     <td>'.$query_execute['c_contact_no'].'</td>
<td>'.$query_execute['vol_id'].'</td>
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>