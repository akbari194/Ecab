<?php
$a1=$_POST["a1"];
$a2=$_POST["a2"];

$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

mysql_select_db("ecab")
or die ("could not connect to database");

$res=mysql_query("select pass from admin where un='$a1'");

$nr=mysql_num_rows($res);
if($nr==0)
{
header("Location:login.php?e1=1");
}
$ar=mysql_fetch_row($res);
if($a2==$ar[0])
print "Username and Password is correct";
else
header("Location:login.php?e1=1");
?>

<html>
<head>
<style>

div {
	background-color: #000000;
	width: 1290;
    height: 30;
	padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 30px;
}
	ul {
    list-style-type: none;
    margin: 10;
    padding: 0;
    overflow: hidden;
    background:#000000;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px 25px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #0B0B61;
	}
</style>
</head>
<body>
<div class=m>
<ul>
  <li> <img src=logo.jpg height=60 width=200></li>
   <ul style="float:right;list-style-type:none;">
  <li><a class="active" href=main.html>Home</a></li>
  <li><a href="offers.html">News</a></li>
  <li><a href=contact.html>Contact</a></li>
    <li><a href="shail.html">About</a></li>
  </ul>
</ul>
</div>

<b><h1>Hello Administrator!</h1></b><br><br>

<a href="user_details.html"><b>User Details<b></a><br><br>
<a href=""><b>Location<b></a><br><br>
<a href=""><b>Active Vehicle<b></a><br><br>
<a href="driver_table.php"><b>Driver Details<b></a><br><br>

</body>
</html>