<html>
    <head>
        <title>
            Homepage
        </title>
        <style>
            body{
                margin: 0px;
                background: url(../Resources/ambulance.jpg);
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
        
        
      <!-- Welcome to Homepage  -->
      <div>
            <h1 id="admininfo">Pharmacy Information</h1>
        </div>  

        <?php include '../Controller/pharmacydataload.php'; ?>

	
	

        <div>
            <div id="crudoperation">
                <h1>Insert Update Delete</h1>
                <form action="../Controller/pharmacycrud.php" method="post">
                    Name: <input type="name" id="name" name="name"> <br>
                    Email: <input type="email" id="email" name="email" > <br>
                    Location: <input type="text" id="location" name="location" > <br>
                    <input type="radio" name="crud" value="insert">Insert
                    <input type="radio" name="crud" value="update">Update
                    <input type="radio" name="crud" value="delete">Delete <br>
                    
                    <input type="submit" value="Procced" name="addadmin" id="addadmin" >
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