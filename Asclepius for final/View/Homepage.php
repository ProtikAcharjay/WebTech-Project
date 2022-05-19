<html>
    <head>
        <title>
            Homepage
        </title>
        <style>
            body{
                margin: 0px;
                background: url(../Resources/fullhospitalroom.jpg);
                background-size:100%;
                text-align: center;
                border: 3px solid black;
                border-radius: 23px;
                margin: 7px;
                background-repeat: round;
                
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
        
        <?php 
      session_start();?>
      <h3><?php echo $_SESSION["mail"]; ?> </h3>
      <!-- Welcome to Homepage  -->
      <div>
            <h1 id="control">Control Panel</h1>
        </div>

        <div class="container">
            <div id="item1">
                <h2>Admin</h2>
                <p>View Admins</p>
                <form action="adminshow.php">
            <button id="buttonhome">Admin</button>
        </form>
            </div>
            <div id="item2">
                <h2>Doctor</h2>
                <p>View Update Delete Doctors</p>
                <form action="doctorshow.php">
            <button id="buttonhome">Doctor</button>
        </form>
            </div>
            <div id="item3">
                <h2>Patient</h2>
                <p>View Update Delete Patients</p>
                <form action="patientshow.php">
            <button id="buttonhome">Patient</button>
        </form>
            </div>
            <div id="item4">
                <h2>Pharmacy</h2>
                <p>View Update Delete Pharmacy</p>
                <form action="pharmacyshow.php">
            <button id="buttonhome">Pharmacy</button>
        </form>
            </div>
        </div>

        <form action="Landingpage.php">
            <button id="logout">Logout</button>
        </form>
    </body>
</html>
<?php
    include 'Footer.php';
    ?>