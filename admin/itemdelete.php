<?php 
    if(isset($_GET['itemid'])){
        $id=$_GET['itemid'];

        $con=mysqli_connect("localhost","root","","yamaha");
        $sql="DELETE FROM `item` WHERE item_id='$id'";
        mysqli_query($con,$sql);
        header("Location:item.php"); 
    }
?>