<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($conn,"delete from job_category where id='$del'");
    if ($query) {
        echo '<script>alert("Đã Xóa!");window.location.href="category.php";</script>';

        
    }else {
        echo "Error!!!";
    }
    
?>