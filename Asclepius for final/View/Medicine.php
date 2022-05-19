<?php
include "../Control/medcon.php";

//include "../Control/pRegVal.php";
?>
<html>
    <head>
        <style> 
         body{
            background-color: white; /* Green */
            color:black;
          }

          </style>
        <title>Add Medicine</title>
    </head>
    <body>
    <a href=../view/pdashboard.php>
    <button>Back</button>
  </a>
        <h1 style="text-align:center;">Add Medicine</h1><br>
        <form style="text-align:center;" action="#" method="POST">
            Medicine Name:
			<br><input type="text" id="mname" name="mname"><br>
           
            Mfg.Date:<br><input type="text" id="mfg" name="mfg"><br>
            
            Exp.Date:<br><input type="text" id="exp" name="exp"><br>
            
            Price:<br><input type="text" id="price" name="price"><br>
            Med-ID:<br><input type="text" id="mID" name="mID"><br>

            Quantity:<br><input type="text" id="Quantity" name="quantity"><br>
        
            <input type="submit" value="Save" name="mSave">




        </form> 
  
    </body>
</html>