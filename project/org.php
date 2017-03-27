<?php
require 'connect.php';
$query="SELECT organiser_name,id from organiser where no_of_slums>1";
if($is_query_run=mysql_query($query))
{

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="2" style="width:1000px">
     <tr>
     <td>'.$query_execute['organiser_name'].'</td> 
     <td>'.$query_execute['id'].'</td>
    
</tr>
</table>';
}
}
else
{
echo "query not executed";
}
?>