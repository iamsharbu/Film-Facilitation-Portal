<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body style="background-color:white;">
<div style="height: 300px;
background-image: url('pubg.jpg');
margin-left: 200px;
background-repeat: no-repeat;
 background-size: 75%;">

</div>

<div class="container pvalid" >

  <div class="container pvalid" style="position:fixed;
      top: 50%;
      left: 50%;
      width:30em;
      height:18em;
      margin-top: -50px; /*set to a negative number 1/2 of your height*/
      margin-left: -15em; /*set to a negative number 1/2 of your width*/
      border: 1px solid #ccc;
      background-color: #f3f3f3;
      text-align:center;
      padding-top:70px;">

  <form class="form" action="validitycheck.php" method="post">
    <p style="padding:10px 10px;font-size:25px;">Check your validity</p>
    <label for="license"  style="padding:10px 10px;">FSFP license number:</label>
  <input  style="padding:10px 10px;margin-bottom:10px;" class="form-control form-control-lg" name="licenseno" type="text" placeholder="license no.">
  <button  class="btn btn-primary" name="submit" type="submit">Submit</button>

  </form>
  </div>
</div>
</body>
