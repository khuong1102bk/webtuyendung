<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($conn,"delete from jobs where job_id='$del'");
    if ($query) {
        echo '<script>alert("Đã Xóa!");window.location.href="jobs.php";</script>';
    }else {
        echo "Error!!!";
    }
    
?>