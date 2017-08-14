<?php
//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

$dn=$_POST['dn'];
$id=$_POST['dn'];
//echo($id);
$dest=$_POST['h2'];
$loct=$_POST['h1'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$n6=$_POST['n6'];

echo("$n1");echo("$n2");echo("$n3");echo("$n4");echo("$n5");echo("$n6");

$qu="insert into $dest values('$n1','$n2','$n3','$n4','$n5','$n6')";
$rst=mysql_query($qu);
$qu1="DELETE FROM $loct where did='$dn'";
$rst1=mysql_query($qu1);
?>