<html>
<head>
 

<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Volunteer Details</h1>
</html>
<?php
require 'connect.php';
$query="SELECT * FROM volunteer";
if($is_query_run=mysql_query($query))
{
//echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px">
     <tr>
     <td>'.$query_execute['vol_id'].'</td> 
     <td>'.$query_execute['vol_name'].'</td>
     <td>'.$query_execute['address'].'</td>
<td>'.$query_execute['phone_no'].'</td>
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>