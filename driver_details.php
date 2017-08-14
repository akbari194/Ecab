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
input[type=password], select {
    width: 250;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
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
	width:500;
	left: 400;
	right: 800;
	position: absolute;
	height:600;
	opacity:0.8;
}
input[type=submit]:hover {
    background-color: #0B173B;
}
body {
	background-color:#D8D8D8;
}
</style>
</head>
<body>
<br><br>

<div style="position: absolute; left: 7px; top: 145px; right: 5px">
<img src="66.jpg" height=750 width=1350>
</div>

<div id=design>
<font size=4><b>
<h1><center><b><font color=#0B173B>Driver Registration</b></font></center></h1>
<pre>
<form action="driver_ok.php" method=post>
<b>Select Your Station	<select name="m6">
<option value=bidhannagar>Bidhannagar</option>
<option value=city_centre>City Centre</option>
<option value=benachity>Benachity</option>
</select></b><br>
<b>Username	<input type=email name="m1" placeholder="Enter your Email ID" size=20></b><br>
<b>Password	<input type=password name="m2"  placeholder=Password size=20></b><br>
<b>Name		<input type=text name="m3" placeholder="Name of the Driver"  size=20></b><br>
<b>Cab Type	<select name="m4">
<option value=Mercedez Benz>Mercedez Benz</option>
<option value=Maruti Swift>Maruti Swift</option>
<option value=TATA Indica>TATA Indica</option>
<option value=Ambassador>Ambassador</option>
</select></b><br>
<b>Gender		<input type=radio value=m name=m5>Male	<input type=radio value=m name=m5>Female</b><br>
<b>	<input type=submit value=SUBMIT>
</b>
</form>
</font>
</pre>
</div>
</body>
</html>