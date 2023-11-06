<?php 
    if(isset($_GET['orderid'])){
        $id=$_GET['orderid'];
    }
?>  

<?php 
    if(isset($_POST['save'])){
        $order = $_POST['orderid'];
        $user = $_POST['usrid'];
        $item = $_POST['itemid'];
        $date = $_POST['date'];
        $amount = $_POST['amo'];
        $address = $_POST['addres'];
        $phon = $_POST['pho'];

        $con=mysqli_connect("localhost","root","","yamaha");
        $sql= "UPDATE orders SET order_id='$order',user_id='$user',item_id='$item',order_date='$date',amount='$amount',address='$address',ph_on='$phon' WHERE order_id='$id'";
        mysqli_query($con,$sql);
        header("Location:order.php");
    }

?>


<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sidenav Light - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
<body>
    

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <form method="POST">
                        <?php 
                            $con=mysqli_connect("localhost","root","","yamaha");
                            $sql="SELECT * FROM orders WHERE order_id='$id'";
                            $res=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Order Id</label>
                            <input type="text" require name ="orderid" value="<?php echo $row['order_id'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">User id </label>
                            <input type="text" require name="usrid" value="<?php echo $row['user_id'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Item id</label>
                            <input type="text" require name="itemid" value="<?php echo $row['item_id'];?>"  class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Order Date</label>
                            <input type="date" require name="date" value="<?php echo $row['order_date'];?>" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Amount</label>
                            <input type="number" require name="amo" value="<?php echo $row['amount'];?>" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input type="text" require name ="addres" value="<?php echo $row['address'];?>" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input type="text" require name="pho" value="<?php echo $row['ph_on'];?>" class="form-control" id="exampleFormControlInput1">
                        </div>
                            <input type="submit" name="save" value="Add Item" class="btn btn-success"><br>
                        </form>
                        <?php } ?>
</div>
</body>
</php>