<html>
    <head>
        <title>
            Homepage
        </title>
        <style>
            body{
                margin: 0px;
                background: url(../Resources/salain.jpg);
                background-size:100%;
                text-align: center;
                border: 3px solid black;
                border-radius: 23px;
                margin: 7px;
                background-repeat: round;
                
            }
            #load {
    height: 60px;
    width: 120px;
    
    border-radius: 23px;
    margin: 12px;
    }
    #load:hover{
    color: white;
    background-color: gray;
    cursor: pointer;
    
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
            <h1 id="admininfo">Admin Information</h1>
        </div>  

        <!-- <?php include '../Controller/admindataload.php'; ?> -->
        <div>
        <body>
	
	<div id="main">
	</div>
    <button id="load">Load data</button>
	<script src="../Controller/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"../Controller/admindataload.php",
					type:"post",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
</body>

    </div>

	
	

        <div>
            <div id="crudoperation">
                <h1>Insert Update Delete</h1>
                <form action="../Controller/admincrud.php" method="post">
                    Name: <input type="name" id="name" name="name"> <br>
                    Email: <input type="email" id="email" name="email" > <br>
                    Password: <input type="password" id="password" name="password" > <br>
                    Gender: <input type="radio" name="gender" value="Male">Male 
                    <input type="radio" name="gender" value="Female">Female <br>
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