<?php
    include "./config.inc.php";

    session_start();
    $command = $_GET['command'];	// add and get

    if($command=="get") {
    	$id = $_GET['id'];
    	$maps;
    	$query = mysql_query("SELECT matrix FROM map");
        while($result = mysql_fetch_array($query)) {
	        $maps[] = $result['matrix'];
        }
        
        /* random return a map */
        $rand =rand(0, mysql_num_rows($query)-1);
        echo $maps[$rand];
    }
    else if($command=="add") {
	    $map = $_GET['map'];
	    $en_map = json_encode($map);
	    mysql_query("INSERT INTO map(matrix) VALUES ('$en_map')", $link);
	    echo mysql_errno($link) . ": " . mysql_error($link). "\n";
    }
    else {
    	echo "No such commnad";
    }
?>