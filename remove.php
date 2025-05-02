<?php
session_start();
$servername = "localhost";
$username = "galap_db";
$password = "password";
$dbname = "galap_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$product_ID=$_POST['product_ID'];
$sql = "DELETE FROM Cart WHERE product_ID='$product_ID'";
$conn->query($sql);
header("Location: https://galap.myweb.cs.uwindsor.ca/COMP-2707-W23/project/shoppingcart.php");

?>