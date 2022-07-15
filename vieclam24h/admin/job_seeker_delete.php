<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($conn,"delete from jobseeker where id='$del'");
    if ($query) {
        echo '<script>alert("Đã xóa!");window.location.href="job_seeker.php";</script>';
    }else {
        echo "Error!!!";
    }
    
?>