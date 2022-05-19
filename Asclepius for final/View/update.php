<?php
include "../Control/ConfigData.php";
if(isset($_POST["update"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="preg";
    $id=$_POST["ID"];
    $mn=$_POST["mname"];
	$m=$_POST["mfg"];
	$e=$_POST["exp"];
	$p=$_POST["price"];
	$md=$_POST["mID"];
	$q=$_POST["quantity"];
    $sql="UPDATE 'meddata' SET 'mName'='$mn','mfg'='$m','exp'='$e','price'='$p','mID'='$md','Quantity'='$q'";
		$result=$conn->query($sql);
		if($result==true)
            echo "Updated";
    
        else
            echo "Error:".$sql."<br>".$conn->server;
}
if(isset($_GET['ID']))
{
    $user_id=$_GET['ID'];
    //$sql="UPDATE 'medData' SET 'mName'='$mn','mfg'='$m','exp'='$e','price'='$p','mID'='$md','Quantity'='$q'";
    $sql="SELECT *FROM 'meddata' WHERE 'ID'='$user_id'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

            $mn=$row["mname"];
            $m=$row["mfg"];
            $e=$row["exp"];
            $p=$row["price"];
            $md=$row["mID"];
            $q=$row["quantity"];
            $id=$row["ID"];
        }

?>
<html>
    <body>
    <h1 style="text-align:center;">Register</h1><br>
    <form style="text-align:center;"  action="#" method="POST">
            Medicine Name:
			<br><input type="text"  name="mname"value=<?php echo $mn ?>><br>
           
            Mfg.Date:<br><input type="text" value=<?php echo $m ?> name="mfg"><br>
            
            Exp.Date:<br><input type="text" value=<?php echo $e ?> name="exp"><br>
            
            Price:<br><input type="text"value=<?php echo $p ?> name="price"><br>
            Med-ID:<br><input type="text" value=<?php echo $md ?> name="mID"><br>

            Quantity:<br><input type="text" value=<?php echo $q ?> name="quantity"><br>
                    <input type="submit" value="Update" name="update">
                  
                </form> 
</body>
</htmL>
<?php
    }else{
        header('location: view.php');
    }
}
    ?>      