<?php

include '../Model/Database.php';

if($con->connect_error){
    die("Connection Failed: ".$con->connect_error);
}
else{
    // echo"successful connection";
    // $sql="INSERT INTO admin(Name,Email,Password) VALUES('PRO','PRO@GMAIL.COM','PROPRO')";
    $sql="INSERT INTO admin(Name,Email,Gender,Password) VALUES('".$adminname."','".$adminemail."','".$admingender."','".$adminpass."')";
    $result=$con->query($sql);
    if($result->num_rows>0){
        session_start(); //using session in the homepage for name
        $_SESSION["mail"]=$adminemail;
        header("Location: ../View/Homepage.php");
    }
    else{
         header("Location: ../View/Registration.php");
         

    }
    //INSERT INTO TABLE NAME(COL1,COL2....) VALUES(VAL1,VAL2....)
}

?>