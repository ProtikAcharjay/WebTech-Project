<html>
    <head>
        <title>
            Registration
        </title>
        <style>
            body{
                margin: 0px;
                background: url(../Resources/waiting.jpg);
                /* background-size:1200px 600px ; */
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

        <div id="register">
            <h1>Registration</h1>
            <form onsubmit="return validate()" action="../Controller/Regitrationaction.php" method="post">
                Name: <input type="name" id="name" name="name"> <br>
                Email: <input type="email" id="email" name="email" > <br>
                Password: <input type="password" id="password" name="password" > <br>
                Gender: <input type="radio" name="gender" value="Male">Male 
                <input type="radio" name="gender" value="Female">Female <br>
                
                <input type="submit" value="Sign Up" name="btnreg" id="regbtn" >
                </form>

                
        </div>
        <form action="Login.php">
            <button id="loginbtn">Already Have an Account?</button>
    
        </form>

        <script>
			function validate()
			{
				var adminname=document.getElementById('name');
                var adminemail=document.getElementById('email');
				var password=document.getElementById('password');
				if(adminemail.value=="" || password.value=="" || adminname.value=="")
				{
					alert('Name or Email or Password cannot be empty');
					return false;
				}
				else
				  return true;
			}
		</script>
    </body>
</html>
<?php
    include 'Footer.php';
    ?>