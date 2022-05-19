<?php

include '../Model/Database.php';
$todo=$_POST["crud"];
$adminlocation=$_POST["location"];


if($con->connect_error){
    die("Connection Failed: ".$con->connect_error);
}
else{
    // echo"successful connection";
    // $sql="INSERT INTO admin(Name,Email,Password) VALUES('PRO','PRO@GMAIL.COM','PROPRO')";
    if($todo=="insert"){
        $sql="INSERT INTO patient(pename,peemail,pegender,pelocation) VALUES('".$adminname."','".$adminemail."','".$admingender."','".$adminlocation."')";
        $result=$con->query($sql);
        header("Location: ../View/patientshow.php");
    }
    elseif($todo=="delete"){
        $sql="DELETE FROM patient WHERE pename='".$adminname."'";
        $result=$con->query($sql);
        header("Location: ../View/patientshow.php");
    }
    else{
        header("Location: ../View/patientshow.php");
    }
    
    //INSERT INTO TABLE NAME(COL1,COL2....) VALUES(VAL1,VAL2....)
}

?>