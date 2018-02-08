
<?php
  include_once 'mheader.php';
 ?>
<?php
include_once "includes\dbh.inc.php";
mysqli_select_db($conn,"loginsystem");
$query = "SELECT * FROM dataforms";
$result = mysqli_query($conn,$query);
if(isset($_SESSION['m_id'])){
  ?>
  <head>
    <style>
    td {

    /* css-3 */
    overflow: hidden;
  max-width: 400px;
  word-wrap: break-word;

  }
  table {
    table-layout: fixed;
    width: 100%
  }
     </style>
  </head>
   <div class="container-fluid">
     <h2 style="text-align:center;">Film Approval Applications - MUNICIPAL</h2>
     <p style="text-align:center;">The following applications are shortlisted based on legit information</p>
     <table class="table table-hover">

       <thead>
         <tr>
           <th>Firstname</th>
           <th>Lastname</th>
           <th>User Id</th>
           <th>Email Id</th>
           <th>Film Name</th>
           <th>Film Description</th>
           <th>Film Budget</th>
           <th>Equipments Involved</th>
           <th>No Of Crew Members</th>
           <th>Location</th>
           <th>Start Date</th>
           <th>End Date</th>
           <th>Rating</th>
           <th>Police Department</th>
           <th>Municipal Authority</th>
           <th>Status</th>
           <th>Approve</th>
         </tr>
       </thead>




        <?php   while($row = mysqli_fetch_array($result))
          {?>

       <tbody>
         <tr>
           <td><?php    echo $row["firstname"]; ?></td>
           <td><?php    echo $row["lastname"]; ?></td>
           <td><?php    echo $row["userid"]; ?></td>
           <td><?php    echo $row["email"]; ?></td>
           <td><?php    echo $row["filmname"]; ?></td>
           <td><?php    echo $row["filmdescription"]; ?></td>
           <td><?php    echo $row["filmbudget"]; ?></td>
           <td><?php    echo $row["equipmentsinvolved"]; ?></td>
           <td><?php    echo $row["noofcrewmembers"]; ?></td>
           <td><?php    echo $row["location"]; ?></td>
           <td><?php    echo $row["startdate"]; ?></td>
           <td><?php    echo $row["enddate"]; ?></td>
           <td><?php    echo $row["rating"]; ?></td>
           <td><?php    echo $row["policedepartment"]; ?></td>
           <td><?php    echo $row["municipalauthority"]; ?></td>
           <td><?php    echo $row["status"]; ?></td>

           <td><form class="" action="municipalauthorityupdate.php" method="post">
             <div class="appbtn">
               <input type="text" name="usrid" style="padding-bottom:2px;" class="form-control" value="" placeholder="confirm userid">
               <button type="submit" style="width:72px;text-align:center;" class=" btn btn-info" name="button">approve</button>
             </div>

           </form></td>
         </tr>
       </tbody>
       <?php
     }
  ?>
     </table>
   </div>
   <footer style="padding-bottom:20px;text-align:center;font-size:10px;">Film Facilitation Portal</footer>

  <?php
  }
  else {
    header('Location: municipalauthority.php');
  }
  ?>

  <?php
    include_once 'footer.php';
   ?>
