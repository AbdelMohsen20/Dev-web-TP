<?php 
$host = "localhost";
$username ="root";
$password = "";
$dbname ="e-commerce";

$conn = mysqli_connect($host ,$username ,$password ,$dbname);
if(isset($conn)){
    echo "اتصال ناجح بقاعدة البيانات";
}
else{
    echo"لم يتم الاتصال بقاعدة البيانات";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TechDZ</title>
    <link href="./style.css" rel="stylesheet" />
  </head>
  <body>
    <!--nav bar-->
    <nav class="top-navbar">
      <div class="nav-container">
        <h1 class="logo"><a href="index.html">techDZ</a></h1>
      </div>
      
      <!--<div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label> -->
        <ul class="nav-links">
          <li><a  href="index.html">Home</a></li>
          <li><a  href="shop.php">Shop</a></li>
          <li><a  href="cart.php">Cart</a></li>
          <li><a  href="aboutus.html">About</a></li>
          <li><a  href="logout.php">logout</a></li>
          <li><a  href="product.html">products</a></li>
          <li><a  href="sign.html">logIn</a></li>
        </ul>
      </div>
    </nav>