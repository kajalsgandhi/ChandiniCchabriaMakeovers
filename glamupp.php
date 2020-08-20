<!DOCTYPE html>
<html>
<head>
<title>Appointment Details</title>
<style>
			 h2{color:white; font-size:18px;}
			h2 a{color:white; font-size:18px; text-decoration:none;}
			.pp{color:white; border:0; font-size:18px;}
			.pp a{color:#ffffff; border:0; font-size:18px; text-decoration:none;}
			ul
			{list-style-type:none;
			margin:0;
			padding:1em;
			overflow:hidden;
			background-color:#333;
			}
			li{float:right;
			font-size:23px}
			li a{
			display:block;
			color:white;
			text-align:center;
			padding:14px 16px;
			text-decoration:none;
			}
			li a.hover{background-color:#111;}
			li.dropdown {
			display: inline-block;
			}

			.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			}

			.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
			}

			.dropdown-content a:hover {background-color: #f1f1f1;}

			.dropdown:hover .dropdown-content {
			display: block;
			}
			.k{float:left;display:block;
			color:white;
			text-align:center;
			padding:14px 16px;
			text-decoration:none;
			}
			* {box-sizing:border-box}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  /*height: 300px;*/ /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column{height:175px;}
body{background-image:url('images.jpg');
background-repeat:no-repeat;
background-size:cover;}
</style>
</head>
<body>
<div id='navbar'>
<ul>
<li class='k'>Chandni Cchabria Makeovers</li>
<li><a href='index.html'>Home</a></li>
<li><a href='portfolio1.html'>Portfolio</a></li>
  <li class="dropdown">
    <a class="dropbtn">Join Us</a>
    <div class="dropdown-content">
      <a href='workform.html'>Work With Us</a>
      <a href='learn.html'>Learn With Us</a>
      <a href='glam.html'>Glam Up With Us</a>
    </div>
  </li>
<li><a href='contactusofglam.html'>Contact Us</a></li>
<li><a href='login.html'>Login</a></li>
</ul>
</div>
<br>
<div class='title'>
<h1 align='center'>Appointment Details</h1>
</div>
<br>
<br>
<br>
<br>
<?php
$fn=$_POST['t1'];
			$mn=$_POST['t2'];
			$ln=$_POST['t3'];
			$addrs=$_POST['t4'];
			$phno=$_POST['t5'];
			$email=$_POST['t6'];
			$day=$_POST['t7'];
			$servername="localhost";
			$username="id11455256_root";
			$password="purnima";
			$dbname="id11455256_project";
			$conn=new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error)
			{
				print("connection failed");
			}
			else
			{
				$sql="insert into glam values('$fn','$mn','$ln','$addrs',$phno,'$email','$day');";
				if($conn->query($sql)==true)
				{
					echo"";
				}
				else
				{
					echo "not inserted";
				}
				$conn->close();
			}
			echo "<h3 align='center'>Your Entered details are:</h3>";
			echo "<table width='40%'  border='1px' align='center'>";
			echo "<tr>";
			echo "<td><b>First Name:</b></td><td>".$fn."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Middle Name:</b></td><td>".$mn."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Last Name:</b></td><td>".$ln."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Address:</b></td><td>".$addrs."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Phone number:</b></td><td>".$phno."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Email Address</b></td><td>".$email."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Preferred Day</b></td><td>".$day."</td>";
			echo "</table>";
		?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br>
<div class='footer'>
  <div class="column" style='background-color:#333;'>
  <br>
    <h2><a href='index.html'>Chandni Cchabria Makeovers</a></h2>
    <p class='pp'>Address</p>
	<br>
	<br>
  </div>
  <div class="column" style='background-color:#333;'>
  <br>
    <p class='pp'><a href='index.html'>About Us</a></p>
    <p class='pp'><a href='portfolio1.html'>Portfolio</p>
	<p class='pp'><a href='contact.html'>Contact Us</a></p>
  </div>
  <div class="column" style='background-color:#333;' >
    <h2>Join Us</h2>
    <p class='pp'><a href='learn.html'>Learn With Us</a></p>
	<p class='pp'><a href='workform.html'>Work With Us</a></p>
	<p class='pp'><a href='glam.html'>Glam Up With Us</a></p>
  </div>
</div>
</body>
</html>