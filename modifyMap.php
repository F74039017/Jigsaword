<?php
    include "./config.inc.php";

    session_start();
    $command = $_POST['command'];	// add and get

    if($command=="get") {
    	$id = $_POST['id'];
    	$maps;
    	$query = mysql_query("SELECT id, matrix FROM map");
        while($result = mysql_fetch_array($query)) {
	        $maps[] = $result['matrix'];
            $ids[] = $result['id'];
        }
        
        /* random return a map */
        $rand =rand(0, mysql_num_rows($query)-1);
        $ret = new StdClass();
        $ret->map = json_decode($maps[$rand]);

        /* get map answer */
        $id = $ids[$rand];
        $query = mysql_query("SELECT answer FROM map");
        $result = mysql_fetch_array($query);
        $ret->answer = json_decode($result['answer']);
        echo json_encode($ret);
    }
    else if($command=="add") {
	    $map = $_POST['map'];
        $answer = $_POST['answer'];
	    $en_map = json_encode($map);
        $en_answer = json_encode($answer);
	    mysql_query("INSERT INTO map(matrix, answer) VALUES ('$en_map', '$en_answer')", $link);
	    echo mysql_errno($link) . ": " . mysql_error($link). "\n";
    }
    else {
    	echo "No such commnad";
    }
?>