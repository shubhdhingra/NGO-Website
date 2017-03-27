<html>
<head>
 

<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Fooding Details</h1>
</html>
<?php
require 'connect.php';
$query="SELECT * FROM fooding";
if($is_query_run=mysql_query($query))
{
//echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px">
     <tr>
     <td>'.$query_execute['f_name'].'</td> 
     <td>'.$query_execute['f_address'].'</td>
     <td>'.$query_execute['f_phone_no'].'</td>
<td>'.$query_execute['quantity'].'</td>
<td>'.$query_execute['o_id'].'</td>
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>