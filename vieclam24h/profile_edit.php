<?php
include('connection/db.php');
?>


<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile_number'];
    $address = $_POST['address'];
    $exp = $_POST['exp'];
    $cv = $_FILES['cv']['name'];
    $tmp_name = $_FILES['cv']['name'];
    $about = $_POST['about'];
    move_uploaded_file($_FILES["cv"]["tmp_name"], 'files/' . $cv);

    $query = mysqli_query($conn, "update jobseeker set first_name='$first_name',last_name='$last_name',dob='$dob',email='$email',
    password='$password',mobile_number='$mobile_number',address='$address',experience='$exp',cv='$cv',about='$about' where id='$id'");

    if ($query) {
        echo '<script>alert("Updated!");window.location.href="profile.php";</script>';
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
    $query1 = mysqli_query($conn, "update jobseeker set img='$file' where id='$id'");
    if ($query1) {
        echo '<script>alert("Cập nhật!");window.location.href="profile.php";</script>';
    } else {
        echo "<script>alert('Error!') </script>";
    }
}
?>

<?php
$del=$_GET['del'];
    $del=mysqli_query($conn,"delete from job_apply where id='$del'");
    if ($del) {
        echo '<script>alert("Đã hủy!");window.location.href="profile.php";</script>';
    }else {
        echo "Error!!!";
    }
    
?>

