<?php

session_start();

if(isset($_POST['submit']))
{
  include 'dbh.inc.php';
  $pid=mysqli_real_escape_string($conn,$_POST['pid']);
  $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

  $passwordhash='$2y$10$jJXEKt1eesSw6YAzC..kbeZz60Xxjjz3Em1NnV.nrF8JD9fWl5GiS';
  $loginhash='$2y$10$ae1x.8cJnxBz5KLs6lo/.OmpGRkQaNmewOX1CZWl6Bu3NUb6dw8kS';

  if (password_verify($pwd, $passwordhash) && password_verify($pid,$loginhash))
  {
    $_SESSION['p_id']=$pid;
    header("Location: ../policedepartment.php?login=success");
    exit();
  }
  else {
    header("Location: ../policedepartment.php?login=invalid");
    exit();
  }

}
else{
  header("Location: ../index.php?login=error");
  exit();
}
