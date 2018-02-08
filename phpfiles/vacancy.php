<?php
  include_once 'header.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>

   <title>Vacancy</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

</head>


 <body style="background-color:#f6fbfc;">
   <p class="h2 heading">Welcome to Film Shooting Facilitation Portal</p>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">

     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
       <li data-target="#myCarousel" data-slide-to="4"></li>
     </ol>

     <div class="carousel-inner">
       <div class="item active">
         <img src="1473344552_Imperial-Rajasthan.jpg.jpg"  alt="">
         <div class="carousel-caption">
           <h3>Imperial Rajasthan</h3>
           <p>It's a great place to start your journey around India whether you wish to travel to South or North India. Imperial Journey is your young, energetic and dynamic travel partner based From New Delhi, India. Come to India with us and see your dream coming true with our unmatchable efforts and expertise..</p>
         </div>
       </div>

       <div class="item">
         <img src="img4.jpg" alt="">
         <div class="carousel-caption">
           <h3>Bikaner</h3>
           <p>Bikaner has been a favourite for vacationers from all over the world. They come here to see the local markets, rich heritage, cultural sites, Thar deserts and to experience the civilization that has remains since Harappan era.</p>
         </div>
       </div>

       <div class="item">
         <img src="View_of_Taj_Mahal_from_the_South_(from_the_platform_of_the_Great_Gate).jpg.webp" alt="">
         <div class="carousel-caption">
           <h3>Taj Mahal</h3>
           <p>The central government has decided to shift Taj Mahal to the national capital to celebrate 100 years of Delhi as the capital city of India. The master plan was approved in a cabinet meeting early this morning; the relocation work is slated to begin in February next year and is believed to conclude by the next birthday of Delhi</p>
         </div>
       </div>


     <div class="item">
       <img src="Delhi-by_Dennis_Jarvis-Flickr.jpg.webp" alt="">
       <div class="carousel-caption">
         <h3>Jarvis Flick's Delhi</h3>
         <p>Delhi, the capital of India is one of the perfect cities to enjoy the best of Indian culture. It is a city filled with must see landmarks, attractions and numerous other best places to visit in Delhi. It is a clean, neat and tidy city with wide roads. However, the beauty of the city often gets hidden behind the awful traffic jams and exhausting climate, especially during the summer season.</p>
       </div>
     </div>


   <div class="item">
     <img src="Akbari_Sarai.jpg.jpg" alt="">
     <div class="carousel-caption">
       <h3>Akbari Sarai</h3>
       <p>This is part of many good works done by Shershah Soor. He constructed a series of such sarais at every 5km all along route from Deccan to Delhi.
Ch. Shivaji Maharaj might have been here during his journey to Agra.</p>
     </div>
   </div>
 </div>
</div>

     <a class="left carousel-control carousell" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control carouselr" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>

   <div class="col-md-6 col-sm-12 ">
     <form class="form " action="formfillup.php" method="post">
       <h3 class="calendarheading">Choose your location</h3>
       <label for="sel1">Select Location:</label>
    <select class="form-control" name="location">
      <option></option>
      <option>Imperial Rajasthan</option>
      <option>Bikaner</option>
      <option>Taj Mahal</option>
      <option>Jarvis Flick</option>
      <option>Akbari Sarai</option>
    </select>

  <label for="daterange">Pick your Slot:</label>
  <input class="form-control" type="text" name="daterange" value="">
  <label for="pname">Production Name:</label>
  <input class="form-control" type="text" name="pname" value="">
  <label for="pname">Start Date: </label>
  <input class="form-control" type="text" name="startdate" placeholder="YYYY-MM-DD" value="">
  <label for="pname">End Date: </label>
  <input class="form-control" type="text" name="enddate" placeholder="YYYY-MM-DD"  value="">
  <input type="submit" class="wrapper btn btn-primary spotsubmit" name="submit" value="Book Spot">

  </form>

   </div>

   <div class="col-md-6 col-sm-12 ">
     <div class="col-md-4 cal ">
       <script class="" style="float:right;text-align:center;" type="text/javascript" src="//www.availabilitycalendar.com/embed-js/IPYIaze8ghi6_3roYsWp7pbmqK-USFrHfrOISOmgPic/en-0-2-1-1-0-0-0-0-0-0-d57db3b1108dc138578e626eb3b59cba-1-0/"></script>

     </div>
     <div class="col-md-8  video">
       <iframe width="500" height="380" src="https://www.youtube.com/embed/oBw51j-JouM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     </div>
   </div>





 </body>
 </html>

    <?php
      include_once 'footer.php';
    ?>

    <script type="text/javascript">
      $('input[name="daterange"]').daterangepicker();
    </script>
