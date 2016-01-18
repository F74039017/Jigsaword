<?php 
	session_start();
 ?>
<link rel="stylesheet" type="text/css" href="css/score.css">

<script type="text/javascript">
	$(document).ready(function(){
		$.get( "modifyScore.php",{
				command: "get"
			}, function(data, status){
				var ret = $.parseJSON(data);
				for(var i=0; i<ret.list.length; i++) {
					var type = "info";
					if(ret.list[i]['name']==ret.username) {
						type = "danger";
					} 
					$("#rank_list").append("<tr class='"+type+"'>	\
												<td>"+(i+1)+"</td> 	\
												<td>"+ret.list[i]['name']+"</td>	\
												<td>"+ret.list[i]['lscore']+"</td>	\
												<td>"+ret.list[i]['hscore']+"</td>	\
											</tr>");
				}
				
			});
	});
</script>

<div class="container">
	<h1>Rank</h1>
	<div id="score_container">
		<table class="table">
			<thead>
				<tr>
					<th class="col-md-1">Rank</th>
					<th class="col-md-2">Name</th>
					<th class="col-md-2">Last Score</th>
					<th class="col-md-2">Highest Score</th>
				</tr>
			</thead>
			<tbody id="rank_list">
				<!-- load by ajax -->
			</tbody>
		</table>
	</div>
</div>