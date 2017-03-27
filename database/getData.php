<?php
require 'connect.php';
$query="SELECT e.id FROM engineer e,marks m WHERE e.name=m.name AND e.name='shubham'";
if($is_query_run=mysql_query($query))
{
echo "query executed";

while($query_execute=mysql_fetch_assoc($is_query_run))
{
echo '<table border="1" style="width:300px"><tr><td>'.$query_execute['id'].'</td> </tr></table>';

}
}
else
{
echo "query not executed";
}
?>