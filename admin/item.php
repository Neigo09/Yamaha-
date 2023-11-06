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
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="../yama.php">
                                <div class="sb-nav-link-icon"></div>
                                logout
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="item.php">Item </a>
                                    <a class="nav-link" href="order.php">Order</a>
                                </nav>
                            </div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">401 Page</a>
                                            <a class="nav-link" href="404.php">404 Page</a>
                                            <a class="nav-link" href="500.php">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Item Name</label>
                            <input type="text" require name ="item_name" class="form-control" id="exampleFormControlInput1" placeholder="Item Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="price" require name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Choose Category</label>
                            <select  name="category" class="form-control">
                            <option>choose category</option>
                            <?php 
                                $con=mysqli_connect("localhost","root","","yamaha");
                                $sql="SELECT * FROM `category`";
                                $res=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_assoc($res)):
                            ?>
                            <option value="<?=$row['category_id'];?>"><?=$row['category_name'];?></option>
                            <?php endwhile;?>
                            </select>   
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Generate Date</label>
                            <input type="date" require name="arrival" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Generate Years</label>
                            <input type="date" require name="year" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">item Imgae</label>
                            <input type="file" require name="image" class="form-control" id="exampleFormControlInput1">
                        </div>
                            <input type="submit" name="save" value="Add Item" class="btn btn-success"><br>
                        </form>
                        <?php 
                            if(isset($_POST['save'])){
                                $uname=$_POST['item_name'];
                                $uprice=$_POST['price'];
                                $cat=$_POST['category'];
                                $date=$_POST['arrival'];
                                $gene=$_POST['year'];
                                $img= $_POST['image'];

                                $con = mysqli_connect("localhost","root","","yamaha");
                                $sql = "INSERT INTO item(item_name, category_id, price, image, generate_date, generate_years) VALUES ('$uname','$cat','$uprice','$img','$date','$gene')";
                                mysqli_query($con,$sql);
                            }
                        ?>

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th>Generate Date</th>
                                <th>Generate Years</th>
                                <th>Item Image</th>
                                <th colspan="2" style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con=mysqli_connect("localhost","root","","yamaha");
                                    $sql="SELECT item.*,category.category_name FROM `item` LEFT JOIN category ON item.category_id=category.category_id";
                                    $res=mysqli_query($con, $sql);
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($res)):
                                ?>
                                <tr>
                                    <th><?php echo $i;?></th>
                                    <th><?php echo $row['item_name']?></th>
                                    <th><?php echo $row['price']?></th>
                                    <th><?php echo $row['category_id'];?></th>
                                    <th><?php echo $row['generate_date']?></th>
                                    <th><?php echo $row['generate_years']?></th>
                                    <th><img src="../img/<?php echo $row['image'];?>" style="width:100px;" alt=""></th>
                                    <td><a href="itemuptade.php?itemid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-success">Uptade</button></a></td>
                                    <td><a href="itemdelete.php?itemid=<?php echo $row['item_id'];?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                                    </tr>
                                    <?php $i++;endwhile;?>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</php>
