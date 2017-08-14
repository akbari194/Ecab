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
$t1=$_POST["t1"];
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$_POST["t4"];
// *****COnnecting php with MySQL*******

//connecting to a database
$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

//connect to database
mysql_select_db("ecab")
or die ("could not connect to database");

//select the table
//insert into dept(dn,location) values('Sales','Kolkata');
$res=mysql_query("insert into register (mno,ename,email,pwd) values($t1,'$t2','$t3','$t4')");

//print "<h1>Record added successfully</h1>";


?>

<html>
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
input[type=textarea] {
    width: 250;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

#design{
    border-radius: 30px;
    background-color: #D8D8D8;
    padding: 10px;
}
input[type=submit]:hover {
    background-color: #0B173B;
}
</style>

<body>
<h1><center><b><font color=#0B173B>Traveller Registration</b></font></center></h1>
<div id="design">
<form action="confirm.php" method="post" >
<pre>
		<font size=4><b>First Name:		<input type=text size=40 name=p1>		Last Name:		<input type=text size=40 name=p2> <br><br>
		Address:		<textarea rows=3 name=p3 cols=40></textarea> <br><br>
		E-mail:			<input type=email size=40 name=p4><br><br>
		Pincode:		<input type=text size=40 name=p5><br><br>
		City:			<input type=text size=40 name=p6>		State:		<select name=p7><br><br>
		<option value=wb>West Bengal </option>
		<option value=up>Uttar Pradesh </option>
		<option value=mp>Madhya Pradesh </option>
		<option value=bihar>Bihar </option>
		</select><br><br>
					<input type=submit value=Submit>		 </b>
		</font>
</pre>
</form>
</div>
</body>
</html>