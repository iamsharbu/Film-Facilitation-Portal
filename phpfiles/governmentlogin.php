
<?php
  include_once 'gheader.php';
 ?>

    <section class="main-container">
      <div class="main-wrapper">
        <?php
          if(isset($_SESSION['g_id'])){
            header("Location:governmentloginapproval.php");
          }
          else {
            # code...
          }
         ?>

      </div>
    </section>

<?php
  include_once 'footer.php';
?>
<div class="gbg">

</div>
<div class=" gsn">
  SINGLE WINDOW CLEARANCE OF ALL STAKEHOLDERS DELHI
</div>
<div class="container obj">
  <h3 style="text-align:center;">Objectives</h3>
<ul>
  <li>To promote Delhi as a film shooting destination in the National and International
Market.</li>
<li>To boost the brand image of Delhi as well as add to the image value of the
Department as one of forward thinking and innovative.</li>
<li>To introduce a smooth system for granting permission to Film Producers for
instructions/ guidelines issued by various Departments of Delhi and Ministries of
Government of India.</li>
<li>To clearly set out the Do’s and Don’ts with regard to Shooting of films in order
to protect the environment damage to historical monuments and infrastructure
and ensure that security considerations are not compromised.
</li>
<li>To provide assistance to the film maker, which the Facilitation Cell regards as
needed, based on the applicants requests. </li>
</ul>
</div>
<hr>

<hr>
<div class="row-fluid">
  <div class="span12">
    <div class="span8">
    </div>
    <div class="span4">
      <p class="mainfoot">Film Facilitation Portal</p>
    </div>
  </div>
</div>
