<!DOCTYPE html>
<head>
<title>Confirm Details</title>
	<script src="https://kit.fontawesome.com/46ccd809fe.js" crossorigin="anonymous"></script>
	<style>
		body{
			margin:0px;
			padding:0px;
			background-image:url(baaa.jpg);
			background-repeat:no-repeat;
			background-size:cover;}
		header{
			background:#333;
			height:66px;
			}
		header *{color:white;}
		header .logo{
			float:left;
			height:inherit;
			margin-left:2em;
		}
		header .logo-text{
			margin:9px;
		}
		header ul{
			float:right;
			margin:0px;
			padding:0px;
			list-style:none;
			
		}
		header ul li{
			float:left;
			position:relative;
		}
		header ul li a{
			display:block;
			padding:21px;
			font-size:1.1em;
			text-decoration:none;
		}
		header ul li ul{
			position:absolute;
			top:66px;
			right:0px;
			width:180px;
			display:none;
		}
		header ul li:hover ul{
			display:block;
		}
		header ul li ul li{
			width:100%;
		}
		header ul li ul li a{
			padding:10px;
			color:black;
			background-color:#f9f9f9;
		}
		header ul li ul li a:hover{
			background-color:#f1f1f1;
			
		}
		header ul li a:hover{
			background-color:#111;
			transition:0.5s;
		}
		
		header .menu-toggle{
			display:none;
			}
		* {
			box-sizing: border-box;
		}
		@media only screen and (max-width:750px){
			header{
				position:relative;
			}
			header ul{
				width:100%;
				background-color:#333;
				max-height:0px;
				overflow:hidden;
			}
			.showing{
				max-height:100em;
			}
			header ul li{
				width:100%;
			}
			header ul li ul{
				position:static;
				display:block;
				width:100%;
			}
			header ul li ul li a{
				background-color:#333;
				padding:10px;
				color:white;
				padding-left:50px;
			}
			header .menu-toggle{
				display:block;
				position:absolute;
				right:20px;
				top:20px;
				font-size:1.9em;
			}
			header .logo{
				margin-left:.8em;
			}
			iframe{
				width:100%;
			}

		}

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
a{text-decoration:none;}
  .column{height:175px;}
  h2{color:white; font-size:18px;}
  h2 a{color:white; font-size:18px;}
  .pp{color:white; border:0; font-size:18px;}
  .pp a{color:#ffffff; border:0; font-size:18px}

body{background-image:url('images.jpg');
background-repeat:no-repeat;
background-size:cover;}
</style>
<body>
<header>
		<div class='logo'>
			<h1>Chandini Cchabria Makeovers</h1>
		</div>
		<i class='fa fa-bars menu-toggle'></i>
		<ul class='nav'>
			<li><a href='index.html'>Home</a></li>
			<li><a href='portfolio1.html'>Portfolio</a></li>
			<li><a href='contactusofglam'>Contact Us</a></li>
			<li><a href='login.html'>Login</a></li>
			<li>
				<a href='#'>Join Us 
					<i class='fa fa-chevron-down' font-size:'.8em'></i></a>
				<ul style='left:0px'>
					<li><a href='learn.html'>Learn with Us</a></li>
					<li><a href='workform.html'>Work with Us</a></li>
					<li><a href='glam.html'>Glam Up with Us</a></li>
				</ul>
			</li>

			
	</header>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script>
		$(document).ready(function(){
			$('.menu-toggle').on('click',function(){
				$('.nav').toggleClass('showing');
				$('.nav ul').toggleClass('showing');
			});
		});
	</script>
<br>
<div class='title'>
<h1 align='center'>Details</h1>
</div>
<br>
<br>
<br>
<?php
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
			$fn=$_POST['t1'];
			$mn=$_POST['t2'];
			$ln=$_POST['t3'];
			$addrs=$_POST['t4'];
			$phno=$_POST['t5'];
			$email=$_POST['t6'];
			$package=$_POST['hair'];
			foreach($package as $hair)
			{
				echo "<p style='color:gray'>".$hair."</p>";
			}
			$sql="insert into learn values('$fn','$mn','$ln','$addrs',$phno,'$email','$hair');";
				if($conn->query($sql)==true)
				{
					echo"";
				}
				else
				{
					echo "not inserted";
				}
			$sql="select * from package where name='$hair';";
				$result=$conn->query($sql);
				$c=$result->num_rows;
				//echo $c;
				if ($c > 0)
				{
					while($row=$result->fetch_assoc())
					{
						echo "<p align='center' style='font-size:20px'>Total Cost= ".$row['cost']." + ".$row['gst']."&#37;=".$row['total']."</p>";
					}
					$result->free();
				}
				else
				{
					echo "Package not found";
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
			echo "<td><b>Package</b></td><td>".$hair."</td>";
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
		