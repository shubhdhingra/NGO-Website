<html>
<head>
 

<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Ngo Details</h1>
</html>
<?php
require 'connect.php';
$query="SELECT * FROM ngo";
if($is_query_run=mysql_query($query))
{
//echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px">
     <tr>
     <td>'.$query_execute['o_id'].'</td> 
     <td>'.$query_execute['s_f'].'</td>
     <td>'.$query_execute['s_c'].'</td>
<td>'.$query_execute['s_t'].'</td>
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>