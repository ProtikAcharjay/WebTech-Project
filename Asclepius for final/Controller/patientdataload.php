<?php

$servername="localhost";
$username="root";
$password="";
$dbname="asclepiusfinal";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="select * from patient";
	$result=$conn->query($q);
	$output='<table border="1" width=100%> <tr><th>patientid</th> <th>pename</th><th>peemail</th><th>pelocaton</th><th>pegender</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr><td>'.$row["patientid"].'</td><td>'.$row["pename"].'</td><td>'.$row["peemail"].'</td><td>'.$row["pelocation"].'</td><td>'.$row["pegender"].'</td></tr>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
