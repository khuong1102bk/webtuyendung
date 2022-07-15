<?php
include('include/header.php');
include('connection/db.php');

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['name'];
    $id_job = $_POST['id_job'];
    $job_seeker = $_POST['job_seeker'];
    $mobile_number = $_POST['mobile_number'];
    $job_exp = $_POST['job_exp'];
    $status='Đang chờ';

    move_uploaded_file($_FILES["file"]["tmp_name"], 'files/' . $file);
    $query = mysqli_query($conn, "insert into job_apply(first_name,last_name,dob,file,id_job,job_seeker,mobile_number,job_exp,status)
    values('$first_name','$last_name','$dob','$file','$id_job','$job_seeker','$mobile_number','$job_exp','$status')");
    
    if (!$query) {
        echo "<script>alert('Error')</script>";
    }
}
?>

        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><br><br>Nộp đơn thành công!<br><br><span class="small">Hàng ngàn công việc khác<br>đang chờ bạn khám phá!</span></h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Trở về Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span></p>


            </div>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>