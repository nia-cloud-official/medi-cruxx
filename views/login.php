<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <title>Medi-cruxx | Quick Login</title>
    <link rel="stylesheet" type="text/css" href="./../public/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./../public/assets/css/font-awesome.css">

    <link rel="stylesheet" href="./../public/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="./../public/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="./../public/assets/css/lightbox.css">

    <style>
        .gap { height:100px;}
    </style>

<?php

use Account\UserAccess\User;
require './../core/user/user.php';

    if(isset($_POST['name'])){ 
        $username = $_POST['name'];
        session_start();
        $_SESSION['name'] = $username;
        header("Location: ./../index.php");
    }else { 
        # Do nothing!
    }
?>

    <center>
        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>Hello. Don't Be Shy!</h2>
                            <span>Welcome to Medi-cruxx to get started please enter your phone number and name.</span>
                        </div>
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Your Number">
                                    </fieldset>
                                </div>
                                <div class="gap"></div>
                                    <fieldset>
                                        <button style="width: fit-content; padding-left:20px;padding-right:20px;" type="submit" id="form-submit" class="main-dark-button">
                                        Continue <i class="fa fa-paper-plane"></i></button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <style>
        * {
            justify-content: center;
        }
    </style>


    <script src="./../public/assets/js/jquery-2.1.0.min.js"></script>


    <script src="./../public/assets/js/popper.js"></script>
    <script src="./../public/assets/js/bootstrap.min.js"></script>


    <script src="./../public/assets/js/owl-carousel.js"></script>
    <script src="./../public/assets/js/accordions.js"></script>
    <script src="./../public/assets/js/datepicker.js"></script>
    <script src="./../public/assets/js/scrollreveal.min.js"></script>
    <script src="./../public/assets/js/waypoints.min.js"></script>
    <script src="./../public/assets/js/jquery.counterup.min.js"></script>
    <script src="./../public/assets/js/imgfix.min.js"></script>
    <script src="./../public/assets/js/slick.js"></script>
    <script src="./../public/assets/js/lightbox.js"></script>
    <script src="./../public/assets/js/isotope.js"></script>


    <script src="./../public/assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

    </body>

</html>