<?php 
include('../include/connected.php');
?> 
<?php 
@$pro_name = $_POST['pro_name'];
@$pro_price = $_POST['pro_price'];
@$pro_details = $_POST['pro_details'];
@$pro_type = $_POST['pro_type'];
@$proadd = $_POST['proadd'];

//img start
@$imageName =$_FILES['pro_img']['name'];
@$imageTmp =$_FILES['pro_img']['tmp_name'];//الاسم المؤقت لتخزين الصورة داخل قاعدة البيانات
//img end 
 if(isset($proadd)){ //اذا تم الضغظ على الضافة منتج ولم يتم ادخال المعلومات
    if(empty($pro_name) || empty($pro_price) ||  empty($pro_details) ||empty($pro_type)){
echo '<script>alert("Please fill in all fields.");</script>';// تظهر الرجاء ملئ الحقول
    }
else{
    $pro_img =rand(0,500)."_" .$imageName;//إنشاء رقم عشوائي للصورة
    move_uploaded_file($imageTmp,"../uploads/img//.$pro_img");//نقل الصورة الى uploads/img

$query="INSERT INTO product(pro_name,pro_img,pro_price,pro_details,pro_type) 
VALUES('$pro_name','$pro_price','$pro_details','$pro_type')";
$result=mysqli_query($conn,$query);
if(isset($result)){
    echo'<script>alert("Added successfully")';
}else{
    echo'<script>alert("NO Added successfully")';
} 
}   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <main>
            <div class="form_product">
                <h1>Add-Product</h1>
                <form action="addproduct.php" method="post" enctype="multipart/form-data">

                    <label for="name">Name labtop</label>
                    <input type="text" name="pro_name" id="name">

                    <label for="file"> image</label>
                    <input type="file" name="pro_img" id="file">

                    <label for="price"> price</label>
                    <input type="text" name="pro_price" id="price">

                    <label for="details"> details</label>
                    <input type="text" name="pro_details" id="details">

                    

                    <!-- start section --> 
                    <div>
                        <label for="form_control">Type</label>
                        <select name="pro_type" id="form_control">

                        <?php 
                        $query= "SELECT *FROM "
                        ?>
                            <option value="">Dell</option>
                            <option value="">Lenovo</option>
                            <option value="">hp</option>
                            <option value="">Asus</option>
                        </select>
                    </div><br>
                    <br>
                    <!-- end section -->
                    <button class="button" type="submit" name="proadd">
                        ADD +
                    </button>

                     
                </form>

            </div>
        </main>
    </center>
</body>
</html>