<?php
$e1=$_GET["e1"];
if($e1==1)
print "<font color=red><b>Username or password is incorrect</b></font>";
unset($e1);
?>
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
input[type=password], select {
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
    background-color: white;
    padding: 40px;
	width:600;
	left: 350;
	right: 300;
	position: absolute;
}
input[type=submit]:hover {
    background-color: #0B173B;
}
body {
	background-color:#CEF6EC;
}
</style>
<body>
<br><br><br>
<div id=design>
<h1><center><b><font color=#0B173B>Admin Login</b></font></center></h1>
<form action="admin.php" method=post>
<pre>
<font size=4><b>
Admin User ID:		<input type=text placeholder="Admin User ID" size=40 name=a1><br>
Password:		<input type=password placeholder="Password" size=40 name=a2><br>
<input type=submit Value=ENTER><br></b>
</pre>
</form>
</div>
</font>
</body>
</html>

<html>
<head>
<style>
div.img{
	margin:5px;
	border:1px solid #ccc;
	position: absolute;
	width:180px;
	top:700px;
	left:50px;
	
}
div.img1{
	margin:5px;
	border:1px solid #ccc;
	position: absolute;
	width:180px;
	top:700px;
	left:500px;
	
}
div.img2{
	margin:5px;
	border:1px solid #ccc;
	position: absolute;
	width:180px;
	top:700px;
	left: 950px;
	
}
div.img:hover {
     border: 1px solid #777;
 }
	
div.img img {
     width: 340;
    height: 200;
 }
div.img1 img {
     width: 340;
    height: 200;
 }
div.img2 img {
    width: 340;
    height: 200;
 }
div.desc {
    padding: 20px;
	width:300;
     text-align: center;
	 background-color:white;
 }
</style>
</head>
<body>
  <div class="img">
	<a href="">
      <img src="58.jpg" alt="4 mercedes" width="100" height="100">
    <div class="desc"><b>Driver profile<b></a></div>
  </div>

  <div class="img1">
	<a href="">
    <img src="60.jpg" alt="download (1)" width="100" height="100">
    <div class="desc"><b>Customer Profile<b></a><br><br></div>
  </div>

  <div class="img2">
	<a href="driver_details.php">
    <img src="62.jpg" alt="download (2)" width="100" height="100">
    <div class="desc"><b>Driver Registration</a></b><br></div>
  </div>
</body>
</html>
