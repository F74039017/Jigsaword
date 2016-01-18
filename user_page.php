<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Bookmark: Profile</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/user_page.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/user_page.js"></script>
	</head>

	<body>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Bookmark Right Button -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#" id="title_link">Jigsaword</a>
		</div>

		<!-- Tabs Buttons -->
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active" id="game_tab"><a class="navbar-link tab_link" href="#">Game</a></li>
				<li class="passive" id="score_tab"><a class="navbar-link tab_link" href="#">Score</a></li>
				<li class="passive" id="develop_tab"><a class="navbar-link tab_link" href="#">Develop</a></li>
				<li class="passive" id="personal_tab"><a class="navbar-link tab_link" href="#">Personal</a></li>
			</ul>

			<!-- Right button -->
			<ul class="nav navbar-nav navbar-right">
				<li><a class="navbar-link" href="logout.php"><span class="glyphicon glyphicon-flag"></span> Sign out</a></li>
			</ul>
		</div>
		</div>
	</nav>

	<div class="container" id="main_container">
		<!-- load by AJAX -->
	</div><!-- /container -->

<!-- <footer class="container-fluid text-center">
		<div class='footer-copyright'>
		<strong>Copyright &copy; David Lu</strong>
		<br>
		2015 National Chung Kung University Computer Science and Information Egineering.
		<div class='footer-background'>WEB APPLICATION AND PROGRAMMING</div>
	</div>
</footer> -->

</body>

</html>