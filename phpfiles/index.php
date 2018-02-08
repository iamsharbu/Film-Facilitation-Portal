<?php
  include_once 'header.php';
 ?>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
    <section class="">
      <div class="">
        <?php
          if(isset($_SESSION['u_id'])){
            include 'vacancy.php';
          }
          else {
            echo '<div class="indexbg">

            </div>
            <div class="marq">
              <p>Notice: Applications submitted through this portal are subjected to a filtering system, after shortlisting the authority will contact you within 3 days... </p>
            </div>
            <div class="container col-md-6 contact">
            <h3>Contact</h3>
            <p>Tourism Minister</p>
            <p>Government of Delhi</p>
            <p>Rashtri Bavan</p>
            <p>Delhi</p>
            <p>Email: fsfpdelhi@gov.in</p>
            </div>
            <div class="container col-md-6">
              <article class="art ">


              Delhi Tourism, a government undertaking facilitating tourism since 1975 will take you to a guided tour of the Delhi through this website which explores the wonders of this city be it its heritage, the art and crafts, the diverse cuisine and culture.



            A symbol of the country’s rich past and thriving present, Delhi is a city where ancient and modern blend seamlessly together. It is a place that not only touches your pulse but even fastens it to a frenetic speed. Home to millions of dreams, the city takes on unprecedented responsibilities of realizing dreams bringing people closer and inspiring their thoughts.
              </article>
            	<hr>

            </div>
            <div class="row-fluid">
              <div class="span12">
                <div class="span8">
                </div>
                <div class="span4">
                  <p class="mainfoot">© 2018 Film Shooting Portal. Mohamed Sharbudeen</p>
                </div>
              </div>
            </div>
';
          }
         ?>

      </div>
    </section>

<?php
  include_once 'footer.php';
?>
