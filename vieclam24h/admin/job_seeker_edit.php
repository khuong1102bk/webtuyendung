<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Vieclam24h | Người Tìm Việc</title>
    <?php
    include('include/header.php');

    $id = $_GET['edit'];
    $query = mysqli_query($conn, "select * from jobseeker where id= '$id'");
    while ($row = mysqli_fetch_array($query)) {
        $email = $row['email'];
        $password = $row['password'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $dob = $row['dob'];
        $mobile_number = $row['mobile_number'];
        $address = $row['address'];
        $experience = $row['experience'];
        $about = $row['about'];
        $img = $row['img'];
    }
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
                        <a href="job_seeker.php" class="nav-link active">
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
                        <a href="jobs.php" class="nav-link">
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
                        <h1>Quản lý người tìm việc</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="job_seeker.php">Quản lý người tìm việc</a></li>
                            <li class="breadcrumb-item active">Chỉnh sửa</li>
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
                                <h3 class="card-title">Chỉnh sửa người tìm việc</h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="POST" style="margin-left: 20%; margin-right: 20%;" name="customer_form" id="customer_form">
                                    <div class="form-group">
                                        <label for="Customer Email">Email</label>
                                        <input required type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email">
                                    </div>


                                    <div class="form-group">
                                        <label for="Customer Password">Mật khẩu</label>
                                        <input required type="pass" name="password" id="password" value="<?php echo $password; ?>" class="form-control" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="Last Name">Họ</label>
                                        <input required type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="First Name">Tên</label>
                                        <input required type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control" placeholder="First Name">
                                    </div>


                                    <div class="form-group">
                                        <label for="">Ngày sinh</label>
                                        <input required type="date" name="dob" id="dob" value="<?php echo $dob; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Số Điện Thoại</label>
                                        <input required type="number" name="mobile_number" id="mobile_number" value="<?php echo $mobile_number; ?>" class="form-control" placeholder="Số điện thoại">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ</label>
                                        <input required type="text" name="address" id="address" value="<?php echo $address; ?>" class="form-control" placeholder="Address">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kinh nghiệm</label>
                                        <select required name="experience" class="form-control" id="experience">
                                            <option value="<?php echo $experience; ?>"><?php echo $experience; ?></option>
                                            <option disabled>______________________________________________________</option>
                                            <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                                            <option value="Ít hơn 1 năm kinh nghiệm">Ít hơn 1 năm kinh nghiệm</option>
                                            <option value="Từ 1 đến 2 năm kinh nghiệm">Từ 1 đến 2 năm kinh nghiệm</option>
                                            <option value="Từ 2 đến 3 năm kinh nghiệm">Từ 2 đến 3 năm kinh nghiệm</option>
                                            <option value="Trên 3 năm kinh nghiệm">Trên 3 năm kinh nghiệm</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Giới thiệu</label>
                                        <textarea name="about" id="about" class="form-control" cols="30" rows="10"><?php echo $about; ?></textarea>
                                    </div>

                                    <input type="hidden" name="id" id="id" value=" <?php echo $_GET['edit']; ?>">

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-success" value="Update" name="submit" id="submit">
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
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $dob = $_POST['dob'];
        $mobile_number = $_POST['mobile_number'];
        $address = $_POST['address'];
        $experience = $_POST['experience'];
        $about = $_POST['about'];


        $query1 = mysqli_query($conn, "update jobseeker set email='$email',password='$password',dob='$dob',first_name='$first_name',
    last_name='$last_name',mobile_number='$mobile_number',address='$address',experience='$experience',about='$about'
        where id='$id'");

        if ($query1) {
            echo '<script>alert("Chỉnh sửa hoàn tất!");window.location.href="job_seeker.php";</script>';
        } else {
            echo "<script>alert('Error!!!') </script>";
        }
    }
    ?>