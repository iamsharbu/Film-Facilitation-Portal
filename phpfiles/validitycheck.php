<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<?php
include 'includes\dbh.inc.php';
if (isset($_POST['submit'])) {
  # code...
  $licensenumber=mysqli_real_escape_string($conn,$_POST['licenseno']);
  $sqlquery="SELECT * from licensedata where licenseno='$licensenumber'";
  mysqli_select_db($conn,'loginsystem');
  $result=mysqli_query($conn,$sqlquery);
  if(mysqli_num_rows($result)>0)
  {
  $rows=mysqli_fetch_assoc($result);
  $fname=$rows['fname'];
  $lname=$rows['lname'];
  $userid=$rows['userid'];
  $productionname=$rows['productionname'];
  $bookdate=$rows['bookdate'];
  $validtill=$rows['validtill'];

  echo '<body style="background-color:white;">
    <div class="box check">

      <ul class="list-group">
    <li class="list-group-item active">Your License is approved!</li>
    <li class="list-group-item">First Name:   '.$fname.'</li>
    <li class="list-group-item">Last Name:    '.$lname.'</li>
    <li class="list-group-item">User Id:   '.$userid.'</li>
    <li class="list-group-item">Production Name:    '.$productionname.'</li>
    <li class="list-group-item">Book Date:    '.$bookdate.'</li>
    <li class="list-group-item">Expire Date:    '.$validtill.'</li>
  </ul>
    </div>
  </body>';
  }
  else {
    # code...
    echo '<body style="background-color:white;">
      <div class="box check">

        <ul class="list-group">
      <li class="list-group-item active">Your License is not approved! or Inavlid License</li>

    </ul>
      </div>
    </body>';
  }
}
  else {
    # code...
    header('Location:validity.php');
  }

 ?>
