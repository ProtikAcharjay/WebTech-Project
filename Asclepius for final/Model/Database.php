<?php
    $servername="localhost";
    $username="root";
    $password="";
    // echo "OK";
    $dbname="asclepiusfinal";
    // $uname=$_POST["name"];
    $adminname=$_POST["name"];
    $adminemail=$_POST["email"];
    $adminpass=$_POST["password"];
    $admingender=$_POST["gender"];
    
 
    $con= new mysqli($servername,$username,$password,$dbname);  //mysqli is the constructor
    
    ?>