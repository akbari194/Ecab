<?php
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$p6=$_POST["p6"];
$p7=$_POST["p7"];  
// *****COnnecting php with MySQL*******

//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

//select the table
$res=mysql_query("insert into traveler values('$p1','$p2','$p3','$p4',$p5,'$p6','$p7')");

$_SESSION["traveler_fn"]="$p1";
$_SESSION["traveler_ln"]="$p2";
$_SESSION["traveler_addr"]="$p3";
$_SESSION["traveler_email"]="$p4";
$_SESSION["traveler_pin"]="$p5";
$_SESSION["traveler_city"]="$p6";
$_SESSION["traveler_state"]="$p7";

?>
<html>
<body>
<h1><center>Registration Successfull!!</center></h1>
<h2><center><a href="main.php">Back to Homepage and <font color=red>LOGIN</font></a></center></h2>
</body>
</html>