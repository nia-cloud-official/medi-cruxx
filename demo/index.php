

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
    <p>$<?php echo $product[3]; ?> </p>
    <input type="submit" value="Add to Cart"/>
</div>
</form>
<?php 
 }
?>