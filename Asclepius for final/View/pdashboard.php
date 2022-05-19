<html>
    <head>
        <style>
          body{
            background-color: white; /* Green */
            color:white;
          }
         hr.solid {
         border-top: 10spx solid #bbb;
        }
ul:after {
    
  content: '';
  width: 0;
  height:100%;
  position: absolute;
  border: 1px solid green;
  top: 64;
  left: 200px;
}

.button {
  background-color: green; /* Green */
  border: none;
  color: black;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 14px 5px;
  cursor: pointer;
  border-radius: 10px;
  width: 8%;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color:green;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
</style>
<title>Pharmacy Dashboard</title>
    </head>
    <body>
      <p  style="text-align:center;" >  <span style='color:green;'>You are Logged by 
     <span style='color:green;'> <?php 
      session_start();
      echo $_SESSION["pusername"];
     ?>
     </p></span>
    <button type="button" class ="block" onclick="alert('This is Dashboard of pharmacy')">Dashboard!</button>
    <hr class="rounded">
    <ul>
  <li><a href="Medicine.php"> <button class="button button1">Add Medicine</button></a></li>
  <hr style ="width:150;margin-left:0">
  <li><a href="view.php"> <button class="button">Med-info</button></a></li>
  <hr style ="width:150;text-align:left;margin-left:0">
  <li><a href=""> <button class="button">Statistics    </button></a></li>
  <hr style ="width:150;text-align:left;margin-left:0">
  <li><a href="plogin.php"> <button class="button">Log-Out </button></a></li>
  <hr style ="width:150;text-align:left;margin-left:0">
  <li><a href="../View/Alluser.html"> <button class="button">Exit </button></a></li>
  <hr style ="width:150;text-align:left;margin-left:0">
  </ul>
     <h1  style="text-align:center;" ><span style='color:green;'>Welcome To Pharmacy Dashboard</h1>
     <p  style="text-align:center;" ><span style='color:green;'>--->Mange your Shop<---</p>
     
    

    <br><br><br><br><br>   <br><br><br><br><br>
    <div style="width: 250px; margin:0 auto;">
    <?php include "../View/footer.php"?>
    </div>
    
    </body>
</html>