<?php

$conn = new mysqli("localhost", "root", "", "shoppingstore");

if (!$conn) {
    echo "Error!:{$conn->connect_error}";
}
?>