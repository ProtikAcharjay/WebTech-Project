<?php
include "../Control/ConfigData.php";
if(isset($_GET['ID']))
{
    $user_id=$_GET['ID'];
    $sql="DELETE FROM 'meddate' WHERE 'ID'='$user_id'";
    $result=$conn->query($sql);
		if($result==true)
            echo "Deleted";
    
        else
            echo "Error:".$sql."<br>".$conn->server;
}