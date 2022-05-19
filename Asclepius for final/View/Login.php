<html>
    <head>
        <title>
            Login
        </title>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            body{
                margin: 0px;
                background: url(../Resources/hospitalbed.jpg);
                background-size:100%;
                text-align: center;
                border: 3px solid black;
                border-radius: 23px;
                margin: 7px;
                
                
            }
        </style>
        <link rel="stylesheet" href="everything.css">
       
    </head>

    <body>
        <div  class="top">
            <img src="../Resources/redlogo.jpg" alt="" id="logoleft">

            <h1>Asclepius</h1>
        
            <img src="../Resources/bluelogo.jpg" alt="" id="logoright">
        </div>
        <div id="login">
            <h1>Login</h1>
            <!-- onsubmit="return validate()" -->
            <form onsubmit="return validate()" id="form" action="../Controller/Loginaction.php" method="post">
            <div class="form-control" id="form-control">
                Email: <input type="email" id="email" name="email" > 
                <i id="success" class="fas fa-check-circle"></i>
				<i id="error" class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
            </div>
                <br>
            <div class="form-control1" id="form-control1">
                Password: <input type="password" id="password" name="password" > 
                <i id="success1" class="fas fa-check-circle"></i>
				<i id="error1" class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
            </div>
                <br>
                Login as: <input type="radio" name="log" value="Admin">Admin
                    <input type="radio" name="log" value="Doctor">Doctor
                    <input type="radio" name="log" value="Patient">Patient
                    <input type="radio" name="log" value="Pharmacy">Pharmacy <br>
                <input type="submit" value="Login" name="btnlogin" id="loginbtn" >
                
                </form>
                
                

                
        </div>
        <form action="Registration.php">
            <button id="registerbtn">Register as Admin</button>
    
        </form>
        
        
        <script>
            function validate()
			{
				var adminemail=document.getElementById('email');
				var password=document.getElementById('password');
				if(adminemail.value=="" || password.value=="")
				{
					alert('Email or Password cannot be empty');
					return false;
				}
				else
				  return true;
			}
		</script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<!-- <script src="../Controller/validation.js"></script> -->

    </body>
</html>
<?php
    include 'Footer.php';
    ?>

<!-- INSERT INTO `admin` (`AdminID`, `Name`, `Email`, `Gender`, `Password`) VALUES ('1', 'Protik Acharjay', 'Protik@gmail.com', 'Male', 'pro'); -->