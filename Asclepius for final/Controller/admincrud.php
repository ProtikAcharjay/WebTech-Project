<?php

include '../Model/Database.php';
$todo=$_POST["crud"];


if($con->connect_error){
    die("Connection Failed: ".$con->connect_error);
}
else{
    // echo"successful connection";
    // $sql="INSERT INTO admin(Name,Email,Password) VALUES('PRO','PRO@GMAIL.COM','PROPRO')";
    if($todo=="insert"){
        $sql="INSERT INTO admin(Name,Email,Gender,Password) VALUES('".$adminname."','".$adminemail."','".$admingender."','".$adminpass."')";
        $result=$con->query($sql);
        header("Location: ../View/adminshow.php");
    }
    elseif($todo=="delete"){
        $sql="DELETE FROM admin WHERE Name='".$adminname."'";
        $result=$con->query($sql);
        header("Location: ../View/adminshow.php");
    }
    else{
        header("Location: ../View/adminshow.php");
    }
    
    //INSERT INTO TABLE NAME(COL1,COL2....) VALUES(VAL1,VAL2....)
}

?>