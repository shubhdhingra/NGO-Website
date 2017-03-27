<?php
require 'connect.php';
$query="SELECT area_name,vol_id FROM area where status_teaching=1";
if($is_query_run=mysql_query($query))
{

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="2" style="width:1000px">
     <tr>
     <td>'.$query_execute['area_name'].'</td> 
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