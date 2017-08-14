<?php
session_start();
?>

<?php
$n1=$_POST["n1"];//email
$n2=$_POST["n2"];//mobile
$n3=$_POST["n3"];//password

$l=mysql_connect("localhost","root","root");
if (! $l )
die ("counl not connect to mysql");

mysql_select_db("ecab")
or die ("could not connect to database");

$res=mysql_query("select pwd from register where mno=$n2");
$sql="select ename from register where pwd='$n3'";
$res1=mysql_query($sql);
$nr=mysql_num_rows($res);
if($nr==0)
{
header("Location:main.php?a1=1");
}
$ar=mysql_fetch_row($res);
if($n3!=$ar[0])
{
header("Location:main.php?a1=1");
}
$arr1 = mysql_fetch_array($res1);
$_SESSION["ename"]= ($arr1['ename']);
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

input[type=number], select {
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
#s1 , #s2, #s3{
    width: 90;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
} 
#design{
	position:absolute;
    border-radius: 30px;
    background-color: #A9F5F2;
    padding: 10px;
	height: 700;
	top:190;
	width:700;
	left:300;
	opacity: 0.9;
}
input[type=submit]:hover {
    background-color: #0B173B;
}
</style>
</head>
<body>
<div style="position: absolute; left: 7px; top: 145px; right: 5px">
<img src="80.jpg" height=800 width=1350>
</div>
<div id="m">
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

<div id="design">
<h1><center><b><font color=#0B173B><marquee>Book a car now</marquee></b></font></center></h1>
<form action=select_driver.php method=post  >
	<b>
	<pre>
	<b>Cab type		<Select name=p1>
		<option value="Mercedez_Benz">Mercedes Benz</option>
		<option value="Maruti_Swift">Maruti Swift</option>
		<option value="TATA_Indica">TATA Indica</option>
		<option value="Ambassador">Ambassador</option></b></select><br>
	<b>Select No. of cabs	<input type=number required=true size=15 name=p2></b><br>
	<b>Pick Up Date		<input type=date required=true size=15 name=p3>  </b></br>
	</pre>
	<b> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Pick Up Time[hrs/min] &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name=p4 id=s1>
				<option value=00>00</option>
				<option value=01>01</option>
				<option value=02>02</option>		
				<option value=03>03</option>
				<option value=04>04</option>
				<option value=05>05</option>
				<option value=06>06</option>
				<option value=07>07</option>
				<option value=08>08</option>
				<option value=09>09</option>
				<option value=10>10</option>
				<option value=11>11</option></b></select> 
			<select name=p5 id=s2>
				<option value='00'>00</option>
				<option value='01'>01</option>
				<option value='02'>02</option>		
				<option value='03'>03</option>
				<option value='04'>04</option>
				<option value='05'>05</option>
				<option value='06'>06</option>
				<option value='07'>07</option>
				<option value='08'>08</option>
			    <option value='09'>09</option>
			    <option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option>
				<option value='32'>32</option>
				<option value='33'>33</option>
				<option value='34'>34</option>
				<option value='35'>35</option>
				<option value='36'>36</option>
				<option value='37'>37</option>
				<option value='38'>38</option>
				<option value='39'>39</option>
				<option value='40'>40</option>
				<option value='41'>41</option>
				<option value='42'>42</option>
				<option value='43'>43</option>
				<option value='44'>44</option>
				<option value='45'>45</option>
				<option value='46'>46</option>
				<option value='47'>47</option>
				<option value='48'>48</option>
				<option value='49'>49</option>
				<option value='50'>50</option>
				<option value='51'>51</option>
				<option value='52'>52</option>
				<option value='53'>53</option>
				<option value='54'>54</option>
				<option value='55'>55</option>
				<option value='56'>56</option>
				<option value='57'>57</option>
				<option value='58'>58</option>
				<option value='59'>59</option>
			</select>
					<b><select name=p6 id=s3>
				<option value='AM'>AM</option>
				<option value='PM'>PM</option>
				</b></select><br>
	<pre>
	


	<b>Pick Up Location	<Select  name=location>
				<option value=Bidhannagar>Bidhannagar</option>
				<option value=City_centre>City Center</option>
				<option value=Benachity>Benachity</option>
	</select></b><br>
	<b>Destination		<Select  name=dest>
				<option value=City_centre>City Center</option>
				<option value=Benachity>Benachity</option>
				<option value=Bidhannagar>Bidhannagar</option>
	</select></b><br>
	<b><input type=submit value=SUBMIT></b>	
	<!----------- <b>Pick Up Location	<Select  name=location>
				<option value=Bidhannagar>Bidhannagar</option>
				<option value=City_centre>City Center</option>
				<option value=Benachity>Benachity</option>
</select></b><br>
	<b>Destination		<Select  name=dest>
				<option value=City_centre>City Center</option>
				<option value=Benachity>Benachity</option>
				<option value=Bidhannagar>Bidhannagar</option>
</select></b><br>
	<b><input type=submit value=SUBMIT></b>	<b><input type=reset value=RESET></b> ---------------->
	</pre>
	</b>
</form>
</div>
</body>
</html>