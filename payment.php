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
    border-radius: 15px;
    background-color: white;
    padding: 30px;
	height: 450;
	top:190;
	width:700;
	left:300;
	opacity: 0.7;
}
input[type=submit]:hover {
    background-color: #0B173B;
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
session_start();
?>

<?php
// print_r($_SESSION);
?>

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

/* connection from new.php

$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$p6=$_POST["p6"];
$p7=$_POST["p7"]; */

//echo("$n1");echo("$n2");echo("$n3");echo("$n4");echo("$n5");echo("$n6");
//echo("$p1");echo("$p2");echo("$p3");echo("$p4");echo("$p5");echo("$p6"); echo("$p7");

$qu="insert into $dest values('$n1','$n2','$n3','$n4','$n5','$n6')";
$rst=mysql_query($qu);
$qu1="DELETE FROM $loct where did='$dn'";
$rst1=mysql_query($qu1);
?>
<html>
<head>
</head>
<body>
<div style="position: absolute; left: 7px; top: 145px; right: 5px">
<img src="58.jpg" height=600 width=1350>
</div>
<div id="design">
<h1><center><font color=#122A0A>BOOKING CONFIRMATION</font></center></h1>
<h3><b>Traveller Name: <?php echo $_SESSION["ename"]; echo $_SESSION["traveler_fn"] ; 
						echo "&nbsp&nbsp&nbsp";
						echo $_SESSION["traveler_ln"]; ?></b><br><br>
<b>Your Driver ID: DRVOO<?php print"$dn" ?></b><br><br>
<b>Your Driver Name: <?php print"$n4" ?></b><br><br>
<b>Source Station: <?php print"$loct" ?></b><br><br>
<b>Your Destination: <?php print"$dest" ?></b><br><br>
<b>Cab type selected: <?php print"$n5" ?></b><br><br>
<b>Date of Booking: <?php echo $_SESSION["date"]; ?></b><br><br>
<b>Pickup Time: <?php echo $_SESSION["hr"]; echo "&nbsp&nbsp&nbsp"; echo $_SESSION["mm"]; echo "&nbsp&nbsp&nbsp"; echo $_SESSION["am/pm"];?></b><br><br>
</h3>
<h2><marquee><font color=#0B0B3B>WISH YOU A HAPPY AND SAFE JOURNEY!!!!!!!</font></marquee></h2>
</div>
</body>
</html>