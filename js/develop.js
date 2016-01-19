$(document).ready(function(){
	$("#develop_form").submit(function(e){
		e.preventDefault();
		/* get map */
		var map = [];
		var inputs = $("#develop_table").find("input");
		for(var i=0; i<inputs.length; i++)
			map.push(inputs.eq(i).val());

		/* get answer */
		var ans = [];
		ans.push("Hello");
		ans.push("World");

		$.post( "modifyMap.php",{
				command: "add",
				map: map,
				answer: ans
			}, function(data, status){
				 $("#develop_success_alert").show(400);
			});
	});
});