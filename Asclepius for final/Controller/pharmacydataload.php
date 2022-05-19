<?php

$servername="localhost";
$username="root";
$password="";
$dbname="asclepiusfinal";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="select * from pharmacy";
	$result=$conn->query($q);
	$output='<table border="1" width=100%> <tr><th>pharmacyid</th> <th>phname</th><th>phemail</th><th>phlocation</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr><td>'.$row["pharmacyid"].'</td><td>'.$row["phname"].'</td><td>'.$row["phemail"].'</td><td>'.$row["phlocation"].'</td></tr>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
