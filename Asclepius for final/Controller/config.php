<?php

if(isset($_POST["reg"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="preg";
	$pname=$_POST["sname"];
	$useremail=$_POST["email"];
	$phone=$_POST["phonenumber"];
	$pass=$_POST["pass"];
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die( "Connection failed:".$conn->connect_error);
	else{
		$sql="INSERT INTO puserreg (sName,sMail,sPassword,sPnumber) VALUES ('".$pname."','".$useremail."','".$pass."','".$phone."')";
		$result=$conn->query($sql);
		
	}
}
?>