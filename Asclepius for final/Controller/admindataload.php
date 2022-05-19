<?php

$servername="localhost";
$username="root";
$password="";
$dbname="asclepiusfinal";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="select * from admin";
	$result=$conn->query($q);
	$output='<table border="1" width=100%> <tr><th>AdminID</th> <th>Name</th><th>Email</th><th>Password</th><th>Gender</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr><td>'.$row["AdminID"].'</td><td>'.$row["Name"].'</td><td>'.$row["Email"].'</td><td>'.$row["Password"].'</td><td>'.$row["Gender"].'</td></tr>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
