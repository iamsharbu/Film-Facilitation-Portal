<?php
include 'includes\dbh.inc.php';

$userid=mysqli_real_escape_string($conn,$_POST['usrid']);
$dataquery="SELECT * FROM dataforms WHERE userid='$userid'";
mysqli_select_db($conn,'dataforms');
$resultrow=mysqli_query($conn,$dataquery);
if (mysqli_num_rows($resultrow)<1)
{
  header('Refresh:2; url=municipalauthority.php');
  echo '<script type="text/javascript">
  window.alert("Not a valid user id!")
  </script>';
}
else{
$check="SELECT municipalauthority FROM dataforms WHERE userid='$userid'";
mysqli_select_db($conn,'dataforms');

$result=mysqli_query($conn,$check);
$row=mysqli_fetch_assoc($result);
if($row['municipalauthority']=='approved')
{
  header('Refresh:2; url=municipalauthority.php');
  echo '<script type="text/javascript">
  window.alert("Already approved!")
  </script>';
}
else {


  $query="UPDATE dataforms SET municipalauthority='approved' WHERE userid='$userid'";
  if(!mysqli_query($conn,$query))
  {
    header('Refresh:2; url=municipalauthority.php');
    echo '<script type="text/javascript">
    window.alert("not approved!")
    </script>';
  }
  else {
    header('Refresh:2; url=municipalauthority.php');
    echo '<script type="text/javascript">
    window.alert("Successfully approved!")
    </script>';
  }

}
}

 ?>
