<?php
  include_once 'header.php';
  $start=$_POST['startdate'];
  $end=$_POST['enddate'];
  $location=$_POST['location'];
  $_SESSION['start']=$start;
  $_SESSION['end']=$end;
  $_SESSION['location']=$location;
 ?>

    <section class="main-container">
      <div class="main-wrapper">
<?php
        if(isset($_SESSION['u_id']))
        {
         echo '<div class="formfillup container">
           <h2 class="ffhead">Document Fill Up</h2>
           <form class="f" action="sendtodatabase.php" method="post">
             <label for="first">First Name:</label>
             <input class="form-control" type="text" name="first" ><br>
             <label for="last">Last Name:</label>
             <input class="form-control" type="text" name="last" ><br>
             <label for="userid">User Id:</label>
             <input class="form-control" type="text" name="userid" ><br>
             <label for="email">Email Id:</label>
             <input class="form-control" type="email" name="email" ><br>
             <label for="filmname">Film Name</label>
             <input class="form-control" type="text" name="filmname" ><br>
             <label for="filmdescription">Film Description:</label>
             <textarea class="form-control" maxlength="240" minlength="50" type="text" rows="5" name="filmdescription" placeholder="minimum 50 characters" ></textarea><br>
             <label for="filmbudget">Film Budget:</label>
             <input class="form-control" type="number" name="filmbudget" ><br>
             <label for="equipments">Equipments Involved:</label>
             <textarea class="form-control" maxlength="240" minlength="50" type="text" rows="5" name="equipments"  placeholder="minimum 50 characters"></textarea><br>
             <label for="crewmembers">Number of Crew Members:</label>
             <input class="form-control" type="number" name="crewmembers" ><br>

             <label for="exampleFormControlFile1">Attach valid Government ID</label>
             <input type="file" class="form-control-file" id="exampleFormControlFile1">

             <button type="submit" class="btn btn-success formsubmit"  name="button">submit</button><br>
           </form>
         </div>
         <div class="foot">
           <footer>Film Facilitation Portal Delhi by Mohamed Sharbudeen</footer>
         </div>';
       }
       ?>
      </div>
    </section>

<?php
  include_once 'footer.php';
?>
