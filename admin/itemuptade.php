<?php 
    if(isset($_GET['itemid'])){
        $id=$_GET['itemid'];
    }
?>  

<?php 
    if(isset($_POST['save'])){
        $itemname = $_POST['item_name'];
        $uprice = $_POST['price'];
        $cate_id = $_POST['category'];
        $date = $_POST['arrival'];
        $gene = $_POST['year'];
        $item_img = $_POST['image'];

        $con=mysqli_connect("localhost","root","","yamaha");
        $sql= "UPDATE item SET item_name='$itemname',category_id='$cate_id',price='$uprice',image='$item_img',generate_date='$date',generate_years='$gene' WHERE item_id='$id'";
        mysqli_query($con,$sql);
        header("Location:item.php");
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
                            $sql="SELECT * FROM `item` WHERE item_id='$id'";
                            $res=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Item Name</label>
                            <input type="text" require name ="item_name" value="<?php echo $row['item_name'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="text" require name="price" value="<?php echo $row['price'];?>" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Choose Category</label>
                            <select  name="category" class="form-control">
                            <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_id'];?></option>
                            <option>Motocycles</option>
                            <option>Accessories</option>
                            </select>   
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Generate Date</label>
                            <input type="date" require name="arrival" value="<?php echo $row['generate_date'];?>"  class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Generate Years</label>
                            <input type="date" require name="year" value="<?php echo $row['generate_years'];?>" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">item Imgae</label>
                            <input type="file" require name="old_image" value="<?php echo $row['image'];?>" class="form-control" id="exampleFormControlInput1">
                        </div>
                            <input type="submit" name="save" value="Add Item" class="btn btn-success"><br>
                        </form>
                        <?php } ?>
</div>
</body>
</php>