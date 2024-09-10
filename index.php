<?php

use DBConnections\SQLDatabase\Database;
use ShoppingCart\Cart\Cart;

require 'core/cart/cartController.php';
require 'core/database/dbController.php';

session_start();
if (!$_SESSION['name']) {
    header("Location: ./views/login.php");
} else {
    # Welcome back user message or something!
}

$DB = new Database();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $cart = new Cart();
    $cart->__construct();
    $cart->insertIntoCart($product_id);
}
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Medi-Cruxx |Home</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="public/assets/css/font-awesome.css">

    <link rel="stylesheet" href="public/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="public/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="public/assets/css/lightbox.css">
    <script src="public/assets/js/jquery-2.1.0.min.js"></script>

</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.html" class="logo">
                            <img src="public/assets/images/logo.png">
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a class="active">Home</a></li>
                            <li class="scroll-to-section"><a>Over the Counter</a></li>
                            <li class="scroll-to-section"><a>Prescription</a></li>
                            <li class="scroll-to-section"><a>Consult a Doctor</a></li>
                            <li class="scroll-to-section">
                                <button onclick="myCart.showModal();" class="form-control"
                                    style="width:fit-content;background-color:black;border:solid 0.1px black;border-radius:0px;color:white;">My
                                    Orders
                                    <?php
                                    $username = $_SESSION['name'];
                                    $countMyCartContentsQuery = "SELECT * FROM cart WHERE username = '$username'";
                                    $countMyCartResults = mysqli_query($DB->conn, $countMyCartContentsQuery);
                                    $countMyCartResultsObtained = mysqli_fetch_all($countMyCartResults);
                                    echo count($countMyCartResultsObtained);
                                    ?>
                                </button>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <br><br>
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Welcome to Medi-cruxx</h2>
                        <span>Get all your medication in one place on the go. Medi-cruxx is an all in one online base
                            pharmacy for all your medical needs from prescribed medication to over the counter
                            pills</span>
                        <div class="main-border-button">
                            <a>Start Shopping</a>
                            <a>Discover More</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>All in one <br> Pharmacy</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="public/assets/images/pills.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Our Products</h2>
                        <span>Here is a listing of some of the medicine that we have for you.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <?php
                            $query = "SELECT * FROM `products` LIMIT 5";
                            $upperProducts = mysqli_query($DB->conn, $query);
                            $products = mysqli_fetch_all($upperProducts);
                            foreach ($products as $top_product) {
                                ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <form action="" method="post">
                                                    <input name="product_id" value="<?php echo $top_product[0]; ?>"
                                                        hidden />
                                                    <input type="submit" style="justify-content:center;
                                                padding:10px;border:none; 
                                                flex-direction:row;
                                                justify-content:center" name="add" value="Add to Cart" />
                                                </form>
                                            </ul>
                                        </div>
                                        <img src="public/assets/images/pills.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4><?php echo $top_product[1]; ?></h4>
                                        <span>$<?php echo $top_product[3]; ?></span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star active"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php }
                            ; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Cart Mini Modal Lol -->
    <dialog id="myCart" class="myCart">
        <section class="section" id="explore">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-content">
                            <h2>Your Cart</h2>
                            <span>Here are all the products you have selected..Click on complete to make the payment and
                                get your orders.</span>
                            <?php
                            if(isset($_GET['product_name'])) {
                                $name = $_GET['product_name'];
                                $qr = "DELETE FROM cart WHERE name = '$name' AND username = '$username'";
                                mysqli_query($DB->conn, $qr);
                            } elseif (isset($_GET['product_name'])) {
                                $name = $_GET['product_name'];
                                $qr = "DELETE FROM cart WHERE name = '$name' AND username = '$username'";
                                mysqli_query($DB->conn, $qr);
                            }
                            if (!$countMyCartResultsObtained) {
                                echo "<br/>";
                                echo "You haven't added anything to your cart yet.";
                            } else {
                                foreach ($countMyCartResultsObtained as $myCart) {
                                    ?>
                                    <form action="" method="GET">
                                        <div class="main-border-button" style="width:100% !important;display:flex;">
                                            <a style="width:100%"><?php echo $myCart[1]; ?></a>
                                            <a
                                                style="width:20px;display:flex;flex-direction:row;justify-content:center;">$<?php echo $myCart[3]; ?></a>
                                            <input type="text" id="product_name" name="product_name" hidden value="<?php echo $myCart[1]; ?>" />
                                            <button onclick="deleteFromCart()"
                                                style="width: fit-content;height: fit-content; background-color:transparent;border:none;outline:none;decoration:none;"
                                                >
                                                <a onclick="deleteFromCart()"
                                                    style="width:200px;display:flex;flex-direction:row;gap:100px; justify-content:center;">❌
                                                    Remove</a>
                                            </button>
                                        </div>
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                    
                           
                            <div class="main-border-button">
                                <button style="background-color: transparent;border:none;outline:none;decoration:none;"
                                    onclick="myCart.close()"><a>Back to Shop</a></button>
                                <a active>Complete Payment &rightarrow;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </dialog>
    <!-- -->

    <script>
                                function deleteFromCart(){ 
                                 $.ajax({
                                    method: "GET",
                                    url: "#",
                                    data: {
                                        product_name: document.getElementById('product_name').value,
                                    },
                                    success: function (msg) {
                                    },
                                        error: function(e) {
                                            alert("Error: " + e);
                                        }
                                });   
                                }
                                
                            </script>
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Over the Counter Medicine</h2>
                        <span>Here is our list of Over the Counter Medication you need for a quick recovery.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <?php
                            $query = "SELECT * FROM `products` WHERE `type` = 'otc' LIMIT 5";
                            $upperProducts = mysqli_query($DB->conn, $query);
                            $products = mysqli_fetch_all($upperProducts);
                            if (!$products) {
                                echo "We currently have no Over the Counter Medicine in Stock";
                            } else {
                                foreach ($products as $top_product) {
                                    ?>
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <form action="" method="post">
                                                        <input name="product_id" value="<?php echo $top_product[0]; ?>"
                                                            hidden />
                                                        <input type="submit" style="justify-content:center;
                                                padding:10px;border:none; 
                                                flex-direction:row;
                                                justify-content:center" name="add" value="Add to Cart" />
                                                    </form>
                                                </ul>
                                            </div>
                                            <img src="public/assets/images/pills2.jpg" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4><?php echo $top_product[1]; ?></h4>
                                            <p><?php echo $top_product[2]; ?></p>
                                            <ul class="stars" style="font-weight: 300 bold;">
                                                <h6>
                                                    $<?php echo $top_product[3]; ?>.00
                                                </h6>
                                            </ul>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Prescription</h2>
                        <span>Here is a list of our wide range prescription medication just like the doctor
                            ordered.</span>
                        <span style="font-size: smaller;font-style:normal;font-weight:300;">Note: We only sel
                            prescription medication to those who provide prescriptions from verified sources.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <?php
                            $query = "SELECT * FROM `products` WHERE `type` = 'prescription' LIMIT 5";
                            $upperPresProducts = mysqli_query($DB->conn, $query);
                            $productis = mysqli_fetch_all($upperPresProducts);
                            if (!$productis) {
                                echo "We currently have no prescription medicine in Stock";
                            } else {
                                foreach ($productis as $top_pres_product) {
                                    ?>
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <form action="" method="post">
                                                        <input name="product_id" value="<?php echo $top_pres_product[0]; ?>"
                                                            hidden />
                                                        <input type="submit" style="justify-content:center;
                                                padding:10px;border:none; 
                                                flex-direction:row;
                                                justify-content:center" name="add" value="Add to Cart" />
                                                    </form>
                                                </ul>
                                            </div>
                                            <img src="public/assets/images/pills2.jpg" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4><?php echo $top_pres_product[1] ?></h4>
                                            <p><?php echo $top_pres_product[2] ?></p>
                                            <ul class="stars">
                                                <h6>$<?php echo $top_pres_product[3] ?>.00</h6>
                                            </ul>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="public/assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li style="color:white;">Get all your medication in one place on the go.
                                Medi-cruxx is an all in one online base pharmacy for all your medical needs from
                                prescribed medication to over the counter pills.
                            </li>
                            <li><a>info@medicruxx.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a>Over the Counter Medicine</a></li>
                        <li><a>Prescription Medication</a></li>
                        <li><a>Accessories Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a>Homepage</a></li>
                        <li><a>About Us</a></li>
                        <li><a>Careers</a></li>
                        <li><a>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a>Help</a></li>
                        <li><a>FAQ's</a></li>
                        <li><a>Shipping</a></li>
                        <li><a>Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright ©
                            <script>
                                let date = new Date();
                                document.write(date.getFullYear());
                            </script> Medi-cruxx , Ltd. All Rights Reserved.

                            <br>⚡Powered by <a href="https://www.evanu.net">Evanu</a>
                        </p>
                        <ul>
                            <li><a href=" #"><i class="fa fa-facebook"></i></a></li>
                            <li><a><i class="fa fa-twitter"></i></a></li>
                            <li><a><i class="fa fa-linkedin"></i></a></li>
                            <li><a><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="public/assets/js/jquery-2.1.0.min.js"></script>
    <script src="public/assets/js/popper.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/owl-carousel.js"></script>
    <script src="public/assets/js/accordions.js"></script>
    <script src="public/assets/js/datepicker.js"></script>
    <script src="public/assets/js/scrollreveal.min.js"></script>
    <script src="public/assets/js/waypoints.min.js"></script>
    <script src="public/assets/js/jquery.counterup.min.js"></script>
    <script src="public/assets/js/imgfix.min.js"></script>
    <script src="public/assets/js/slick.js"></script>
    <script src="public/assets/js/lightbox.js"></script>
    <script src="public/assets/js/isotope.js"></script>
    <script src="public/assets/js/custom.js"></script>

    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>