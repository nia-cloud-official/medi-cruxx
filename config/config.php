<?php 

$conn = mysqli_connect('localhost', 'root', '', 'medx');

if (!mysqli_error($conn)) {
    $status = "Successfully Connected!";
} else {
    $status = "Failed to connect : " . "" . mysqli_error($conn);
    echo  "error: " . mysqli_error($conn);
}

?>