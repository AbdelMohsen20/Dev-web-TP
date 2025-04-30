<?php 
session_start(); // بدء جلسة لتخزين بيانات الدخول
include('../include/connected.php'); //الاتصال بقاعدة البيانات
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
.container{
    width: 400px;  /* عرض الصندوق سيكون 400 بكسل. */
    margin: 60px auto;  /* توسيط الالصندوق أفقيًا */
    padding: 30px; /*إضافة 30 بكسل مسافة داخلية من جميع الجهات داخل الحاوية */
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* إضافة الظل حول الصندوق*/
    border-radius: 30px;
    background-color: rgb(0, 253, 241);
}
h1{
    text-align: center;
    margin-bottom: 40px; /* ترك مسافة أسفل العنوان بمقدار 20 بكسل قبل العناصر التالية*/
}
form{
    display: flex;
    flex-direction: column;
    align-items: center;
}
label{
    display: block;
    margin-bottom: 5px;
    font-weight: bolder;
}
input[type= "email"],[type= "password"]{
     width: 100%;
     padding: 10px;
     border: 1px solid #ccc;
     margin-bottom: 15px;
     border-radius: 15px;
}
button{
    width: 65%;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 15px;
} 
button:hover{
    background-color: rgb(8, 4, 48);
    color: blue;
}   
</style>
<body>
    <main>
        <?php 
        @$ADemail =$_POST['email']; //تخزين هذا الإيميل في متغير اسمه $ADemail علشان نستخدمه لاحقاً في التحقق من البيانات
        @$ADpassword =$_POST['password'];
        @$ADadd =$_POST['add']; //التحقق من أن الزر "LogIn" قد تم الضغط عليه
        
        if(isset($ADadd)){ // إذا تم الضغط على "LogIn"
            if(empty($ADemail)|| empty($ADpassword)){ // التحقق من أن البريد وكلمة المرور غير فارغين
                echo '<script>alert (" Please enter your password and email");</script>';
            }
            else{
                $query="SELECT *FROM admin WHERE EMAIL='$ADemail' AND password='$ADpassword' "; // وابحث عن سطر يكون فيه البريد وكلمة المرور مطابقين تمامًا للقيم التي أدخلها المستخدم ,اختر كل الأعمدة من جدول admin.
                $result=mysqli_query($conn,$query); //تخزين النتيجة التي ترجع من قاعدة البيانات (يوجد صف او لا )
                if(mysqli_num_rows($result)==1){ // تحسب كم عدد الصفوف التي رجعت من قاعدة البيانات لو لقيت صف واحد فقط يطابق البريد وكلمة المرور، فهذا يعني أن البيانات صحيحة والمستخدم موجود  
                    $_SESSION['EMAIL']=$ADemail ; //يتم حفظ البريد في $_SESSION 
                    echo '<script>alert (" Welcome admin, you will be redirected to the control panel");</script>';
                    header("REFRESH:2; URL=adminpanel.php");
                }
                else{
                    echo '<script>alert (" Welcome, you are not allowed to access this page. You will be redirected to the store.");</script>';
                    header("REFRESH:2; URL=../index.php");
                    
                }
            }
        }
        ?>
        <div class="container">
            <h1>LogIn</h1>
          <form action="admin.php" method="post">
              <label for="em">Email</label>
              <input type="email" name="email" id="em" placeholder="Email" >
<br>
              <label for="pass">password</label>
              <input type="password" name="password" id="pass" placeholder="Password" > 
              
<br>
              <button type="submit" name="add">LogIn</button>
          </form>   
        </div>
    </main>
</body>
</html>