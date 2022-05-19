<?php
if(isset($_POST["log"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="preg";
	$uname=$_POST["lemail"];
	$userpass=$_POST["lpass"];

$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die( "Connection failed:".$conn->connect_error);
	else{
		$sql="select sMail,sPassword from puserreg  where sMail='".$uname."' and sPassword='".$userpass."'";
		$result=$conn->query($sql);
		if($result-> num_rows>0)
		{

				
			session_start();
			$_SESSION["pusername"]=$uname;
			header("location: pdashboard.php");
			
			
		}
		else
			echo "Invalid username or password";
		
	}
	}

?>
<html>
    <head>
        <title>Pharmacy Log in</title>
    </head>
    <body>
        <br><br><br><br><br><br><br><br><br><br>
        <h1 style="text-align:center;">Log in as Pharmacy</h1><br>
        <form style="text-align:center;" onsubmit="return validate()" action="#" method="POST">
            E-mail:<br><input type="text" id="lemail" name="lemail"><br>
            Password:<br><input type="password" id="lpass" name="lpass"><br>
            <input type="submit" value="Log-in" name="log">
        </form> 
    <script>
	  function validate()
	  {
		 var username=document.getElementById('lemail');
		 var password=document.getElementById('lpass');
		 if(username.value.trim()=="" || password.value.trim()=="")
		 {
			 alert('Fill all the fields');
			 return false;
		 }
		 else
			 return true;
	  }
	</script>

      
    </body>
</html>