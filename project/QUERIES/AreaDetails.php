


<html>
<head>
 

<body background="background.jpg">
 
  <link href="site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Area Details</h1>
<!--<table>
<tr>
  <th>Area</th>
  <th>SLUM NO</th>
  <th>VOLUNTEER ID </th>
<th> S_f</th>
<th>S_c</th>
<th>S_t</th>
</tr>
</table>
<footer id="foot01"></footer>
</div>

<script src="script.js"></script>
-->
</body>
</html>  
<?php
require 'connect.php';
$query="SELECT * FROM area";
if($is_query_run=mysql_query($query))
{
//echo "query executed";


while($query_execute=mysql_fetch_assoc($is_query_run))
{

echo '<table border="2" style="width:1000px">
     <tr>
     <td>'.$query_execute['area_name'].'</td> 
     <td>'.$query_execute['slum_no'].'</td>
     <td>'.$query_execute['vol_id'].'</td>
<td>'.$query_execute['status_fooding'].'</td>
<td>'.$query_execute['status_cleanliness'].'</td>
<td>'.$query_execute['status_teaching'].'</td> 
</tr>
</table>';

}
}
else
{
echo "query not executed";
}
?>
