<?php
include '../Model/Database.php';
$loginas=$_POST["log"];
    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }
    else{
        if($loginas=="Admin"){
            // echo"successful connection";
        // $sql="INSERT INTO admin(Name,Email,Password) VALUES('PRO','PRO@GMAIL.COM','PROPRO')";
        // $sql="INSERT INTO admin(Name,Email,Password) VALUES('".$uname."','".$uemail."','".$upass."')";
        $sql="select Email Password from admin where Email='".$adminemail."' and Password='".$adminpass."'";
        $result=$con->query($sql);

        //num_rows used for measuring how many rows they have
        if($result->num_rows>0){
            session_start(); //using session in the homepage for name
            $_SESSION["mail"]=$adminemail;
            
            header("Location: ../View/Homepage.php");
        }
        else{
            
            header("Location: ../View/Login.php");
            //alert('Email or Password cannot be empty');
             

        }
        
        //fetch_aso will convert the data to asocieative array
        //INSERT INTO TABLE NAME(COL1,COL2....) VALUES(VAL1,VAL2....)
        }
        elseif($loginas=="Doctor"){
            header("Location: ../View/Login.php");
        }
        elseif($loginas=="Patient"){
            header("Location: ../View/Login.php");
        }
        elseif($loginas=="Pharmacy"){
            header("Location: ../View/Login.php");
        }
        else{
            header("Location: ../View/adminshow.php");
        }
    }
    ?>