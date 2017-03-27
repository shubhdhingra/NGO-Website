<?php
require 'connect.php';
$query="SELECT * FROM d_by_organiser";
if($is_query_run=mysql_query($query))
{
echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px">
     <tr>
     <td>'.$query_execute['dn_id'].'</td> 
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