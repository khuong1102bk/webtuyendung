<?php
include('connection/db.php');
?>


<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile_number'];
    $address = $_POST['address'];


    $query = mysqli_query($conn, "update recruiter set first_name='$first_name',last_name='$last_name',company='$company',email='$email',
    password='$password',mobile_number='$mobile_number',address='$address' where id='$id'");

    if ($query) {
        echo '<script>alert("Updated!");window.location.href="company.php";</script>';
    } else {
        echo "<script>alert('Error!!!') </script>";
    }
}
?>


<?php
if (isset($_POST['update_img'])) {
    $id = $_POST['id'];
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['name'];
    move_uploaded_file($_FILES["file"]["tmp_name"], 'images/' . $file);
    $query1 = mysqli_query($conn, "update recruiter set img='$file' where id='$id'");
    if ($query1) {
        echo '<script>alert("Updated!");window.location.href="company.php";</script>';
    } else {
        echo "<script>alert('Error!') </script>";
    }
}
?>

<?php
$del=$_GET['del'];
    $del=mysqli_query($conn,"delete from jobs where job_id='$del'");
    if ($del) {
        echo '<script>alert("Đã Xóa!");window.location.href="company.php";</script>';
    }else {
        echo "Error!!!";
    }
    
?>

