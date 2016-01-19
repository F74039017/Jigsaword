$(document).ready(function(){
	$.get( "modifyScore.php",{
			command: "gethscore"
		}, function(data, status){
			 var hscore = $.parseJSON(data);
			 $("#best_score").html(hscore);
		});

	$("#again_btn").click(function(){
		$("#main_container").load("gamestart.php", function(){
            $("#gamestart_container").hide().fadeIn(1000);
        });
	});

	$("#rank_btn").click(function(){
		$("#main_container").load("score.php");
	});
});