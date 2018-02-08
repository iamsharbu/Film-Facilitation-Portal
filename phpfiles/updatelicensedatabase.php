<?php

    include_once 'includes\dbh.inc.php';
    mysqli_select_db($conn,'loginsystem');
    $dataformsquery="SELECT * from dataforms where userid='$userid'";
    $result=mysqli_query($conn,$dataformsquery);
    $rows=mysqli_fetch_assoc($result);
    $firstname=$rows['firstname'];
    $lastname=$rows['lastname'];
    $userid=$rows['userid'];
    $filmname=$rows['filmname'];
    $startdate=$rows['startdate'];
    $enddate=$rows['enddate'];
    $licenseno=mt_rand();

    $dbquery="INSERT INTO licensedata (fname,lname,userid,productionname,bookdate,validtill,licenseno) VALUES ('$firstname','$lastname','$userid','$filmname','$startdate','$enddate',$licenseno)";
    if(!mysqli_query($conn,$dbquery))
    {
      echo("Error description: " . mysqli_error($conn));
      exit();
    }
    else {

      echo '<script type="text/javascript">
      window.alert("Successful!")
      </script>';
    }



 ?>
