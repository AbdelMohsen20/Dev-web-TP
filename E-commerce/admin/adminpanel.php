<?php
session_start();
include('../include/connected.php'); //الاتصال بقاعدة البيانات
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(!isset($_SESSION['EMAIL'])){
        header('location:../index.php');
        exit();
    }
     else{
         ?>

<!-- sidebar start -->
<div class="sidebar_container">
    <div class="sidebar">
        <h1>Admini control panel</h1>
        <ul>
            <li><a href="../index.php" target="_blank">Home <i class="fa-solid fa-house"></i></a></li>
            <li><a href="../index.php" target="_blank">Products <i class="fa-solid fa-laptop"></i></a></li>
            <li><a href="../index.php" target="_blank">Add a product <i class="fa-solid fa-folder-plus"></i></a></li>
            <li><a href="../index.php" target="_blank">Users information <i class="fa-solid fa-users"></i></a></li>
            <li><a href="../index.php" target="_blank">User requests <i class="fa-solid fa-folder-open"></i></a></li>
            <li><a href="logout.php" target="_blank">Log_Out <i class="fa-solid fa-right-from-bracket"></i></a></li>
        </ul>
    </div>
  
 <!-- sidebar end -->

 <!--جلب البيانات  -->
 <?php
 /* 
 // Total Products
 $result_products = $conn->query("SELECT COUNT(*) AS total_products FROM products");
 $row_products = $result_products->fetch_assoc();
 $total_products = $row_products['total_products'];

 // Total Users
 $result_users = $conn->query("SELECT COUNT(*) AS total_users FROM users");
 $row_users = $result_users->fetch_assoc();
 $total_users = $row_users['total_users'];

 // Pending Orders
 $result_orders = $conn->query("SELECT COUNT(*) AS pending_orders FROM orders WHERE status = 'pending'");
 $row_orders = $result_orders->fetch_assoc();
 $pending_orders = $row_orders['pending_orders'];

 // Monthly Revenue (مثال على جمع مبلغ الطلبات لهذا الشهر)
 $result_revenue = $conn->query("SELECT SUM(total_price) AS revenue FROM orders WHERE MONTH(order_date) = MONTH(CURDATE()) AND YEAR(order_date) = YEAR(CURDATE())");
 $row_revenue = $result_revenue->fetch_assoc();
 $monthly_revenue = $row_revenue['revenue'];
 */
 ?> 

 <!-- Main Content -->
 <div class="main-content">
    <div class="welcome-message">
      <h1>Welcome, Admin!</h1>
      <h2>This is a summary of the latest updates.</h2>
    </div>

    <div class="dashboard-stats">
       <div class="stat-box">
         <h3>Total Products</h3>
         <p>120</p>
      </div>
       <div class="stat-box">
         <h3>Total Users</h3>
         <p>85</p>
       </div>
       <div class="stat-box">
         <h3>Pending Orders</h3>
         <p>6</p>
       </div>
       <div class="stat-box">
         <h3>Monthly Revenue</h3>
         <p>$5400</p>
       </div>
    </div>
  </div>
</div> 


<?php 
//close else
}
?>
</body>
</html>