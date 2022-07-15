<?php
include('include/header.php');
if (isset($_SESSION['email']) == true) {
} else {
    echo '<script>alert("Bạn cần đăng nhập để ứng tuyển!");window.location.href="signin.php";</script>';
}

if (isset($_SESSION['recruiter']) == true) {
    echo '<script>alert("Bạn cần đăng nhập bằng tài khoản Người Tìm Việc để ứng tuyển!");window.location.href="index.php";</script>';
}
?>

<!-- END nav -->

<?php
include('connection/db.php');
$id = $_GET['id'];

$query = mysqli_query($conn, "select * from jobs where job_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $title = $row['job_title'];
    $job_type = $row['job_type'];
    $des = $row['job_des'];
    $category = $row['category'];
    $company = $row['company'];
    $location = $row['job_location'];
    $email = $row['customer_email'];
    $id_job = $row['job_id'];
}
?>
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Tin Tuyển Dụng</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tin Tuyển Dụng</h1>
    </div>
</div>
</div>
</div>

<div class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form action="#" class="p-5 bg-white shadow rounded">
                    <h3 class="h3 mb-3">Thông tin tuyển dụng</h3>
                    <hr>
                    
                            <label class="font-weight-bold" for="fullname">Tên công việc</label>
                            <h4><?php echo $title ?></h4>
                    
                    <hr>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="font-weight-bold" for="fullname">Hình thức làm việc</label>
                            <h4><?php echo $job_type ?></h4>
                        </div>
                        <div class="col-sm-4">
                            <label class="font-weight-bold" for="fullname">Công ty</label>
                            <h4><?php echo $company ?></h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row form-group mb-4">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Thông tin công việc</label>
                            <!-- <textarea readonly cols="30" rows="10" class="form-control"><?php echo $des ?></textarea> -->
                            <pre class="pre"><?php echo $des ?></pre>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white shadow rounded">
                    <h3 class="h3 text-black mb-3">Thông tin liên lạc</h3>
                    <p class="mb-0 font-weight-bold">Địa chỉ</p>
                    <p class="mb-2 h5"><?php echo $company ?> - <?php echo $location ?></p>

                    <p class="mb-0 font-weight-bold">Email</p>
                    <p class="mb-2"><a href="#"><?php echo $email ?></a></p>

                    <p class="mb-0 font-weight-bold">Số điện thoại</p>
                    <p class="mb-2"><a href="#">+12 3456 7890</a></p>
                </div>

                <div class="p-4 mb-3 bg-white shadow rounded">
                    <h3 class="h5 text-black mb-3">Cần Trợ Giúp?</h3>
                    <p class="mb-2 font-weight-bold">Vui lòng liên hệ:</p>
                    <p class="mb-2">Email hỗ trợ:<a href="#"> hotro@vieclam24h.xyz</a></p>
                    <p class="mb-3">Hotline hỗ trợ:<a href="#"> +84 1234 6789</a></p>
                    <p><a href="#" class="btn btn-primary  py-2 px-3">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-12">
                <form action="apply_job.php" method="POST" enctype="multipart/form-data" class="p-5 bg-white shadow rounded">
                    <div class="form-group px-5">
                        <h3 class="h3 text-center mb-4">Thông tin ứng tuyển</h3>
                        <hr>
                        <input type="hidden" name="job_seeker" id="job_seeker" value="<?php echo $_SESSION['email']; ?>">
                        <input type="hidden" name="id_job" id="id_job" value="<?php echo $id_job ?>">
                        <?php

                        $sql = mysqli_query($conn, "select * from jobseeker where email='{$_SESSION['email']}'");
                        while ($row = mysqli_fetch_array($sql)) {
                            $email = $row['email'];
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $dob = $row['dob'];
                            $mobile_number = $row['mobile_number'];
                            $address = $row['address'];
                            $exp = $row['experience'];
                        }
                        ?>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="">Họ</label>
                                <input required type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $last_name ?>" placeholder="Enter Last Name">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Tên</label>
                                <input required type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $first_name ?>" placeholder="Enter First Name">
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="">Ngày sinh</label>
                                <input required type="date" name="dob" id="dob" value="<?php echo $dob ?>" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Địa chỉ</label>
                                <input required type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>" placeholder="Enter Address">
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label for="">Số điện thoại</label>
                                <input required type="number" name="mobile_number" id="mobile_number" class="form-control" value="<?php echo $mobile_number ?>" placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $_SESSION['email']; ?>">
                            </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <label for="">Kinh nghiệm</label>
                                <select required name="job_exp" class="form-control" id="job_exp">
                                    <option disabled selected hidden value="">Kinh nghiệm nghề nghiệp</option>
                                    <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                    <option value="Ít hơn 1 năm kinh nghiệm">Ít hơn 1 năm kinh nghiệm</option>
                                    <option value="Từ 1 đến 2 năm kinh nghiệm">Từ 1 đến 2 năm kinh nghiệm</option>
                                    <option value="Từ 2 đến 3 năm kinh nghiệm">Từ 2 đến 3 năm kinh nghiệm</option>
                                    <option value="Trên 3 năm kinh nghiệm">Trên 3 năm kinh nghiệm</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label for="">Chọn hồ sơ</label>
                                <input required type="file" accept=".doc,.docx,.pdf" name="file" id="file" class="form-control">
                            </div>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Nộp Đơn Ứng Tuyển" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>



<?php

include('include/footer.php');
?>