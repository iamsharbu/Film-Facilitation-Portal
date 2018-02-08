<?php

session_start();

if(isset($_POST['submit']))
{
  include 'dbh.inc.php';
  $mid=mysqli_real_escape_string($conn,$_POST['mid']);
  $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

  $passwordhash='$2y$10$qFKjKqlPKMwOzQFERUoGUunCXpBMuPaEAzRgnZk5V4vxf3zrJhiPe';
  $loginhash='$2y$10$OHoWIWZMAWph8n8IfcBv/eQS3uxMylMmlnMZKs06JzsIi1FTezbMy';

  if (password_verify($pwd, $passwordhash) && password_verify($mid,$loginhash))
  {
    $_SESSION['m_id']=$mid;
    header("Location: ../municipalauthority.php?login=success");
    exit();
  }
  else {
    header("Location: ../municipalauthority.php?login=invalid");
    exit();
  }

}
else{
  header("Location: ../municipalauthority.php?login=error");
  exit();
}
