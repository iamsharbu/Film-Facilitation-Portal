<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse bg-inverse">
        <div class="main-wrapper">
          <ul>
            <li><a class="homebtn" href="policedepartment.php">Home</a> </li>
          </ul>
          <div class="nav-login">
            <?php
            if(isset($_SESSION['p_id']))
            {
            echo '<form class="" action="includes\plogout.inc.php" method="POST">
                          <button type="submit" class="btn btn-danger" name="submit">Logout</button>
                  </form>';
            }
            else {
              echo '<form class="" action="includes\plogin.inc.php" method="POST">
              <div class="uid input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></i></span>
              <input type="text" class="form-control" name="pid" placeholder="Police ID">
              </div>
              <div class="pwd input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="pwd" placeholder="Password">
              </div>
                      <button name="submit" class="login-btn btn btn-success" type="submit">Log in</button>
                    </form>
                    ';
            }
            ?>

          </div>
        </div>
      </nav>
    </header>
