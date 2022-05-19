<?php
include "../Control/config.php";

//include "../Control/pRegVal.php";
?>
<html>
    <head>
        <title>
            Pharmacy Registration page
        </title>

    </head>
    <body>
        <body>
            <br><br><br><br><br><br><br><br>
                <h1 style="text-align:center;">Register</h1><br>
                <form style="text-align:center;"  action="#" method="POST" id ="pregform">
                   <label> Shop Name:</label><br>
                   <input type="text" id="sname" name="sname"><br>
                    <label>Email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <label>Phone-Number:</label><br>
                    <input type="text" id="phonenumber" name="phonenumber"><br>
                    <label>Password:</label><br>
                    <input type="password" id="pass" name="pass"><br>
                    <label> Confirm-Password:</label><br>
                    <input type="password" id="cpass" name="cpass">
                    <br>
                    <input type="submit" value="Register" name="reg">
                    <br><hr>
                    <a href="plogin.php">Log-In</a>
                </form> 
                <script src="Control/pregc.js"></script>
    </body>
</html>