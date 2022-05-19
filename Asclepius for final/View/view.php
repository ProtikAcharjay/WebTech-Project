<?php 
include "../Control/ConfigData.php";

//<link rel="stylesheet" href="style.css">
$sql= "SELECT *FROM meddata";
$result = $conn->query($sql);

?>
<htmL>
<head>
    <title> View page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
</head>    
<body>
    <div class="container">
        <h2>View Medicine<h2>
        <table class="table">
            <head>
                <tr>
                    <th>ID</th><br>
                    <th>Med-Name</th>
                    <th>Mfg</th>
                    <th>Exp</th>
                    <th>Price</th>
                    <th>medID</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>

</thread>
<tbody>
    <?php
    if($result->num_rows>0)
        while($row=$result->fetch_assoc()){

            ?>
    <tr>
        <td><?php echo $row['ID'];?></td>
        <td><?php echo $row['mName'];?></td>
        <td><?php echo $row['mfg'];?></td>
        <td><?php echo $row['exp'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['mID'];?></td>
        <td><?php echo $row['Quantity'];?></td>
        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['ID'];?>">
        Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID'];?>">
    Delete</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</body>
</html>