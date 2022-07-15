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
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Thông Tin Công Ty</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Thông Tin Công Ty</h1>
    </div>
</div>
</div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12">
                <h2 class="h3">Công Ty <?php echo $company ?></h2>
            </div>


        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="company_edit.php" method="POST" name="profile" id="profile" class="bg-white p-5 contact-form">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">

                    <div class="form-group">
                        <label for="">Tên Công Ty</label>
                        <input required type="text" class="form-control" name="company" id="company" value="<?php echo $company ?>" placeholder="Company">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input required type="text" class="form-control" name="address" id="address" value="<?php echo $address ?>" placeholder="Your Address">
                    </div>

                    <div class="form-group">
                        <label for="">Tên Nhân Viên</label>
                        <input required type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $first_name ?>" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="">Họ Nhân Viên</label>
                        <input required type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $last_name ?>" placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input required type="text" minlength="10" maxlength="10" class="form-control" name="mobile_number" id="mobile_number" value="<?php echo $mobile_number ?>" placeholder="Your Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input readonly type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input required type="password" class="form-control" name="password" id="password" value="<?php echo $password ?>" placeholder="Your Password">
                        <input type="checkbox" onclick="myFunction()" class="mt-3"> Hiện mật khẩu
                        <script>
                            function myFunction() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" id="update" value="Update" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <form action="company_edit.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                    <label for="">Logo Công ty</label>
                    <img src="images/<?php echo $file ?>" onerror="this.src='images/user.png'" alt="img" name="img" id="img" class="img-thumbnail d-block mx-auto mb-3">
                    <div class="row mx-1">
                        <input required type="file" name="file" id="file">
                        <input type="submit" class="col btn btn-primary" name="update_img" id="update_img" value="Update">
                    </div>
                </form>

                <h3 class="h3 text-black mt-5 mb-4">Danh Sách Bài Đăng Tuyển Dụng</h3>
                <?php
                $query = mysqli_query($conn, "select * from jobs where customer_email='{$_SESSION['email']}'");
                while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="ftco-animate">
                        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                            <div class="mb-4 mb-md-0 mr-5">
                                <div class="job-post-item-header d-flex align-items-center">
                                    <h2 class="mr-3 text-black h5"><?php echo $row['job_title'] ?></h2>
                                    <div class="badge-wrap">
                                        <span class="bg-success text-white badge py-2 px-3"><?php echo $row['job_type'] ?></span>
                                    </div>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span> <span><?php echo $row['company'] ?></span></div>
                                    <div><span class="icon-my_location"></span> <span><?php echo $row['job_location']; ?></span></div>
                                </div>
                            </div>

                            <div class="ml-auto d-flex">
                                <a href="job_edit.php?edit=<?php echo $row['job_id'] ?>" class="btn btn-primary py-2 mr-1">Sửa</a>
                                <a onclick="return confirm('Xóa tin tuyển dụng này?')" href="company_edit.php?del=<?php echo $row['job_id'] ?>" class="btn btn-danger py-2">Xóa</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                <?php
                if (!mysqli_num_rows($query)) { ?>
                    <span class="custom-select-lg">Chưa có bài đăng tuyển dụng công việc nào!</span>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>



<?php

include('include/footer.php');
?>