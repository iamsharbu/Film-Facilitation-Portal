<?php

session_start();

if(isset($_POST['submit']))
{
  include 'dbh.inc.php';
  $gid=mysqli_real_escape_string($conn,$_POST['gid']);
  $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

  $passwordhash='$2y$10$V6BEHAFIVwsdn8/70kQnIuR.wjoexkFPOUgAqACXhinJmfX2yO1zS';
  $loginhash='$2y$10$Fynn.FRzplBbT/S2FhTaiuNBEwKDpm/vRiwK7ttC/9z1jCt1tkpgK';

  if (password_verify($pwd, $passwordhash) && password_verify($gid,$loginhash))
  {
    $_SESSION['g_id']=$gid;
    header("Location: ../governmentlogin.php?login=success");
    exit();
  }
  else {
    header("Location: ../governmentlogin.php?login=invalid");
    exit();
  }

}
else{
  header("Location: ../governmentlogin.php?login=error");
  exit();
}
