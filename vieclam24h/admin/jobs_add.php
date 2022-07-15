<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Vieclam24h | Tin Tuyển Dụng</title>
    <?php
    include('include/header.php');
    ?>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM job_category");
    ?>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="files/logo1.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">ViecLam24</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin Name</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <div class="user-panel mb-3 pb-3 d-flex">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                    </div>
                    <li class="nav-header">Quản Lý</li>
                    <?php if ($_SESSION['isadmin'] == true) { ?>
                        <li class="nav-item">
                            <a href="admin.php" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Nhân viên
                                </p>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a href="news.php" class="nav-link">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Tin Tức
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="category.php" class="nav-link">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>
                                Danh Mục
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="job_seeker.php" class="nav-link">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>
                                Người Tìm Việc
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="application.php" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Đơn Ứng Tuyển
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="recruiter.php" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Nhà Tuyển Dụng
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="jobs.php" class="nav-link active">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Tin Tuyển Dụng
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản lý tin tuyển dụng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="jobs.php">Quản lý tin tuyển dụng</a></li>
                            <li class="breadcrumb-item active">Thêm mới</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thêm tin tuyển dụng</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="" method="POST" style="margin-left: 20%; margin-right: 20%;" name="job_form" id="job_form">
                                    
                                    <div class="form-group">
                                        <label for="Job Name">Tên công việc</label>
                                        <input required type="text" name="job_title" id="job_title" class="form-control" placeholder="Nhập tên công việc">
                                    </div>
                                    <div class="form-group">
                                        <label for="Job Category">Ngành nghề</label>
                                        <select required name="category" class="category form-control" id="category">
                                            <option disable selected hidden value="">Chọn ngành nghề</option>
                                            <?php
                                            while ($row = mysqli_fetch_array($query)) { ?>
                                                <option value="<?php echo $row['category'] ?>"> <?php echo $row['category'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Doanh nghiệp</label>
                                        <input required type="text" name="company" id="company" class="form-control" placeholder="Nhập tên công ty">
                                    </div>
                                    <div class="form-group">
                                        <label for="Job Name">Email liên hệ</label>
                                        <input required type="email" name="email" id="email" class="form-control" placeholder="Nhập email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Job Type">Hình thức</label>
                                        <select required name="job_type" class="category form-control" id="job_type">
                                            <option disabled selected hidden value="">Chọn hình thức làm việc</option>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Freelance">Freelance</option>
                                            <option value="Internship">Internship</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Job Location">Địa điểm</label>
                                        <select required name="job_location" class="job_location form-control" id="job_location">
                                            <option disabled selected hidden value="">Chọn địa điểm</option>
                                            <option value="Hải Phòng">Hải Phòng
                                            <option value="An Giang">An Giang
                                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                            <option value="Bắc Giang">Bắc Giang
                                            <option value="Bắc Kạn">Bắc Kạn
                                            <option value="Bạc Liêu">Bạc Liêu
                                            <option value="Bắc Ninh">Bắc Ninh
                                            <option value="Bến Tre">Bến Tre
                                            <option value="Bình Định">Bình Định
                                            <option value="Bình Dương">Bình Dương
                                            <option value="Bình Phước">Bình Phước
                                            <option value="Bình Thuận">Bình Thuận
                                            <option value="Bình Thuận">Bình Thuận
                                            <option value="Cà Mau">Cà Mau
                                            <option value="Cao Bằng">Cao Bằng
                                            <option value="Cần Thơ">Cần Thơ
                                            <option value="Đà Nẵng">Đà Nẵng
                                            <option value="Đắk Lắk">Đắk Lắk
                                            <option value="Đắk Nông">Đắk Nông
                                            <option value="Điện Biên">Điện Biên
                                            <option value="Đồng Nai">Đồng Nai
                                            <option value="Đồng Tháp">Đồng Tháp
                                            <option value="Gia Lai">Gia Lai
                                            <option value="Hà Giang">Hà Giang
                                            <option value="Hà Nam">Hà Nam
                                            <option value="Hà Nội">Hà Nội
                                            <option value="Hà Tĩnh">Hà Tĩnh
                                            <option value="Hải Dương">Hải Dương
                                            <option value="Hậu Giang">Hậu Giang
                                            <option value="Hòa Bình">Hòa Bình
                                            <option value="Hưng Yên">Hưng Yên
                                            <option value="Khánh Hòa">Khánh Hòa
                                            <option value="Kiên Giang">Kiên Giang
                                            <option value="Kon Tum">Kon Tum
                                            <option value="Lai Châu">Lai Châu
                                            <option value="Lâm Đồng">Lâm Đồng
                                            <option value="Lạng Sơn">Lạng Sơn
                                            <option value="Lào Cai">Lào Cai
                                            <option value="Long An">Long An
                                            <option value="Nam Định">Nam Định
                                            <option value="Nghệ An">Nghệ An
                                            <option value="Ninh Bình">Ninh Bình
                                            <option value="Ninh Thuận">Ninh Thuận
                                            <option value="Phú Thọ">Phú Thọ
                                            <option value="Phú Yên">Phú Yên
                                            <option value="Quảng Bình">Quảng Bình
                                            <option value="Quảng Ngãi">Quảng Ngãi
                                            <option value="Quảng Ninh">Quảng Ninh
                                            <option value="Quảng Trị">Quảng Trị
                                            <option value="Sóc Trăng">Sóc Trăng
                                            <option value="Sơn La">Sơn La
                                            <option value="Tây Ninh">Tây Ninh
                                            <option value="Thái Bình">Thái Bình
                                            <option value="Thái Nguyên">Thái Nguyên
                                            <option value="Thanh Hóa">Thanh Hóa
                                            <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                            <option value="Tiền Giang">Tiền Giang
                                            <option value="TP Hồ Chí Minh">TP Hồ Chí Minh
                                            <option value="Trà Vinh">Trà Vinh
                                            <option value="Tuyên Quang">Tuyên Quang
                                            <option value="Vĩnh Long">Vĩnh Long
                                            <option value="Vĩnh Phúc">Vĩnh Phúc
                                            <option value="Yên Bái">Yên Bái
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Job Description">Mô tả công việc</label>
                                        <textarea required name="job_des" id="job_des" class="form-control" cols="30" rows="10"></textarea>
                                    </div>



                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-success" value="Thêm" name="submit" id="submit">
                                    </div>

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
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include('include/footer.php');
    ?>

    <?php
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $job_title = $_POST['job_title'];
        $job_type = $_POST['job_type'];
        $company = $_POST['company'];
        $category = $_POST['category'];
        $job_des = $_POST['job_des'];
        $job_location = $_POST['job_location'];

        $query = mysqli_query($conn, "insert into jobs(customer_email,job_title,company,category,job_type,job_des,job_location)
        values('$email','$job_title','$company','$category','$job_type','$job_des','$job_location')");

        if ($query) {
            echo '<script>alert("Thêm thành công!");window.location.href="jobs.php";</script>';
        } else {
            echo "<script>alert('Error!!!') </script>";
        }
    }

    ?>