<?php
//connecting to a database
$l=mysql_connect("localhost","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

$location=$_POST['location'];
$dest=$_POST['dest'];
$sql = "Select * from $location";
$rs = mysql_query($sql);
?>
<form action=test3.php method=post>
<select name=dn>
<?php
while($row = mysql_fetch_array($rs))
{ 
	//echo ($row['name']);
  echo "<option value=\"".$row['did']."\">"  .$row['name']."</option>\n  ";
  echo("<br>");
}
echo" <input type=hidden name=h1 value=$location>";
echo" <input type=hidden name=h2 value=$dest>";
   
print"</select><br><br>";
print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

print "<input type=submit value=NEXT>";
print "</form>"
?>

