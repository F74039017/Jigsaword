<?php
    include "./config.inc.php";

    session_start();
    $command = $_POST['command'];	// add and get

    $email = $_SESSION['login_user'];
    $query = mysql_query("SELECT name FROM user WHERE email = '$email'", $link);
    $username = mysql_fetch_array($query);    // get user name
    $username = $username['name'];

    if($command=="get") {
    	$query = mysql_query("SELECT wordlist FROM wordbank WHERE username='$username'");
        echo mysql_fetch_array($query)['wordlist'];
    }
    else if($command=="add") {
    	$words = $_POST['words']; // new words need to be added
    	$query = mysql_query("SELECT wordlist FROM wordbank WHERE username='$username'");
    	if(mysql_num_rows($query)==0) {	// insert directly if user no bank
    		$en_words = json_encode($words);
    		mysql_query("INSERT INTO wordbank(username, wordlist) VALUES ('$username', '$en_words')", $link);
    	}
    	else {	// concat and unique if user had bank
    		$en_old = mysql_fetch_array($query)['wordlist'];
    		$old = json_decode($en_old);
    		$merge = array_merge($old, $words);
    		$uni_list = array_unique($merge);
    		$en_merge = json_encode($uni_list);
    		mysql_query("UPDATE `wordbank` SET `wordlist`= '$en_merge' WHERE username='$username'", $link);
    	}
    }
    else if($command=="delete") {
        $word = $_POST['word'];
        $query = mysql_query("SELECT wordlist FROM wordbank WHERE username='$username'");
        $words = mysql_fetch_array($query)['wordlist'];
        $words = json_decode($words);
        $key = array_search($word, $words);
        array_splice($words, $key, 1);
        $words = json_encode($words);
        mysql_query("UPDATE `wordbank` SET `wordlist`= '$words' WHERE username='$username'", $link);
    }
    else {
    	echo "No such commnad";
    }
?>