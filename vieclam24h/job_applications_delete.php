<?php
include('connection/db.php');
$del=$_GET['del'];
    $del=mysqli_query($conn,"delete from job_apply where id='$del'");
    if ($del) {
        echo '<script>alert("Đã Xóa!");window.location.href="job_applications.php";</script>';
    }else {
        echo "Error!!!";
    }
?>