<?php
  include('login.php');
  if($_SESSION['login_user']!="wrong"){ // check login error
    $_SESSION['login_user'] = "";
  }
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Jigsawords</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">JIGSAWORDS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-page page-scroll">
                        <a href="#rule">Rule</a>
                    </li>

                    <li class="navbar-page page-scroll">
                        <a href="#register">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="main">
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Word is power!</span>
                        <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                            <a href="#signin" class="btn btn-lg btn-outline">
                                <i class="fa"></i>SIGN IN
                            </a>
                        </div>
                        <hr class="star-light">
                        <span class="skills">Find out more and more words as you can!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!-- Sign in Section -->
    <section class="signin" id="signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sign in</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" action="login.php" method="post">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input name="email" type="text" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <br>
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="form-group col-xs-12">
                                <input name="submit" type="submit" class="btn btn-inline btn-lg" id="submit" value="Sign in">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Rule Section -->
    <section class="rule" id="rule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>GAME RULE</p>
                </div>
                <div class="col-lg-4">
                    <p>GAME RULE</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Section -->
    <section class="register" id="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Register</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" method="post">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" placeholder="Confirm password" id="password" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="register"></div>
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-inline btn-send btn-lg">Send</button>
                                <button type="reset" class="btn btn-inline btn-lg">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">Copyright &copy; 2014</div>
                    <div class="col-lg-13">2015 National Cheng Kung University Computer Science and Information Engineering.</div>
                </div>
                <div class="back">
                    <div class="col-lg-14">WEB APPLICATION AND PROGRAMMING</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
</html>
