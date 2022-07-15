<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Vieclam24h | Tin Tức</title>
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
                        <a href="news.php" class="nav-link active">
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
                        <h1>Quản lý tin tức</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="news.php">Quản lý tin tức</a></li>
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
                                <h3 class="card-title">Thêm tin tức mới</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="POST" style="margin-left: 20%; margin-right: 20%;" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="Category">Tiêu đề</label>
                                        <input required type="text" name="title" id="title" class="form-control" placeholder="Nhập tiêu đề *">
                                    </div>

                                    <div class="form-group">
                                        <label for="Category">Phụ đề</label>
                                        <input required type="text" name="sub_title" id="sub_title" class="form-control" placeholder="Nhập phụ đề *">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Ảnh bìa </label>
                                        <div class="form-group">
                                            <input required type="file" accept=".jpg,.png,.gif" name="file" id="file">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nội dung</label>
                                        <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
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

        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $content = $_POST['content'];
        $file = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['name'];

        move_uploaded_file($_FILES["file"]["tmp_name"], 'files/' . $file);

        $query = mysqli_query($conn, "insert into blog(title,sub_title,content,img)values('$title','$sub_title','$content','$file')");

        if ($query) {
            echo '<script>alert("Thêm Thành Công!");window.location.href="news.php";</script>';
        } else {
            echo "<script>alert('Error!')</script>";
        }
    }
    ?>