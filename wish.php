<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
 margin: 0;
 padding: 0; 
 }
 body{
 width: 100%;
 }
 .header{
 background-color: black;
 height: 90px;
 }
 .header .row .col-xl-2 img{
 width: 40%;
 }
 .header .htoo{
 margin-top: 30px;
 }
 .header .htoo a{
 text-decoration: none;
 color: white;
 padding: 0px 100px;
 font-size: 20px;
 }
 .header .htoo input{
 padding: 5px 10px;
 border-radius: 10px;
 }
 .header .htoo a:hover{
 color: blue;
 }
 .navbar{
 background-color:gray;
 width: 100%;
 }
 .navbar #col a{
 text-decoration: none;
 color:white;
 padding: 20px 160px;
 margin-right: 7px;
 font-weight: bold;
 font-size: 19px;
 }
 .navbar #col a:hover{
 color:black;
 }
 .dropdown {
 position: relative;
 display: inline-block;
 }

 .dropdown-content {
 display: none;
 position: absolute;
 background-color: gray;
 min-width: 50px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
 }

 .dropdown-content a {
 color: white;
 padding: 12px 16px;
 text-decoration: none;
 display: block;
 }

 .dropdown-content a:hover {background-color: white}

 .dropdown:hover .dropdown-content {
 display: block;
 }

 .dropdown:hover .dropbtn {
 background-color: gray;
 }
 .dropbtn{
 border: none;
 outline: none;
 background-color: gray;
 font-size: 19px;
 color: white;
 font-weight: bold;
 padding: 0 50px;
 }
 .footer{
  margin-top: 100px;
  background-color: black;
  width: 100%;
 }
 .footer h5{
  color: white;
  font-size: 18px;
  border-bottom: 1px solid white;
  padding: 10px 40px;
 }
 .footer .col-md-3{
  padding: 0 50px;
 }
 .footer .col-md-3 ul li{
  list-style: none;
  line-height: 40px;
 }
 .footer .col-md-3 ul li a{
  color: white;
  transition: all 0.5s ease;
  text-decoration: none;
 }
 .footer .container-fluid .row {
  background-color: gray;
  height: 70px;
 }
 .footer .container-fluid .row1 .col-lg-6{
  color: white;
  font-size: 18px;
  padding: 20px 80px;
 }
 .footer .row .right i{
  padding: 0 20px;
  font-size: 40px;
 }
 .body{
    margin-top: 100px;
 }
 .body .col-xl-6 img{
    width: 100%;
    height:400px
 }
</style>
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
                           <a href="#">R1</a>
                           <a href="#">R6</a>
                           <a href="#">XSR</a>
                        </div>
                       </div>
                    <a href="accessories.php">ACCESSORIES</a>
                    <a href="about.html">ABOUT</a>
                </div>
            </div>
        </div>
        </section>

        <section class="body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 left">
                        <a href="accessories.php"><img src="img/aa.jpg" alt=""></a>
                    </div>
                    <div class="col-xl-6">
                        <a href="yama.php"><img src="img/webp-1900.webp" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

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