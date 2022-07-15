<?php
include('include/header.php');
include('connection/db.php');
?>


<?php
$sql = mysqli_query($conn, "SELECT * FROM  recruiter where email='{$_SESSION['email']}'");
while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    $email = $row['email'];
    $password = $row['password'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $company = $row['company'];
    $address = $row['address'];
    $mobile_number = $row['mobile_number'];
    $file = $row['img'];
}
?>

<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Quản lý đơn ứng tuyển</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đơn Ứng Tuyển</h1>
    </div>
</div>
</div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="col-md-12">
            <h2 class="h3 mb-4">Công Ty <?php echo $company ?></h2>
        </div>
        <div class="row block-9 bg-white p-5">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin đơn ứng tuyển</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="POST" style="margin-left: 20%; margin-right: 20%;" name="" id="">
                                    <?php
                                    $id = $_GET['edit'];
                                    $query = mysqli_query($conn, "select * from job_apply left join jobs ON job_apply.id_job = jobs.job_id where job_apply.id ='$id'");

                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="Job_Title">Tên công việc</label>
                                                <input readonly type="text" name="job_title" id="job_title" value="<?php echo $row['job_title']; ?>" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="Job_Title">Doanh nghiệp</label>
                                                <input readonly type="text" name="company" id="company" value="<?php echo $row['company']; ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="Job Sekker">Người nộp đơn</label>
                                                <input readonly type="text" name="name" id="name" value="<?php echo $row['last_name']; ?> <?php echo $row['first_name']; ?>" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="dob">Ngày sinh</label>
                                                <input readonly type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="Job Seeker email">Email</label>
                                                <input readonly type="email" name="email" id="email" value="<?php echo $row['job_seeker']; ?>" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="Job Seeker Mobile Number">Số điện thoại</label>
                                                <input readonly type="number" name="mobile_number" id="mobile_number" value="<?php echo $row['mobile_number']; ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                            <label for="Job Seeker Experience">Kinh nghiệm</label>
                                            <input readonly type="text" name="job_exp" id="job_exp" value="<?php echo $row['job_exp']; ?>" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="Job Seeker email">Hồ sơ đính kèm - CV</label>
                                            <a class="align-middle form-control" target="_blank" href="http://localhost/vieclam24h/files/<?php echo $row['file']; ?> "><?php echo $row['file']; ?></a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-success" value="Tuyển dụng" name="accept" id="accept">
                                            <input type="submit" class="btn btn-block btn-danger" value="Từ chối" name="reject" id="reject">
                                        </div>


                                    <?php } ?>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</section>



<?php

include('include/footer.php');
?>

<?php
    if (isset($_POST['accept'])) {
        $accept = mysqli_query($conn, "update job_apply set status='Đã tuyển!' where id='$id'");
        if ($accept) {
            echo '<script>alert("Tuyển dụng thành công!");window.location.href="job_applications.php";</script>';
        } else {
            echo "<script>alert('Error!!!') </script>";
        }
    }

    if (isset($_POST['reject'])) {
        $accept = mysqli_query($conn, "update job_apply set status='Không đạt!' where id='$id'");
        if ($accept) {
            echo '<script>alert("Đã từ chối!");window.location.href="job_applications.php";</script>';
        } else {
            echo "<script>alert('Error!!!') </script>";
        }
    }

    ?>