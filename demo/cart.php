<?php 
session_start();
$conn = mysqli_connect("localhost","root","","medx");
if(isset($_POST['name'])){ 
    $name = $_POST['name'];
    $username = $_SESSION['name'];
    $query = "DELETE FROM cart WHERE name = '$name' AND username = '$username'";
    $conn = mysqli_connect("localhost","root","","medx");
    mysqli_query($conn, $query);
}else { 
    # Do nothing!
}
$username = $_SESSION['name'];
$cart_query = "SELECT * FROM cart WHERE username = '$username'";
$res = mysqli_query($conn, $cart_query);
$answer = mysqli_fetch_all($res);
echo "<h1>Total Number of items: " .  count($answer) . "</h1>";
  foreach ($answer as $cart){
?>




<div class="grp">
<div class="item">
    <h4><?php echo $cart[1];?></h4>
    <p><?php echo $cart[2];?></p>
    <p>$<?php echo $cart[3];?></p>
    <form action="" method="post">
        <input type="text" name="name" hidden value="<?php echo $cart[1];?>"/>
    <button type="submit" name="delete">Delete</button>
    </form>
  </div>
</div>

<?php 
  }
?>

<style>
    .item { 
        background-color: aquamarine;
        height:fit-content;
        border: none;
        box-shadow:4px 5px 1px 3px darkslategray;
        padding:5px;
        padding-left:10px;
    }
    .grp { 
        gap: 100px;
        display: flex;
        flex-direction: column;
        column-gap: 10px;
        padding:10px;
    }
</style>