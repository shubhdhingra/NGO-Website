<?php
require 'connect.php';
$query="SELECT * FROM volunteer where vol_id in (SELECT vol_id FROM area a WHERE a.area_name in (SELECT area FROM organiser o where o.id='o1'))";
if($is_query_run=mysql_query($query))
{
//echo "query executed";
while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="2" style="width:1000px">
     <tr>
     <td>'.$query_execute['vol_name'].'</td> 
     <td>'.$query_execute['vol_id'].'</td>
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
