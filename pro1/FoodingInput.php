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
<li><a href="dform.htm"><h1>Back to previous page</h1></a></li>
</center>
<br>
</body>


<?php
include ("connect.php");
$fname=$_POST['Holder'];
$faddress=$_POST['Address'];
$contact=$_POST['Contact_no'];
$quantity=$_POST['quantity'];
$query1="SELECT count(*) as count FROM fooding";
$num1=mysql_query($query1);
$num=mysql_fetch_assoc($num1);
//echo $num["count"];
//echo $num["count"];

if($num["count"]>=0 && $num["count"]<4)
{
	//echo "1";
if($num["count"]==0) 
{
	//echo "1";
$organiser='o1';
//echo $organiser;
}
elseif($num["count"]==1)
{
	//echo "1";
$organiser='o2';
}
elseif($num["count"]==2)
{
	//echo "1";
$organiser='o3';
}
elseif($num["count"]==3)
{
	//echo "1";
$organiser='o4';
}
}
elseif($num["count"]>=4 && $num["count"]<8)
{
	//echo "1";
$num["count"]=$num["count"]-4;
if($num["count"]==0) 
{
	//echo "1";
$organiser='o1';
}
elseif($num["count"]==1)
{
	//echo "1";
$organiser='o2';
}
elseif($num["count"]==2)
{
	//echo "1";
$organiser='o3';
}
elseif($num["count"]==3)
{
	//echo "1";
$organiser='o4';
}
}
else if($num["count"]>=8 && $num["count"]<12)
{
$num["count"]=$num["count"]-8;
if($num["count"]==0) 
{
$organiser='o1';
}
elseif($num["count"]==1)
{
$organiser='o2';
}
elseif($num["count"]==2)
{
$organiser='o3';
}
elseif($num["count"]==3)
{
$organiser='o4';
}
}
//echo "1";
mysql_select_db('project');	
//echo "1";

if($organiser=='o1')
{
	$query45="update slum s set s.s_food=1 where slum_no in(select slum_no from area where area_name in (select area from organiser where id='o1'))";
    $query46="update area a set a.status_fooding=1 where area in(select area from organiser where id='o1')";

	if($is_query_run=mysql_query($query45))
{}
else
{
echo "query not executed";
}

	if($is_query_run=mysql_query($query46))
{}
else
{
echo "query not executed";
}
}

elseif($organiser=='o2')
{
	$query45="update slum s set s.s_food=1 where slum_no in(select slum_no from area where area_name in (select area from organiser where id='o2'))";
 $query46="update area a set a.status_fooding=1 where area in(select area from organiser where id='o2')";

	if($is_query_run=mysql_query($query46))
{}
else
{
echo "query not executed";
}
	
	if($is_query_run=mysql_query($query45))
{}
else
{
echo "query not executed";
}
}

if($organiser=='o3')
{
	$query45="update slum s set s.s_food=1 where slum_no in(select slum_no from area where area_name in (select area from organiser where id='o3'))";

	 $query46="update area a set a.status_fooding=1 where area in(select area from organiser where id='o3')";

	if($is_query_run=mysql_query($query46))
{}
else
{
echo "query not executed";
}
	
	if($is_query_run=mysql_query($query45))
{}
else
{
echo "query not executed";
}
}

if($organiser=='o4')
{
	$query45="update slum s set s.s_food=1 where slum_no in(select slum_no from area where area_name in (select area from organiser where id='o4'))";
 $query46="update area a set a.status_fooding=1 where area in(select area from organiser where id='o4')";

	if($is_query_run=mysql_query($query46))
{}
else
{
echo "query not executed";
}
	
	if($is_query_run=mysql_query($query45))
{}
else
{
echo "query not executed";
}
}

$query="insert into fooding values('$fname','$faddress','$contact',$quantity,'$organiser')";
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