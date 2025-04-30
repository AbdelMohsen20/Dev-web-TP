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

