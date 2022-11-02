<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page Muvii</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form Admin</h2>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="login.php" method="POST">

            <div class="text-center">
              <img src="https://bintangjasatirta.com/login/avatar.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" name="uname" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST['submit'])) {
$user = $_POST['uname'];
$pwd = $_POST['pwd']; 
$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE uname = '$user' and pwd = '$pwd' ");
$row = mysqli_num_rows($query);

if($row == 1) {
  $_SESSION['loginsuccesfull'] = 1;
  echo "<script>alert('Login telah berhasil'); window.location.href='index.php';</script>";
}else{
  echo "<script>alert('Username atau password yang anda masukkan salah. Login Gagal !!!')</script>";
}
}
?>
