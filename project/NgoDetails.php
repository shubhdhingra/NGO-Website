<html>
<body background="background.jpg">
 <center>
 <h1> Ngo Details</h1>
 </center>
 <link href="site.css" rel="stylesheet">
</head>

</body>

<?php
require 'connect.php';

$query45="select * from area a where  a.area_name in(select area from organiser where id='o1')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_f']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_f=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_f=1"
     mysql_query($query46);
}
}

$query45="select * from area a where  a.area_name in(select area from organiser where id='o1')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_c']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_c=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_c=1"
     mysql_query($query46);
}
}


$query45="select * from area a where  a.area_name in(select area from organiser where id='o1')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_t']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_t=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_t=1"
     mysql_query($query46);
}
}


$query45="select * from area a where  a.area_name in(select area from organiser where id='o2')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_f']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_f=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_f=1"
     mysql_query($query46);
}
}

$query45="select * from area a where  a.area_name in(select area from organiser where id='o2')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_c']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_c=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_c=1"
     mysql_query($query46);
}
}


$query45="select * from area a where  a.area_name in(select area from organiser where id='o2')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_t']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_t=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_t=1"
     mysql_query($query46);
}
}



$query45="select * from area a where  a.area_name in(select area from organiser where id='o3')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_f']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_f=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_f=1"
     mysql_query($query46);
}
}

$query45="select * from area a where  a.area_name in(select area from organiser where id='o3')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_c']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_c=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_c=1"
     mysql_query($query46);
}
}


$query45="select * from area a where  a.area_name in(select area from organiser where id='o3')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_t']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_t=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_t=1"
     mysql_query($query46);
}
}




$query45="select * from area a where  a.area_name in(select area from organiser where id='o4')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_f']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_f=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_f=1"
     mysql_query($query46);
}
}

$query45="select * from area a where  a.area_name in(select area from organiser where id='o4')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_c']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_c=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_c=1"
     mysql_query($query46);
}
}


$query45="select * from area a where  a.area_name in(select area from organiser where id='o4')";
if($is_query_run=mysql_query($query45))
{
while($query_execute==mysql_fetch_assoc($is_query_run))
{
	if($query_execute['s_t']==0)
		$flag=1;
}
if($flag==1)
{
	$query46="update ngo n set n.s_t=0"
     mysql_query($query46);
}
else
{
	
	$query46="update ngo n set n.s_t=1"
     mysql_query($query46);
}
}


$query="SELECT * FROM ngo";
if($is_query_run=mysql_query($query))
{
	echo "<table style= 'border: solid 2px black '>";
	
	echo "<tr><td align='center'><h2>Organiser Id</h2></td><td align='center'><h2>status of Fooding</h2></th><td align='center'><h2>status of cleanliness</h2></th><td align='center'><h2>status of Teaching</h2></th></tr>";
  
while($query_execute=mysql_fetch_assoc($is_query_run))
{


 echo  '<tr>
     <td align="center">'.$query_execute['o_id'].'</td> 
     <td align="center">'.$query_execute['s_f'].'</td>
     <td align="center">'.$query_execute['s_c'].'</td>
<td align="center">'.$query_execute['s_t'].'</td>
</tr>';

}
}
else
{
echo "query not executed";
}
?>