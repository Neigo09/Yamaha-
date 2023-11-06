<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamaha </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2">
                    <img src="img/Logo-Yamaha.webp" alt="">
                </div>
                <div class="col-xl-10">
                    <div class="htoo">
                <a href="login.php"><i class="fa-solid fa-user"></i>MyAccount</a>
                <a href="wish.php"><i class="fa-solid fa-shield-heart"></i>Wish List</a>
                <a href="singup.php"><i class="fa-solid fa-right-to-bracket"></i>Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="navbar">
        <div class="container-fluid">
            <div class="row">
                <div id="col">
                    <div class="dropdown">
                <button class="dropbtn"><a href="yama.php">MOTOCYCLES</a></button>
                <div class="dropdown-content">
                   <a href="#R1">R1</a>
                   <a href="#R1">R6</a>
                   <a href="#R1">XSR</a>
                </div>
                       </div>
                    <a href="accessories.php">ACCESSORIES</a>
                    <a href="about.php">ABOUT</a>
                </div>
            </div>
        </div>
    </section>


    <main>
    <div class="container-fluid">
        <div class="row">
        <?php 
        $con=mysqli_connect("localhost","root","","yamaha");
        $sql="SELECT * FROM `item` WHERE category_id='1'";
        $res=mysqli_query($con, $sql);
        while($row=mysqli_fetch_assoc($res)){
    ?>
    <div class="col-xl-3">
        <div class="card">
            <div class="img" id="R1">
                <img src="img/<?php echo $row['image']?>" alt="">
            </div>
            <div id="p">
                        <span><?php echo $row['item_name']?></span>
                        <p><?php echo $row['price']?></p>
                        
                        <div class="add">
                        <button><a href="Test.php?id=<?php echo $row['item_id'];?>">BUY NOW</a></button>
                        </div>
                    </div>
        </div>
        </div>
        <?php }?>
        </div>
    </div>

    
    </main>
    <div class="clearfix"></div>

    <section class="footer">
        <div class="row">
            <div class="col-md-3">
                <h5>About Us</h5>
                <ul>
                    <li><a href="#">Yamaha History</a></li>
                    <li><a href="#">Yamaha Companies</a></li>
                    <li><a href="#">International Sites</a></li>
                    <li><a href="#">Yamaha Technology</a></li>
                    <li><a href="">Legal Policies</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>NEWS</h5>
                <ul>
                    <li><a href="#">Awards & Reviews</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Recalls</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>RESOURCES</h5>
                <ul>
                    <li><a href="#">Corporate Contact Info </a></li>
                    <li><a href="#">Yamaha vehicel Support</a></li>
                    <li><a href="#">Safety Resources</a></li>
                    <li><a href="#">Industry Link</a></li>
                    <li><a href="#">E-Commerce Help Center</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>DEALER INFO</h5>
                <ul>
                    <li><a href="#">Dealer Locator</a></li>
                    <li><a href="#">Become  a Dealer</a></li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row1">
                <div class="col-lg-6">
                    <p>&copy; © 2023 Yamaha Motors Corp.,</p>
                </div>
                <div class="col-lg-6 right">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook-messenger"></i>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>