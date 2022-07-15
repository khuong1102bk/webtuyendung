<?php
session_start();
include('connection/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Việc Làm 24h</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">ViecLam24h</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>


      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Trang Chủ</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Giới Thiệu</a></li>
          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Liên Hệ</a></li>
          <?php
          if (isset($_SESSION['email']) == true) { ?>
            <?php
            if (isset($_SESSION['jobseeker']) == true) {
              $query = mysqli_query($conn, "SELECT * FROM  jobseeker where email='{$_SESSION['email']}'");
            } else {
              $query = mysqli_query($conn, "SELECT * FROM  recruiter where email='{$_SESSION['email']}'");
            }
            while ($row = mysqli_fetch_array($query)) {
              $email = $row['email'];
              $first_name = $row['first_name'];
              $last_name = $row['last_name'];
              $file = $row['img'];
            }
            ?>
            <?php
            if (isset($_SESSION['jobseeker']) == true) { ?>
              <li class="nav-item"><a href="profile.php" class="nav-link"><?php echo $last_name ?> <?php echo $first_name ?></a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <img src="images/<?php echo $file ?>" onerror="this.src='images/user.png'" alt="" class="rounded-circle dropdown" type=button data-toggle="dropdown" width="52" height="52">
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"> <span>Welcome! <?php echo $first_name ?></span></li>
                    <li> <a class="dropdown-item" href="profile.php">Hồ Sơ Cá Nhân</a></li>
                    <li> <a class="dropdown-item" href="sign_out.php">Đăng Xuất</a></li>
                  </ul>
                </div>
              <?php
            } else { ?>
              <li class="nav-item"><a href="job_post.php" class="nav-link">Đăng Tin Tuyển Dụng</a>
              <li class="nav-item"><a href="company.php" class="nav-link"><?php echo $last_name ?> <?php echo $first_name ?></a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <img src="images/<?php echo $file ?>" onerror="this.src='images/user.png'" alt="" class="rounded-circle dropdown" type=button data-toggle="dropdown" width="52" height="52">
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"> <span>Welcome! <?php echo $first_name ?></span></li>
                    <li> <a class="dropdown-item" href="company.php">Thông Tin Công Ty</a></li>
                    <li> <a class="dropdown-item" href="job_applications.php">Quản Lý Đơn Ứng Tuyển</a></li>
                    <li> <a class="dropdown-item" href="sign_out.php">Đăng Xuất</a></li>
                  </ul>
                </div>
              <?php } ?>

              </li>
            <?php
          } else { ?>
              <li class="nav-item cta mr-md-2"><a href="signin.php" class="nav-link">Đăng Nhập</a></li>
            <?php
          }
            ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <div class="hero-wrap js-fullheight" style="background-image: url('images/bg1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay shadow"></div>
    <div class="container">