<?php
    include "./config.inc.php";

    session_start();
    $command = $_POST['command'];	// update_pwd and get
    $email = $_SESSION['login_user'];

    if($command=="get") {
    	$query = mysql_query("SELECT `name`, `register` FROM `user` WHERE `name` = '$name'");
        $result = mysql_fetch_array($query);
        $ret = new StdClass();
        $ret->name = $result['name'];
        $ret->register = $result['register'];
        $ret->email = $email;
        echo json_encode($ret);
    }
    else if($command=="update_pwd") {
        $new_password = $_POST['new_password'];
        $password = $_POST['password'];
        $query = mysql_query("SELECT `password` FROM `user` WHERE `email` = '$email'");
        $result = mysql_fetch_array($query);
        if($password == $result['password']) {  // confirm password
            $query = mysql_query("UPDATE `user` SET `password` = '$new_password' WHERE `email`= '$email'");
            echo "true";
        }
        else {
            echo "false";   // password confirm failed
        }
    }
    else {
    	echo "No such commnad";
    }
?>