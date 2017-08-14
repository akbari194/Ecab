<html>
<head>
<style>

#m {
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
<style>
input[type=text], select {
    width: 250;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 250;
    background-color: #0B173B;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
} 
#design{
	position:absolute;
    border-radius: 30px;
    background-color: #A9F5F2;
    padding: 10px;
	height: 400;
	top:190;
	width:600;
	left:400;
	opacity: 0.9;
}
input[type=submit]:hover {
    background-color: #0B173B;
}
</style>
</head>
<body>
<div style="position: absolute; left: 7px; top: 145px; right: 5px">
<img src="88.jpg" height=600 width=1350>
</div>
<div id=m>
<ul>
  <li> <img src=logo.jpg height=60 width=200></li>
   <ul style="float:right;list-style-type:none;">
  <li><a class="active" href=main.php>Home</a></li>
  <li><a href="offers.html">News</a></li>
  <li><a href=contact.html>Contact</a></li>
    <li><a href="shail.html">About</a></li>
  </ul>
</ul>
</div>
</body>
</html>

<?php
session_start();
?>
<div id="design">
<b>
<?php
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$p6=$_POST["p6"];
$location=$_POST["location"];
$dest=$_POST["dest"];

$_SESSION["date"]="$p3";
$_SESSION["hr"]="$p4";
$_SESSION["mm"]="$p5";
$_SESSION["am/pm"]="$p6";

// *****COnnecting php with MySQL*******

//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

//select the table
$res=mysql_query("insert into car_book (ct,no,bo_dt,time,pic_loc,des) values('$p1',$p2,'$p3','$p4 : $p5 $p6','$location','$dest')");

print "<h1><center><font color=blue>CAB Details</font></center></h1>";
print "<pre>";
print "<b>";
print"	Cab Selected:		$p1 <br><br>" ;
print"	Pick up Location:	$location <br><br>";
print"	Destination:		$dest <br><br>";
print"</b>";
print "</pre>";
?>

<?php
//connecting to a database
$l=mysql_connect("localhost","root","root");
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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Select Driver 
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
</b>
</div>