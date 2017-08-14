<html>
<head>
<style>

#m{
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
//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

//$dn=$_POST['dn'];
$id=$_POST['dn'];

$h2=$_POST['h2'];
$h1=$_POST['h1'];

$qu3="select * from $h1 where did='$id' ";
$rst=mysql_query($qu3);

print "<form action=payment.php method=post>";

echo" <input type=hidden name=h1 value=$h1>";
echo" <input type=hidden name=h2 value=$h2>";
echo" <input type=hidden name=dn value=$id>";

while($a=mysql_fetch_row($rst))
{
	print "<input type=hidden value='$a[0]' name=n1>";
	print "<input type=hidden value='$a[1]' name=n2>";
	print "<input type=hidden value='$a[2]' name=n3>";
	print "<input type=hidden value='$a[3]' name=n4>";
	print "<input type=hidden value='$a[4]' name=n5>";
	print "<input type=hidden value='$a[5]' name=n6>";
}
?>
<html>
<head>
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
    background-color: white;
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
<body bgcolor=#81F7F3>
<div id="design">
<h1><center><font color=#8A2908>Checkout</font><center></h1>
	<input type=text placeholder="Your name" size=50 name=o1><br>
	<input type=text placeholder="MM" size=5 name=o2> &nbsp&nbsp
	<input type=text placeholder="YY" size=5 name=o3> <br><br>
	<input type=text placeholder="5111 1111 1111 1111" size=25 name=o4> &nbsp&nbsp
	<input type=text placeholder="CVC" size=5 name=o5> <br><br>
	<input type=submit value=Purchase>
</form>
</div>
</body>
</html>