<?php
  include('login.php');
  if($_SESSION['login_user']!="wrong"){ // check login error
    $_SESSION['login_user'] = "";
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bookmark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Bookmark</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-link" href="register.php"><span class="glyphicon glyphicon-flag"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="card card-container">
      <p id="subtitle">Sign in with your Bookmark</p>
      <img id="profile-img" class="profile-img-card"/>
      <p id="profile-name" class="profile-name-card"></p>

      <form class="form-signin" action="login.php" method="post">
        <span id="reauth-email" class="reauth-email"></span>
        
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <div id="remember" class="checkbox">
          <label>
            <input mame="remember-me" type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <?php
          if ($_SESSION['login_user'] == 'wrong') 
            echo "<p id='wrong'>Wrong email or password!</p>";
          else
            echo "";
          $_SESSION['login_user'] = '';
        ?>

        <button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" id="submit" type="submit">Sign in</button>
      </form><!-- /form -->
      <a href="#" class="forgot-password">Forgot the password?</a>
    </div><!-- /card-container -->
  </div><!-- /container -->

<footer class="container-fluid text-center">
    <div class='footer-copyright'>
    <strong>Copyright &copy; David Lu</strong>
    <br>
    2015 National Chung Kung University Computer Science and Information Egineering.
    <div class='footer-background'>WEB APPLICATION AND PROGRAMMING</div>
  </div>
</footer>

</body>
</html>
