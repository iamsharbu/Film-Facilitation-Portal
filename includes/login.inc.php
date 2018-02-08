<?php

session_start();

if(isset($_POST['submit']))
{
  include 'dbh.inc.php';
  $uid=mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);



  if(empty($uid) || empty($pwd))
  {
    header("Location: ../index.php?login=empty");
    exit();
  }
  else {
    $sql="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck<1){
    header("Location: ../index.php?login=notregisterederror");
    exit();
    }
    else {
      if($row=mysqli_fetch_assoc($result)){
      $hashedpwdcheck=password_verify($pwd,$row['user_pwd']);
      if($hashedpwdcheck==false){
        header("Location: ../index.php?login=error");
        exit();
      }
      else if($hashedpwdcheck==true) {
        $_SESSION['u_id']=$row['user_id'];
        $_SESSION['u_first']=$row['user_first'];
        $_SESSION['u_last']=$row['user_last'];
        $_SESSION['u_email']=$row['user_email'];
        $_SESSION['u_uid']=$row['user_uid'];
        header("Location: ../index.php?login=success");
        exit();
      }
    }
   }
  }
}
else{
  header("Location: ../index.php?login=error");
  exit();
}
