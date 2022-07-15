<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($conn,"delete from blog where id='$del'");
    if ($query) {
        echo '<script>alert("Đã Xóa!");window.location.href="news.php";</script>';

        
    }else {
        echo "Error!!!";
    }
    
?>