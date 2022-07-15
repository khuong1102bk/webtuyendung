<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($conn,"delete from admin_users where id='$del'");
    if ($query) {
        echo '<script>alert("Đã Xóa!");window.location.href="admin.php";</script>';
        
    }else {
        echo "Error!!!";
    }
    
?>