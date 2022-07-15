<?php
include('include/header.php');

$query = mysqli_query($conn, "SELECT * FROM job_category CROSS JOIN recruiter where recruiter.email='{$_SESSION['email']}'");
?>

<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Đăng Tin Tuyển Dụng</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đăng Tin Tuyển Dụng</h1>
    </div>
</div>
</div>
</div>

<div class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">

                <form action="#" method="POST" class="p-5 bg-white">



                    <div class="row form-group">
                        <div class="col-md-12">
                            <h3>Tên công việc</h3>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input required type="text" name="job_title" id="job_title" class="form-control" placeholder="Nhập tên công việc">
                        </div>
                    </div>

                    <div class="row form-group mb-4">
                        <div class="col-md-12">
                            <h3>Ngành nghề</h3>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <select required name="category" class="category form-control" id="category">
                                <option disable selected hidden value="">Chọn danh mục ngành nghề</option>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    $email = $row['email'];
                                    $company = $row['company'];
                                    $address = $row['address'];
                                    $mobile_number = $row['mobile_number'];
                                ?>
                                    <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group mb-4">
                        <div class="col-md-12">
                            <h3>Công ty</h3>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input required type="text" name="company" id="company" class="form-control" value="<?php echo $company?>" placeholder="Nhập tên công ty">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <h3>Hình thức làm việc</h3>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-1">
                                <input required type="radio" value="Full Time" id="option-job-type-1" name="job_type"> Full Time
                            </label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-2">
                                <input required type="radio" value="Part Time" id="option-job-type-2" name="job_type"> Part Time
                            </label>
                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-3">
                                <input required  type="radio" value="Freelance" id="option-job-type-3" name="job_type"> Freelance
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-4">
                                <input required type="radio" value="Internship" id="option-job-type-4" name="job_type"> Internship
                            </label>
                        </div>
                    </div>

                    <div class="row form-group mb-4">
                        <div class="col-md-12">
                            <h3>Địa điểm</h3>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input required type="text" name="job_location" class="form-control" value="<?php echo $address?>" placeholder="Nhập địa điểm làm việc">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <h3>Mô tả công việc</h3>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <textarea required name="job_des" class="form-control" id="" cols="30" rows="7"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" value="Đăng" class="btn btn-primary  py-2 px-5">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h3 text-black mb-3">Thông tin liên lạc</h3>
                    <p class="mb-0 font-weight-bold">Địa chỉ</p>
                    <p class="mb-2 h5"><?php echo $company ?> - <?php echo $address ?></p>

                    <p class="mb-0 font-weight-bold">Email</p>
                    <p class="mb-2"><a href="#"><?php echo $email ?></a></p>

                    <p class="mb-0 font-weight-bold">Số điện thoại</p>
                    <p class="mb-2"><a href="#"><?php echo $mobile_number ?></a></p>
                </div>

                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Cần Trợ Giúp?</h3>
                    <p class="mb-2 font-weight-bold">Vui lòng liên hệ:</p>
                    <p class="mb-2">Email hỗ trợ:<a href="#"> hotro@vieclam24h.xyz</a></p>
                    <p class="mb-3">Hotline hỗ trợ:<a href="#"> +84 1234 6789</a></p>
                    <p><a href="#" class="btn btn-primary  py-2 px-3">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('include/footer.php');

if (isset($_POST['submit'])) {

    $email = $_SESSION['email'];
    $job_title = $_POST['job_title'];
    $job_type = $_POST['job_type'];
    $company = $_POST['company'];
    $category = $_POST['category'];
    $job_des = $_POST['job_des'];
    $job_location = $_POST['job_location'];

    $query = mysqli_query($conn, "insert into jobs(customer_email,job_title,company,category,job_type,job_des,job_location)
        values('$email','$job_title','$company','$category','$job_type','$job_des','$job_location')");

    if ($query) {
        echo '<script>alert("Đăng tin thành công!");window.location.href="index.php";</script>';
    } else {
        echo "<script>alert('Error!!!') </script>";
    }
}

?>