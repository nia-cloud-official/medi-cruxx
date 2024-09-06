# THIS IS A FILE THE USER WILL USE TO ADD OR DELETE PRODUCTS FROM THE DATABASE!

<?php
  
  function deleteProduct($name){ 
    $query = "DELETE FROM products WHERE `name` = '$name'";
  }
?>