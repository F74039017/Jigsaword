<!DOCTYPE html>

<?php
  session_start();
?>

<html lang="en">
<head>
  <title>Bookmark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="stylesheet.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="index.php">Bookmark</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a class="navbar-link" href="register.php">Register</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-link" href="index.php"><span class="glyphicon glyphicon-flag"></span> Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <div class="card card-container">
    <p id="success">Register Successfully!</p>
    <span id="reauth-email" class="reauth-email"></span>  

    <table>
      <tbody>
        <tr>
          <td><p id="hint"> Name</p></td>
          <td id="content-name">
            <p class="account account-name">
            <?php
              include "./config.inc.php";
 
              $register = $_SESSION['register_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
              $row = mysql_fetch_array($query);

              echo $row['name'];
            ?>
            </p>
          </td>
        </tr>
        <tr>
          <td><p id="hint"> Password</p></td>
          <td id="content-password">
            <p class="account account-password">
            <?php
              include "./config.inc.php";
              $register = $_SESSION['register_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
              $row = mysql_fetch_array($query);

              echo $row['password'];
            ?>
            </p>
          </td>
        </tr>
        <tr>
          <td><p id="hint"> Email</p></td>
          <td>
            <p class="account account-email">
            <?php
              include "./config.inc.php";
              $register = $_SESSION['register_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
              $row = mysql_fetch_array($query);

              echo $row['email'];
            ?>
            </p>
          </td>
        </tr>
        <tr>
          <td><p id="hint"> Register</p></td>
          <td>
            <p class="account">
            <?php
              include "./config.inc.php";

              $register = $_SESSION['register_user'];

              $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
              $row = mysql_fetch_array($query);

              echo $row['register'];
            ?>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <button name="submit" class="btn btn-lg btn-primary btn-block btn-register" id="submit" type="submit" onclick="signin()">Sign in</button>
    <script>
      function signin() {
        window.location = "index.php";
      }
    </script>
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