<!-- use matrix.css for temp -->
	<link href="css/block.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/block.css" rel="stylesheet">
	<link href="css/develop.css" rel="stylesheet">
	
	<script type="text/javascript">
	
	</script>

	<style type="text/css">
		/*not require*/
	 	#game_container {
	   		margin-top: 5vh;
	   		margin-left: 7vw;
	 	}

	 	.block {
	 		border: 1px solid black;
	 	}

	 	input {
	 		background-color: "blue";
	 	}
	</style>

	<header>
		<div class="container game-container">
			<div class="row">
        	<form class="edittable" action="edit.php" method="post">
        	<div class="game-title">
                <h1>New map</h1>
                <hr class="star-light">
            </div>

            <div class="game-table">
			    <div class="block1 block" id="s00">
			    	<h1 class="alphabet" id="alphabet00">A</h1>
			    	<script>
		              $(document).ready(function() {
		                  $("#alphabet00").click(function() {
		                    $("#alphabet00").remove();
		                    $("#s00").append('<input name="a00" type="text" id="a00" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block1 block" id="s01">
				  	<h1 class="alphabet" id="alphabet01">B</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet01").click(function() {
		                    $("#alphabet01").remove();
		                    $("#s01").append('<input name="a01" type="text" id="a01" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block1 block" id="s02">
				  	<h1 class="alphabet" id="alphabet02">C</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet02").click(function() {
		                    $("#alphabet02").remove();
		                    $("#s02").append('<input name="a02" type="text" id="a02" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block1 block" id="s03">
				  	<h1 class="alphabet" id="alphabet03">D</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet03").click(function() {
		                    $("#alphabet03").remove();
		                    $("#s03").append('<input name="a03" type="text" id="a03" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div><br>
				<div class="block2 block" id="s10">
				  	<h1 class="alphabet" id="alphabet10">E</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet10").click(function() {
		                    $("#alphabet10").remove();
		                    $("#s10").append('<input name="a10" type="text" id="a10" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block2 block" id="s11">
				  	<h1 class="alphabet" id="alphabet11">F</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet11").click(function() {
		                    $("#alphabet11").remove();
		                    $("#s11").append('<input name="a11" type="text" id="a11" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block2 block" id="s12">
				  	<h1 class="alphabet" id="alphabet12">G</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet12").click(function() {
		                    $("#alphabet12").remove();
		                    $("#s12").append('<input name="a12" type="text" id="a12" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block2 block" id="s13">
				  	<h1 class="alphabet" id="alphabet13">H</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet13").click(function() {
		                    $("#alphabet13").remove();
		                    $("#s13").append('<input name="a13" type="text" id="a13" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div><br>
				<div class="block3 block" id="s20">
				  	<h1 class="alphabet" id="alphabet20">I</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet20").click(function() {
		                    $("#alphabet20").remove();
		                    $("#s20").append('<input name="a20" type="text" id="a20" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block3 block" id="s21">
				  	<h1 class="alphabet" id="alphabet21">J</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet21").click(function() {
		                    $("#alphabet21").remove();
		                    $("#s21").append('<input name="a21" type="text" id="a21" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block3 block" id="s22">
				  	<h1 class="alphabet" id="alphabet22">K</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet22").click(function() {
		                    $("#alphabet22").remove();
		                    $("#s22").append('<input name="a22" type="text" id="a22" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block3 block" id="s23">
				  	<h1 class="alphabet" id="alphabe23">L</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet23").click(function() {
		                    $("#alphabet23").remove();
		                    $("#s23").append('<input name="a23" type="text" id="a23" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div><br>
				<div class="block4 block" id="s30">
				  	<h1 class="alphabet" id="alphabet30">M</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet30").click(function() {
		                    $("#alphabet30").remove();
		                    $("#s30").append('<input name="a30" type="text" id="a30" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block4 block" id="s31">
				  	<h1 class="alphabet" id="alphabet31">N</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet31").click(function() {
		                    $("#alphabet31").remove();
		                    $("#s31").append('<input name="a31" type="text" id="a31" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block4 block" id="s32">
				  	<h1 class="alphabet" id="alphabet32">O</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet32").click(function() {
		                    $("#alphabet32").remove();
		                    $("#s32").append('<input name="a32" type="text" id="a32" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div>
				<div class="block4 block" id="s33">
				  	<h1 class="alphabet" id="alphabet33">P</h1>
				  	<script>
		              $(document).ready(function() {
		                  $("#alphabet33").click(function() {
		                    $("#alphabet33").remove();
		                    $("#s33").append('<input name="a33" type="text" id="a33" class="form-control" required autofocus>');
		                  });
		              });
		            </script>
				</div><br><br>
			</div>

			 <button name="update" class="btn-outline btn-lg" id="submit" type="submit">Send</button>
			</form>
			</div>
		</div>
    </header>