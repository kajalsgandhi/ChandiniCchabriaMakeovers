
<?php
$fn=$_GET['fn'];
$servername="localhost";
$username="id11455256_root";
$password="purnima";
$dbname="id11455256_project";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
	print("Sql connection failed");
}
else
{
	$res=$conn->Query("Select * from appt where day='$fn'");
	echo "<table width='40%'  border='1px'>";
	while( ($row=$res->Fetch_Assoc()) == true)
	{
		echo "<tr>";
		echo "<td>".$row['day']."</td>";
		echo "<td>";
		if($row['status']==1)
		{
			echo "<input type='checkbox' name='s' value='".$row['time_slot']."'>".$row['time_slot'];
		}
		else
		{
			echo "<input type='checkbox' name='s' value='".$row['time_slot']."' disabled>".$row['time_slot'];
		}
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
$conn->close();
?>
