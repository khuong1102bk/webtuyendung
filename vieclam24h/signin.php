<?php
session_start();
?> 

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Đăng Nhập | Vieclam24h</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        
        .inner {
            display: inline-block !important;
            margin: auto !important;
        }

        .bg {
            /* The image used */
            background-image: url("images/bg1.png");
            /* Full height */
            height: 100%;
            display: flex;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 40%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        body,
        html {
            height: 100%;
        }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="bg">


        <div class="container register inner">
            <div class="row">
                <div class="col-md-3 register-left">
                    <a href="index.php">
                        <img src="images/logo.png" alt="" />
                    </a>
                    <h3>Welcome</h3>
                    <p>Bạn chưa có tài khoản? Đăng ký thành viên mới!</p>
                    <form action="signup.php" method="POST">
                        <input type="submit" name="" value="Đăng Ký" /><br />
                    </form>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recruiter</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Người tìm việc đăng nhập</h3>

                            <form action="" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input required type="email" name="e1" class="form-control" placeholder="Nhập Email *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Mật khẩu</label>
                                            <input required type="password" name="p1" class="form-control" placeholder="Nhập mật khẩu *" value="" />
                                        </div>
                                        <input type="submit" name="signin1" class="btnRegister" value="Đăng Nhập" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Nhà tuyển dụng đăng nhập</h3>
                            <form action="" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input required type="email" name="e2" class="form-control" placeholder="Nhập Email *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Mật khẩu</label>
                                            <input required type="password" name="p2" class="form-control" placeholder="Nhập mật khẩu *" value="" />
                                        </div>
                                        <input type="submit" name="signin2" class="btnRegister" value="Đăng Nhập" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type='text/javascript'></script>


    </div>
</body>

</html>

<?php
include('connection/db.php');

if (isset($_POST['signin1'])) {
    $email = $_POST['e1'];
    $password = $_POST['p1'];

    $query = mysqli_query($conn, "select * from jobseeker where email='$email' and password='$password'");
    while ($row = mysqli_fetch_array($query)) {
        $_SESSION['email'] = $row['email'];
    }
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['jobseeker'] = true;
            echo '<script>alert("Đăng nhập thành công!");window.location.href="index.php";</script>';
        } else {
            echo "<script> alert ('Email hoặc mật khẩu không chính xác. Vui lòng thử lại!') </script>";
        }
    }
}

if (isset($_POST['signin2'])) {
    $email = $_POST['e2'];
    $password = $_POST['p2'];

    $query2 = mysqli_query($conn, "select * from recruiter where email='$email' and password='$password'");
    while ($row = mysqli_fetch_array($query2)) {
        $_SESSION['email'] = $row['email'];
    }
    if ($query2) {
        if (mysqli_num_rows($query2) > 0) {
            $_SESSION['recruiter'] = true;

            echo '<script>alert("Đăng nhập thành công!");window.location.href="index.php";</script>';
        } else {
            echo "<script> alert ('Email hoặc mật khẩu không chính xác. Vui lòng thử lại!') </script>";
        }
    }
}

?>