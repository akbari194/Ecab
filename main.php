<?php
$a1=$_GET["a1"];
if($a1==1)
//print "<div id=h><font color=red><b>Username or password is incorrect</b></font><div>";
unset($a1);
?>
<html>
<head>
	<!-- Slider HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- slider HEAD section -->
<style>
h1{
	color: white;
	font-family: "Times New Roman", Times, serif;
	font-size: 40px;
}
div.h {
	style="position: absolute; left: 500px; top: 100px; float: center";
}
div.m{
	background-color: #000000;
	width: 1290;
    height: 30;
}
div {
    background-color: transparent;
	padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 30px;
}
body {
    background-color:#A9F5F2;
    background-position: center;
    margin-right: 100px;
    background-attachment: fixed;
}
h3 {
    font-family: "Times New Roman", Times, serif;
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
    background-color: #0B0B61;}
a:visited {color:white;}

</style>
 <script language="Javascript">


function hideA()
{

    document.getElementById("A").style.visibility="hidden";
    document.getElementById("B").style.visibility="visible";    

}

function hideB()
{
    document.getElementById("B").style.visibility="hidden";
    document.getElementById("A").style.visibility="visible";

}
</script>

</head>

<!------- start of body---------->
<body style = "margin:0">

<!---- Menu bar -------->
<div class=m>
<ul>
  <li> <img src=logo.jpg height=60 width=200></li>
   <ul style="float:right;list-style-type:none;">
  <li><a class="active" href=main.php>Home</a></li>
  <li><a href="offers.html">News</a></li>
  <li><a href=contact.html>Contact</a></li>
    <li><a href="shail.html">About</a></li>
    <li><a href="login.php">Login</a></li>
  </ul>
</ul>
</div>
<!-- slider BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/4.jpg" alt="4" title="4" id="wows1_0"/></li>
		<li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_1"/></li>
		<li><img src="data1/images/6.jpg" alt="6" title="6" id="wows1_2"/></li>
		<li><img src="data1/images/8.jpg" alt="8" title="8" id="wows1_3"/></li>
		<li><img src="data1/images/14.jpg" alt="14" title="14" id="wows1_4"/></li>
		<li><img src="data1/images/30.jpg" alt="30" title="30" id="wows1_5"/></li>
		<li><img src="data1/images/65.jpg" alt="65" title="65" id="wows1_6"/></li>
		<li><img src="data1/images/102.jpg" alt="102" title="102" id="wows1_7"/></li>
		<li><img src="data1/images/106.jpg" alt="106" title="106" id="wows1_8"/></li>
		<li><img src="data1/images/116.jpg" alt="116" title="116" id="wows1_9"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data1/images/117.jpg" alt="slider" title="117" id="wows1_10"/></a></li>
		<li><img src="data1/images/119.jpg" alt="119" title="119" id="wows1_11"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="4"><span><img src="data1/tooltips/4.jpg" alt="4"/>1</span></a>
		<a href="#" title="5"><span><img src="data1/tooltips/5.jpg" alt="5"/>2</span></a>
		<a href="#" title="6"><span><img src="data1/tooltips/6.jpg" alt="6"/>3</span></a>
		<a href="#" title="8"><span><img src="data1/tooltips/8.jpg" alt="8"/>4</span></a>
		<a href="#" title="14"><span><img src="data1/tooltips/14.jpg" alt="14"/>5</span></a>
		<a href="#" title="30"><span><img src="data1/tooltips/30.jpg" alt="30"/>6</span></a>
		<a href="#" title="65"><span><img src="data1/tooltips/65.jpg" alt="65"/>7</span></a>
		<a href="#" title="102"><span><img src="data1/tooltips/102.jpg" alt="102"/>8</span></a>
		<a href="#" title="106"><span><img src="data1/tooltips/106.jpg" alt="106"/>9</span></a>
		<a href="#" title="116"><span><img src="data1/tooltips/116.jpg" alt="116"/>10</span></a>
		<a href="#" title="117"><span><img src="data1/tooltips/117.jpg" alt="117"/>11</span></a>
		<a href="#" title="119"><span><img src="data1/tooltips/119.jpg" alt="119"/>12</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">slider</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- Slider BODY section -->

<!----Radio button form-------->
<section>

<div style="position: absolute; left: 0px; top: 1000px; right: 0px">
<img src="fcar.jpg" height=600 width=1300>
</div>



<div style="position: absolute; left:0px; top: 1100px;  width: 1290;      height: 30;">
<font color=blue size=12 background=#E0F8F7 ><b><marquee>BOOK A CAR NOW!!</marquee></b></font>
</div>

<!-------------start of form--------------->
<div style="position: absolute; left: 500px; top: 1300px; float: center">
<input type="radio"  name="aorb" onClick="hideB()"  checked><b><font  color=white> I have a login ID.</font></b>
<input type="radio"  name="aorb" onClick="hideA()"> <b><font  color=white>I am new here.</b></font></div>
<div style="position: absolute; left: 500px; top: 1400px;  float: center" id="A"><br/>
<table>
	<form action="book.php" method="POST">
	<tr>
		<th><input type=text name="n1" size=40  placeholder= "Your E-mail Address" required="true"></th></tr>
		<tr><th><input type=text name="n2" size=40  placeholder= "Mobile Number" required="true"></th></tr>
		<tr><th><input type=password name="n3" size=40  placeholder= "Password"  required="true"></th></tr>
		<tr><th><input type=submit value=NEXT></th></tr>
	</form>
	</table>
</div>
<div style="position: absolute; left: 500px; top: 1400px;  float: center; visibility:hidden" id="B"><br/>


<!----------------------- I am new here --------------------------------------->
<table>
	<form action="new.php" method=POST>
		<tr><th><input type=text name=t1 size=40  placeholder= "Mobile Number"  required="true"></tr></th>
		<tr><th><input type=text name=t2 size=40  placeholder= "Your Name"  required="true"></tr></th>
		<tr><th><input type=text name=t3 size=40  placeholder= "Your E-mail Address"  required="true"></tr></th>
		<tr><th><input type=password name=t4 size=40  placeholder= "Password"  required="true"></tr></th>
		<tr><th><input type=submit value=NEXT></tr></th>
	</form>
	</div>
	</table>
	</section>
	<section>
	

	<!----------------footer---------------------->

<footer>
<div style="position: absolute; left: 0px; top: 1700px; width: 1290;      height: 30;   background: #173B0B;" >
<a href="[full link to your Twitter]">
<img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
</a>
<a href="[full link to your Pinterest]">
<img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
</a>
<a href="[full link to your Facebook page]">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
</a>
<a href="[full link to your LinkedIn]">
<img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" />
</a>
<a href="[full link to your Instagram]">
<img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
</a>
</div>
<div style="position: absolute; left: 300px; top: 1700px; width: 900;      height: 30;   background: #173B0B;" >
   <p align=center><font color=white ><b>Blog |<a href=faq.html> FAQ's</a> | <a href=terms.html>Terms & Conditions </a>| <a href="cab gallery.html">Gallery </a>| <font color=white><a href="mailto:shamim.0109@gmail.com">
  shamim@gmail.com</font></b></a></p></font>
<p align=center><b><font color=white>©2016 ECABS Company - All Rights Reserved</b></p></font>
  </div> 
</footer>
	<!---  <p align=right><img src="80.jpg" id="slide" width=50% height=30% >
	<script type="text/javascript">
	var step=0
	function slideit(){
 document.getElementById('slide').src = slideimages[step].src
 if (step<7)
  step++
 else
  step=0
 setTimeout("slideit()",2500)
}
slideit()
</script></p>
</section> ----->
</body>
</html>
