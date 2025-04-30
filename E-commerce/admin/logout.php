<?php
session_start();//بدأ جلسة
session_unset();// حذف الجلسة التي تم حفظهاداخل المتصفح
session_destroy();

header('location:admin.php') //اعادة توجيه المستخدم 
?>