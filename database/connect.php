<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass))
{
die('Cannot Connect to Database');
}

else
{
if(@mysql_select_db('shubham'))
{
echo 'connection success';
}
else
{
die('CanNot connect to database');
}
}
?>