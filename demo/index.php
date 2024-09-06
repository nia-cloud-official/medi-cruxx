<?php
session_start();
   if(!$_SESSION['name']){ 
     header("Location: login.php");
   }else { 
   }
?>
<?php

// class Cart { 
//      private $products; 
//      private $product_amount;
//      public $total;

//      public function __construct(){}
//      public function add($product_name,$product_amount){ 
//          return $this->total = $this->addition($product_amount, intval($product_amount));
         
//      }
//      public function addition($a,$b){ 
//         $c = $a + $b;
//         return $c;
//      }
// }

// $cart = 0;

 if(isset($_POST['product_id'])){
     $product_id = $_POST['product_id'];
     insertIntoCart($product_id);
 }



function insertIntoCart($product_id){ 
    $query1 = "SELECT * FROM `products` WHERE `product_id` = '$product_id'";
    $conn = mysqli_connect("localhost","root","","medx");
    $result = mysqli_query($conn, $query1);
    $takeProduct = mysqli_fetch_all($result);
    foreach($takeProduct as $tp){
    $product_name = $tp[1];
    $product_info = $tp[2];
    $product_amount = $tp[3];
    $username = $_SESSION['name'];
    $query = "INSERT INTO `cart` (`product_id`, `name`, `info`, `amount`, `username`) VALUES (NULL, '$product_name', '$product_info', '$product_amount', '$username')";
    mysqli_query($conn, $query);
    }
}
?>

<?php
 $query = "SELECT * FROM products"; 
 $conn = mysqli_connect("localhost","root","","medx"); 
 $result = mysqli_query($conn, $query);
 $result = mysqli_fetch_all($result);
 foreach($result as $product){ 
 ?>

<br><br><br>
<form action="" method="post">
<div class="product" style="background-color:lightblue;border:solid;padding:10px; height:300px;width:200px;">
    <h1><?php echo $product[1]; ?> </h1>
    <p><?php echo $product[2]; ?> </p>
    <input name="product_id" value="<?php echo $product[0];?>">
    <p>$<?php echo $product[3]; ?> </p>
    <input type="submit" value="Add to Cart"/>
</div>
</form>
<?php 
 }
?>