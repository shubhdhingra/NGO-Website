<?php
include ("connect.php");
$dname=$_POST['Holder'];
$daddress=$_POST['Address'];
$contact=$_POST['Contact_no'];
$damount=$_POST['Amount'];
$query="insert into end_user values('$dname','$daddress','$contact',$damount)";
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
