<?php

namespace ShoppingCart\Cart;
class Cart
{

    public $conn;
    private $getProductFromDBQuery;
    public $username;
    public $majorKey;
    private $countProductsResult;
    private $countProductsInCartQuery;
    private $product_name;
    private $product_info;
    private $product_amount;
    private $quantity;
    private $total;
    private $addtoCartQuery;
    private $productExistenceQuery;
    private $product_id;
    private $productExistenceResult;
    private $quantityResult;
    private $initialProductDataName;
    private $initialProductData;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "medx");
        $this->username = $_SESSION['name'];
    }
    public function add(int $a, int $b)
    {
        $c = $a + $b;
        return $c;
    }


    public function insertIntoCart($product_id)
    {
        $this->product_id = $product_id;
        $this->getProductFromDBQuery = "SELECT * FROM `products` WHERE `product_id` = '$this->product_id'";  
        $this->countProductsInCartQuery = "SELECT * FROM cart WHERE username = '$this->username' AND `name` = '$this->majorKey'";
        $result = mysqli_query($this->conn, $this->getProductFromDBQuery);
        $obtainedProduct = mysqli_fetch_all($result);
        foreach ($obtainedProduct as $op) {
            $this->majorKey = $op[1];
            $this->countProductsResult = mysqli_query($this->conn, $this->countProductsInCartQuery);
            $this->countProductsResult = mysqli_fetch_all($this->countProductsResult);
            if (!$this->countProductsResult) {
                $this->product_name = $op[1];
                $this->product_info = $op[2];
                $this->product_amount = $op[3];
                $this->quantity = 1;
                $this->total = $op[3] * $this->quantity;
                $this->addtoCartQuery = "INSERT INTO `cart` (`product_id`, `name`, `info`, `amount`, `username`, `quantity`, `total`) VALUES (NULL, '$this->product_name', '$this->product_info', '$this->product_amount', '$this->username', '$this->quantity', '$this->total')";
                mysqli_query($this->conn, $this->addtoCartQuery);
            } else {
                $this->productExistenceQuery = "SELECT * FROM `cart` WHERE `product_id` = '$this->product_id' AND username = '$this->username'";
                $this->productExistenceResult = mysqli_query($this->conn, $this->productExistenceQuery);
                $this->productExistenceResult = mysqli_fetch_all($this->productExistenceResult);
                foreach ($this->productExistenceResult as $this->initialProductData) {
                    $this->initialProductDataName = $this->initialProductData[1];
                    $this->quantityResult = $this->initialProductData[5] + 1;
                    $query_x = "UPDATE `cart` SET `quantity` = '$this->quantityResult' WHERE `name` = $this->initialProductDataName";
                    mysqli_query($this->conn, $query_x);
                }
            }
        }
    }
    public function displayCartProductsTotal(){
        return count($this->countProductsResult);
    }
}

class Prescription extends Cart { 
    
}
    ?>