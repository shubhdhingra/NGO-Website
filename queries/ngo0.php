<?php
require 'connect.php';
$query="SELECT o_id,organiser_name from ngo,organiser where s_f=0 & s_c=0 & s_t=0 & ngo.o_id=organiser.o_id";
if($is_query_run=mysql_query($query))
{

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="2" style="width:1000px">
     <tr>
     <td>'.$query_execute['o_id'].'</td> 
     <td>'.$query_execute['organiser_name'].'</td>
    
</tr>
</table>';
}
}
else
{
echo "query not executed";
}
?>