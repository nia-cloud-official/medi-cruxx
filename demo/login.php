<?php
session_start();

$_SESSION['name'] = "Milton";
echo $_SESSION['name'];
header("Location: index.php");
?>