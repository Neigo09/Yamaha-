<?php 
    if(isset($_GET['orderid'])){
        $id=$_GET['orderid'];

        $con=mysqli_connect("localhost","root","","yamaha");
        $sql="DELETE FROM orders WHERE order_id='$id'";
        mysqli_query($con,$sql);
        header("Location:order.php"); 
    }
?>