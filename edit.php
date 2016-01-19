<?php
    include "./config.inc.php";

    session_start();
    $user = $_SESSION['login_user'];
    $index = $_SESSION['edit'];

    $inputAlphabet[] = '';

    if (isset($_POST['update'])) {
        if (isset($_POST['inputAlphabet'][0])) {
            $inputWebname = $_POST['inputAlphabet'][0];
            $addeddate = date('Y-m-d H:i:s');

            $query = mysql_query("UPDATE bookmark SET inputAlphabet = '$inputWebname', added = '$addeddate' WHERE useremail = '$user' AND currIndex = '$index'");

            if ($query == true) {
                //go to customized page
                echo $inputWebname;
            } 
        }

        if (isset($_POST['website'][0])) {
            $inputWebsite = $_POST['website'][0];
            $addeddate = date('Y-m-d H:i:s');

            $query = mysql_query("UPDATE bookmark SET website = '$inputWebsite', added = '$addeddate' WHERE useremail = '$user' AND currIndex = '$index'");

            if ($query == true) {
                //go to customized page
                echo $inputWebsite;
            } 
        }

        header("location: favorite.php");
        mysql_close($link); // Closing Connection
    }
?>