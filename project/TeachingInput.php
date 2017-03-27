<?php
include ("connect.php");
$cname=$_POST['Holder'];
$caddress=$_POST['Address'];
$contact=$_POST['Contact_no'];
//$volunteer='v4';

$query1="SELECT count(*) as count FROM cleanliness";
$num1=mysql_query($query1);
$result1=mysql_fetch_assoc($num1);

$query2="SELECT count(*) as count FROM teaching";
$num2=mysql_query($query2);
$result2=mysql_fetch_assoc($num2);

$result3=$result1["count"]+$result2["count"];
//echo $result3;


if($result3>=0 && $result3<6)
{
	//echo "1";
if($result3==0) 
{
	//echo "1";
$volunteer='v1';
//echo $volunteer;
}
elseif($result3==1)
{
	//echo "1";
$volunteer='v2';
}
elseif($result3==2)
{
	//echo "1";
$volunteer='v3';
}
elseif($result3==3)
{
	//echo "1";
$volunteer='v4';
}

elseif($result3==4)
{
	//echo "1";
$volunteer='v5';
}

elseif($result3==5)
{
	//echo "1";
$volunteer='v6';
}
}



elseif($result3>=6 && $result3<12)
{
	//echo "1";
$result3=$result3-6;
if($result3==0) 
{
	//echo "1";
$volunteer='v1';
//echo $volunteer;
}
elseif($result3==1)
{
	//echo "1";
$volunteer='v2';
}
elseif($result3==2)
{
	//echo "1";
$volunteer='v3';
}
elseif($result3==3)
{
	//echo "1";
$volunteer='v4';
}

elseif($result3==4)
{
	//echo "1";
$volunteer='v5';
}

elseif($result3==5)
{
	//echo "1";
$volunteer='v6';
}
}

else if($result3>=12 && $result3<18)
{
$result3=$result3-12;
if($result3==0) 
{
	//echo "1";
$volunteer='v1';
//echo $volunteer;
}
elseif($result3==1)
{
	//echo "1";
$volunteer='v2';
}
elseif($result3==2)
{
	//echo "1";
$volunteer='v3';
}
elseif($result3==3)
{
	//echo "1";
$volunteer='v4';
}

elseif($result3==4)
{
	//echo "1";
$volunteer='v5';
}

elseif($result3==5)
{
	//echo "1";
$volunteer='v6';
}
}


if($volunteer=='v1')
{
	$query="update slum s set s.s_cleanliness=1 where s.vol_id=v1";
if($is_query_run=mysql_query($query))
{}
else
{
echo "query not executed";
}
}

elseif($volunteer=='v2')
{
	$query="update slum s set s.s_cleanliness=1 where s.vol_id=v2";
if($is_query_run=mysql_query($query))
{}
else
{
echo "query not executed";
}
}

elseif($volunteer=='v3')
{
	$query="update slum s set s.s_cleanliness=1 where s.vol_id=v3";
if($is_query_run=mysql_query($query))
{}
else
{
echo "query not executed";
}
}

elseif($volunteer=='v4')
{
	$query="update slum s set s.s_cleanliness=1 where s.vol_id=v4";
	if($is_query_run=mysql_query($query))
{}
else
{
echo "query not executed";
}
}

elseif($volunteer=='v5')
{
	$query="update slum s set s.s_cleanliness=1 where s.vol_id=v5";
	if($is_query_run=mysql_query($query))
{}
else
{
echo "query not executed";
}
}
elseif($volunteer=='v6')
{
	$query="update slum s set s.s_cleanliness=1 where s.vol_id=v6";
	if($is_query_run=mysql_query($query))
{}
else
{
echo "query not executed";
}
}
mysql_select_db('project');	
$query="insert into teaching values('$cname','$caddress','$contact','$volunteer')";
$result=mysql_query($query);
//echo "$result";
if(!$result)
{
echo "Try Again";
}
?>
