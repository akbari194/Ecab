<?php
$m1=$_POST["m1"];
$m2=$_POST["m2"];
$m3=$_POST["m3"];
$m4=$_POST["m4"];
$m5=$_POST["m5"];
$m6=$_POST["m6"];

// *****COnnecting php with MySQL*******

//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

//select the table
$res=mysql_query("insert into $m6(un,pass,name,ct,gender) values('$m1','$m2','$m3','$m4','$m5')");
$res1=mysql_query( "select * from '$m6'"); 
print "<h1>Registration Successfull</h1><br>";
print "<h2>Your Driver ID is:</h2><br>";
$row = mysql_fetch_array($res1); 
	echo ($row['did']);
?>