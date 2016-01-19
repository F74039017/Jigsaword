<link rel="stylesheet" href="css/wordbank.css">

<!-- Header -->
<header>
    <div class="container word-container">
        <div class="row">
            <div class="word-title">
                <h1>Your word power!</h1>
                <hr class="star-light">
            </div>
            <br>
            <table class="table table-hover">
			    <thead>
			    	<tr>
				      	<th>Word</th>
				      	<th>Speech</th>
				        <th>Chinese</th>
				        <th>Added time</th>
				        <th>Action</th>
			      	</tr>
			    </thead>

			    <tbody>
			    	<tr class="wordrow" id="r1">
			    		<td class="word">Name</td>
			    		<td class="speech">Noun (n.)</td>
			    		<td class="chinese">Name</td>
			    		<td class="addedtime">2019/01/19</td>
			    		<td class="action">
			    			<button name='delete' id='btn-dele' type='submit' class='btn btn-danger' value='".$row['currIndex']."'>Delete</button>
			    		</td>
			    	</tr>
			    	<tr class="wordrow" id="r2">
			    		<td class="word">Bus</td>
			    		<td class="speech">Noun (n.)</td>
			    		<td class="chinese">Bus</td>
			    		<td class="addedtime">2019/01/19</td>
			    		<td class="action">
			    			<button name='delete' id='btn-dele' type='submit' class='btn btn-danger' value='".$row['currIndex']."'>Delete</button>
			    		</td>
			    	</tr>
			    </tbody>
			</table>
        </div>
    </div>
</header>