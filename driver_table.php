<?php
// *****COnnecting php with MySQL*******

//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

//select the table
$res=mysql_query("select * from driver");

//To display the no of rows
$nr=mysql_num_rows($res);

print "There are currently <b>$nr</b> number of rows";
print "<table border=1>";
print "<tr><th>Driver ID</th><th>Username</th><th>Password</th><th>Driver Name</th><th>Car Type</th><th>Gender</th></tr>";

while ($ar=mysql_fetch_row($res))
{
print "<tr><td>$ar[0]</td><td>$ar[1]</td><td>$ar[2]</td><td>$ar[3]</td><td>$ar[4]</td><td>$ar[5]</td></tr>";
}
print "</table>";
?>
