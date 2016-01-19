	<?php
	  include('changpassword.php'); 
	?>

	<link href="css/block.css" rel="stylesheet">
	<link href="css/register.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <header>
    	<div class="container card-container">
            <div class="row">
                <div class="col-lg-12">
                    <p id="title">Account information</p>
                    <hr class="star-light">
                    <br>
                    <form class="form-signin" action="changepassword.php" method="post">
                    <span id="reauth-email" class="reauth-email"></span>  
                    <table class="account-table">
                    <tbody class="account-table-body">

                      <tr>
                        <td><p id="hint"> Name</p></td>
                        <td class="content">
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
                        <td><p id="hint"> Email</p></td>
                        <td class="content">
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
                        <td class="content">
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

                      <tr>
                        <td><p id="hint"> Best</p></td>
                        <td class="content">
                          <p class="account">
                          <?php
                            include "./config.inc.php";

                            $register = $_SESSION['register_user'];

                            $query = mysql_query("SELECT * FROM user WHERE email = '$register'", $link);
                            $row = mysql_fetch_array($query);

                            echo $row['best'];
                          ?>
                          </p>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <br>
                  <button name="submit" class="btn-outline btn-lg btn-change" id="submit" type="submit">Change password</button>
                </form>
                </div>
            </div>
        </div>
    </header>