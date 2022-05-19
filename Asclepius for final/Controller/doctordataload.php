<?php

$servername="localhost";
$username="root";
$password="";
$dbname="asclepiusfinal";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="select * from doctor";
	$result=$conn->query($q);
	$output='<table border="1" width=100%> <tr><th>DoctorID</th> <th>DocName</th><th>DocEmail</th><th>DocLocation</th><th>DocGender</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr><td>'.$row["DoctorID"].'</td><td>'.$row["DocName"].'</td><td>'.$row["DocEmail"].'</td><td>'.$row["DocLocation"].'</td><td>'.$row["DocGender"].'</td></tr>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
