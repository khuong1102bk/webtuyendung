<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Admin Sign In</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Custom styles for this template -->
  <link href="css/admin_login.css" rel="stylesheet">

  <script src="js/admin_login.js"></script>

</head>

<body class="text-center">
  <form class="form-signin" id="admin_login" method="POST" action="admin_login.php" name="admin_login">

    <a href="http://localhost/vieclam24h/">
      <img class="mb-4" src="https://cdn1.vieclam24h.vn/upload/files_cua_nguoi_dung/logo/2019/12/31/4854219_vieclam24h_1577768446.png" alt="" width="100" height="100">
    </a>
    <h1 class="h3 mb-3 font-weight-normal">Admin Sign In</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>

    <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" value="Sign In">
    <p class="mt-5 mb-3 text-muted">&copy;2021 All rights reserved | Vieclam24h </p>
  </form>
</body>

</html>

<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $query = mysqli_query($conn, "select * from admin_users where admin_email='$email' and admin_pass='$pass'");
  while ($row = mysqli_fetch_array($query)) {
    $_SESSION['email'] = $row['admin_email'];
    $type = $row['admin_type'];
    if($type == 'Admin'){
      $_SESSION['isadmin'] = true;
    }elseif($type == 'Staff'){
      $_SESSION['isadmin'] = false;
    }

}

  if ($query) {

    if (mysqli_num_rows($query) > 0) {
      echo '<script>alert("Đăng nhập thành công!");window.location.href="dashboard.php";</script>';

    } else {
      echo "<script> alert ('Email hoặc mật khẩu không chính xác. Vui lòng thử lại!') </script>";
    }
  }
}
?>