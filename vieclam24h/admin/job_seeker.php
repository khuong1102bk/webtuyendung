<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Vieclam24h | Người Tìm Việc</title>
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
                    <a href="#" class="d-block">Admin</a>
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quản lý người tìm việc</li>
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
                                <h3 class="card-title">Danh sách người tìm việc</h3>
                                <a class="btn btn-primary float-right" href="job_seeker_add.php">Thêm mới</a>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Email</th>
                                            <th>Họ và Tên</th>
                                            <th>Ngày sinh</th>
                                            <th>Địa chỉ</th>
                                            <th>Số điện thoại</th>
                                            <th>Kinh nghiệm</th>
                                            <th>Giới thiệu</th>
                                            <th>Hành động</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('connection/db.php');

                                        $query = mysqli_query($conn, "select * from jobseeker");
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>

                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['last_name']; ?> <?php echo $row['first_name']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['mobile_number']; ?></td>
                                                <td><?php echo $row['experience']; ?></td>
                                                <td><?php echo $row['about']; ?></td>

                                                <td>
                                                    <div class="row">
                                                        <div class="btn-group">
                                                            <a href="job_seeker_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                            <a onclick="return confirm('Xóa hàng này?')" href="job_seeker_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                        </div>
                                                    </div>

                                                </td>


                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>
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