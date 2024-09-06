<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="public/assets/css/font-awesome.css">

    <link rel="stylesheet" href="public/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="public/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="public/assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

#/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="public/assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#">Over the Counter</a></li>
                            <li class="scroll-to-section"><a href="#">Prescription</a></li>
                            <li class="scroll-to-section"><a href="#">Consult a Doctor</a></li>
                            <li class="scroll-to-section">
                            <button class="form-control" style="width:fit-content;background-color:black;border:solid 0.1px black;border-radius:0px;color:white;">My Orders</button>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
<br><br>
     <!-- ***** Explore Area Starts ***** -->
     <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <div class="left-content">
                        <h2>Welcome to Medi-cruxx</h2>
                        <span>Get all your medication in one place on the go. Medi-cruxx is an all in one online base pharmacy for all your medical needs from prescribed medication to over the counter pills</span>
                        <div class="main-border-button">
                        <a href="products.html">Start Shopping</a>
                        <a href="products.html">Discover More</a>
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
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Men Area Starts ***** -->
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
                            $conn = mysqli_connect("localhost","root","","medx");
                            $query = "SELECT * FROM `products` LIMIT 5";
                            $upperProducts = mysqli_query($conn, $query);
                            $products = mysqli_fetch_all($upperProducts);
                            foreach($products as $top_product){
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
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
                            <?php };?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
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
                             $conn = mysqli_connect("localhost","root","","medx");
                             $query = "SELECT * FROM `products` WHERE `type` = 'otc' LIMIT 5";
                             $upperProducts = mysqli_query($conn, $query);
                             $products = mysqli_fetch_all($upperProducts);
                             if(!$products){
                                echo "We currently have no Over the Counter Medicine in Stock";
                             } else {  
                             foreach($products as $top_product){
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="public/assets/images/pills2.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $top_product[1]; ?></h4>
                                    <p><?php echo $top_product[2]; ?></p>
                                    <ul class="stars" style="font-weight: 300 bold;">
                                        <h6>
                                            $<?php echo $top_product[3];?>.00
                                        </h6>
                                    </ul>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Prescription</h2>
                        <span>Here is a list of our wide range prescription medication just like the doctor ordered.</span>
                        <span style="font-size: smaller;font-style:normal;font-weight:300;">Note: We only sel prescription medication to those who provide prescriptions from verified sources.</span>
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
                             $conn = mysqli_connect("localhost","root","","medx");
                             $query = "SELECT * FROM `products` WHERE `type` = 'prescription' LIMIT 5";
                             $upperPresProducts = mysqli_query($conn, $query);
                             $productis = mysqli_fetch_all($upperPresProducts);
                             if(!$productis){
                                echo "We currently have no prescription medicine in Stock";
                             } else {  
                             foreach($productis as $top_pres_product){
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
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
                            <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->



    
    <!-- ***** Footer Start ***** -->
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
                                Medi-cruxx is an all in one online base pharmacy for all your medical needs from prescribed medication to over the counter pills.
                            </li>
                            <li><a href="#">info@medicruxx.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Over the Counter Medicine</a></li>
                        <li><a href="#">Prescription Medication</a></li>
                        <li><a href="#">Accessories Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © <script>let date = new Date(); document.write(date.getFullYear());</script> Medi-cruxx., Ltd. All Rights Reserved. 
                        
                        <br>⚡Powered by  <a href="https://www.evanu.net/" target="_parent" title="">Evanu</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="public/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="public/assets/js/popper.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
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
    
    <!-- Global Init -->
    <script src="public/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>