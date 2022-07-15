<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Vieclam24h | Nhà Tuyển Dụng</title>
    <?php
    include('include/header.php');
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
                        <a href="recruiter.php" class="nav-link active">
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
                        <h1>Quản lý nhà tuyển dụng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="recruiter.php">Quản lý nhà tuyển dụng</a></li>
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
                                <h3 class="card-title">Thêm nhà tuyển dụng</h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="POST" style="margin-left: 20%; margin-right: 20%;" name="customer_form" id="customer_form">
                                    <div class="form-group">
                                        <label for="Customer Email">Email</label>
                                        <input required type="email" name="email" id="email" class="form-control" placeholder="Nhập Email *">
                                    </div>

                                    <div class="form-group">
                                        <label for="Company">Doanh nghiệp</label>
                                        <input required type="text" name="company" id="company" class="form-control" placeholder="Nhập tên doanh nghiệp *">
                                    </div>

                                    <div class="form-group">
                                        <label for="Customer Password">Mật khẩu</label>
                                        <input required type="pass" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu *">
                                    </div>

                                    <div class="form-group">
                                        <label for="Last Name">Họ</label>
                                        <input required type="text" name="last_name" id="last_name" class="form-control" placeholder="Nhập họ *">
                                    </div>

                                    <div class="form-group">
                                        <label for="First Name">Tên</label>
                                        <input required type="text" name="first_name" id="first_name" class="form-control" placeholder="Nhập tên *">
                                    </div>

                                    <div class="form-group">
                                        <label for="=">Địa chỉ</label>
                                        <input required type="text" name="address" id="address" class="form-control" placeholder="Nhập địa chỉ *">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Số điện thoại</label>
                                        <input required type="text" maxlength="10" minlength="10" name="mobile_number" id="mobile_number" class="form-control" placeholder="Nhập số điện thoại *">
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
        $password = $_POST['password'];
        $company = $_POST['company'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $mobile_number = $_POST['mobile_number'];

        $query = mysqli_query($conn, "insert into recruiter(email,password,company,first_name,last_name,address,mobile_number)
  values('$email','$password','$company','$first_name','$last_name','$address','$mobile_number')");

        if ($query) {
            echo '<script>alert("Thêm Thành Công!");window.location.href="recruiter.php";</script>';
        } else {
            echo "<script>alert('Error!')</script>";
        }
    }
    ?>