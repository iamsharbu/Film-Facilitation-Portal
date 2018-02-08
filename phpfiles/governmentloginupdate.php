<?php
include 'includes\dbh.inc.php';
$subject = "Film Facilitation Portal - APPROVAL";
$headers = "From: FSFP@delhi.gov.in" . "\r\n" .
"CC: iamsharbu@gmail.com";


$userid=mysqli_real_escape_string($conn,$_POST['usrid']);
$getemail="SELECT email from dataforms WHERE userid='$userid'";
mysqli_select_db($conn,'dataforms');
$emailrow=mysqli_query($conn,$getemail);
$er=mysqli_fetch_assoc($emailrow);
$to=$er['email'];

$dataquery="SELECT * FROM dataforms WHERE userid='$userid'";
mysqli_select_db($conn,'dataforms');
$resultrow=mysqli_query($conn,$dataquery);
if (mysqli_num_rows($resultrow)<1)
{
  header('Refresh:2; url=governmentlogin.php');
  echo '<script type="text/javascript">
  window.alert("Not a valid user id!")
  </script>';
}
else{
$check="SELECT policedepartment,municipalauthority,status FROM dataforms WHERE userid='$userid'";
mysqli_select_db($conn,'dataforms');

$result=mysqli_query($conn,$check);
$row=mysqli_fetch_assoc($result);
if($row['status']=='approved' && $row['policedepartment']=='approved' && $row['municipalauthority']=='approved')
{
  header('Refresh:2; url=governmentlogin.php');
  echo '<script type="text/javascript">
  window.alert("Already approved!")
  </script>';
}
else {
  if($row['policedepartment']=='approved' && $row['municipalauthority']=='approved'){

  $query="UPDATE dataforms SET status='approved' WHERE userid='$userid'";
  if(!mysqli_query($conn,$query))
  {
    header('Refresh:2; url=governmentlogin.php');
    echo '<script type="text/javascript">
    window.alert("not approved!")
    </script>';
  }
  else {
    header('Refresh:2; url=governmentlogin.php');
    include 'updatelicensedatabase.php';
  
    $txt = "Your license no:'$licenseno'. Thank you for utilizing Single Window Clearance of Film Facilitation Portal. Your application has been shortlisted by the stake holders and government body, our officials will contact you within 24 hours for verification. For any further queries contact fsdf@delhi.gov.in.";

    mail($to,$subject,$txt,$headers);
    echo '<script type="text/javascript">
    window.alert("Successfully approved!")
    </script>';
  }
}
else {
  # code...
  header('Refresh:2; url=governmentlogin.php');
  echo '<script type="text/javascript">
  window.alert("stake holders not approved!")
  </script>';
}

}
}




 ?>
