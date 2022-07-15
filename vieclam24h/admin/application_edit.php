<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Vieclam24h | Đơn Ứng Tuyển</title>
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
                        <a href="application.php" class="nav-link active">
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
                        <h1>Quản lý đơn ứng tuyển</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="application.php">Quản lý đơn ứng tuyển</a></li>
                            <li class="breadcrumb-item active">Thông tin</li>
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

                                        <div class="form-group">
                                            <label for="Job_Title">Tên công việc</label>
                                            <input readonly type="text" name="job_title" id="job_title" value="<?php echo $row['job_title']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Job_Title">Doanh nghiệp</label>
                                            <input readonly type="text" name="company" id="company" value="<?php echo $row['company']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Job Sekker">Người nộp đơn</label>
                                            <input readonly type="text" name="name" id="name" value="<?php echo $row['last_name']; ?> <?php echo $row['first_name']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="dob">Ngày sinh</label>
                                            <input readonly type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="Job Seeker email">Email</label>
                                            <input readonly type="email" name="email" id="email" value="<?php echo $row['job_seeker']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="Job Seeker Mobile Number">Số điện thoại</label>
                                            <input readonly type="number" name="mobile_number" id="mobile_number" value="<?php echo $row['mobile_number']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="Job Seeker Experience">Kinh nghiệm</label>
                                            <input readonly type="text" name="job_exp" id="job_exp" value="<?php echo $row['job_exp']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group ">
                                            <label for="Job Seeker email">Hồ sơ đính kèm - CV</label>
                                            <br>
                                            <a class="btn btn-info" target="_blank" href="http://localhost/vieclam24h/files/<?php echo $row['file']; ?> ">Xem thông tin CV</a>
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
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include('include/footer.php');
    ?>

    <?php
    if (isset($_POST['accept'])) {
        $accept = mysqli_query($conn, "update job_apply set status='Đã tuyển!' where id='$id'");
        if ($accept) {
            echo '<script>alert("Tuyển dụng thành công!");window.location.href="application.php";</script>';
        } else {
            echo "<script>alert('Error!!!') </script>";
        }
    }

    if (isset($_POST['reject'])) {
        $accept = mysqli_query($conn, "update job_apply set status='Không đạt!' where id='$id'");
        if ($accept) {
            echo '<script>alert("Đã từ chối!");window.location.href="application.php";</script>';
        } else {
            echo "<script>alert('Error!!!') </script>";
        }
    }

    ?>