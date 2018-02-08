
<?php

   include 'includes\dbh.inc.php';
   session_start();

   $firstname=mysqli_real_escape_string($conn,$_POST["first"]);
   $lastname=mysqli_real_escape_string($conn,$_POST["last"]);
   $userid=mysqli_real_escape_string($conn,$_POST["userid"]);
   $email=mysqli_real_escape_string($conn,$_POST["email"]);
   $filmname=mysqli_real_escape_string($conn,$_POST["filmname"]);
   $filmdescription=mysqli_real_escape_string($conn,$_POST["filmdescription"]);
   $filmbudget=mysqli_real_escape_string($conn,$_POST["filmbudget"]);
   $equipments=mysqli_real_escape_string($conn,$_POST["equipments"]);
   $crewmembersno=mysqli_real_escape_string($conn,$_POST["crewmembers"]);
   $startdate=$_SESSION['start'];
   $enddate=$_SESSION['end'];
   $location=$_SESSION['location'];
   $empty="";
  if(!$conn)
  {
    echo "not connected";
  }
  if(!mysqli_select_db($conn,'loginsystem'))
  {
    echo "not connected db";
  }

$dbquery="INSERT INTO dataforms (firstname,lastname,userid,email,filmname,filmdescription,filmbudget,equipmentsinvolved,noofcrewmembers,location,startdate,enddate) VALUES ('$firstname','$lastname','$userid','$email','$filmname','$filmdescription',$filmbudget,'$equipments',$crewmembersno,'$location','$startdate','$enddate');";
if(mysqli_query($conn,$dbquery))
{
  header('Refresh:2; url=index.php');
  echo '<script type="text/javascript">
  window.alert("Successfully inserted into database!")
  </script>';

}
else {
  header('Refresh:2; url=index.php');
  echo '<script type="text/javascript">
  window.alert("not inserted into database!")
  </script>';

}



 ?>
