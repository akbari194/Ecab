<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];

$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

mysql_select_db("ecab")
or die ("could not connect to database");

$res=mysql_query("select pwd from register where mno=$n2");

$nr=mysql_num_rows($res);
if($nr==0)
{
header("Location:main.php?a1=1");
}
$ar=mysql_fetch_row($res);
if($n3==$ar[0])
print "correct";
else
{
header("Location:main.php?a1=1");
}
?>