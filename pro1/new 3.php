<html>
<head>
<title>
food</title>
<link href="java.css" rel="stylesheet">
</head>
<body background="back.jpg" >
<center><ul>
<li>
<br><br><br>
<a href="my web.htm"><h1>Home</h1></a></li><br>
<li><a href="end_user_form.htm"><h1>Back to previous page</h1></a></li>
</center>
<br>
</body>

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
</html>
