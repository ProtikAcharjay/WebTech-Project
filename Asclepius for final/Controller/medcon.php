<?php

if(isset($_POST["mSave"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="preg";
	$mn=$_POST["mname"];
	$m=$_POST["mfg"];
	$e=$_POST["exp"];
	$p=$_POST["price"];
	$md=$_POST["mID"];
	$q=$_POST["quantity"];
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die( "Connection failed:".$conn->connect_error);
	else{
		$sql="INSERT INTO meddata (mName,mfg,exp,price,mID,Quantity) VALUES ('".$mn."','".$m."','".$e."','".$p."','".$md."','".$q."')";
		$result=$conn->query($sql);
		
	}
}
?>