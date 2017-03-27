<?php
include ("connect.php");
$did=$_POST['Holder'];
$damount=$_POST['Amount'];
$query="insert into d_by_organiser values('$did',$damount)";
//echo "1";
$result=mysql_query($query);
//echo "1";
//echo $result;
//echo "1";
if(!$result)
{
echo "Try Again";
}
?>
