<?php
session_start();
include_once('crud/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/framework/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/signin.css">
  <title>Login</title>
</head>

<body class="text-center">
  <main class="form-signin">
    <form method="post">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password">
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-4" type="submit" name="submit">Sign in</button>
    </form>
  </main>
  <?php
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password= '$password'");
    $cek = mysqli_num_rows($query);

    if($cek == 1){
      $_SESSION['email'] = $email;
      header("location:crud/readUsers.php");
    }else{
      echo "<script>alert('Email atau Password Salah')</script>";
    }
  }

?>

</body>


</html>