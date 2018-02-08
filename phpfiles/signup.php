<?php
  include_once 'header.php';
 ?>

    <section class="main-container">
      <div class="main-wrapper container signup">
        <h2>Sign up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input type="text" class="form-control" name="first" placeholder="first name" value="">
          <input type="text" class="form-control" name="last" placeholder="last name" value="">
          <input type="email" class="form-control" name="email" placeholder="email" value="">
          <input type="text" class="form-control" name="uid" placeholder="username" value="">
          <input type="password" class="form-control" name="pwd" placeholder="password" value="">
          <button type="submit" class="form-control" name="submit">Sign up</button>
        </form>
      </div>
    </section>

<?php
  include_once 'footer.php';
?>
