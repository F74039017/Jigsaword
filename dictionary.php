<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
    session_start();

    $word = $_GET['word'];
    $word = strtolower($word);
    $command = $_GET['command'];

    $query_prefix = 'http://tw.websaru.com/display.php?action=search&word=';
    $url = $query_prefix . $word;
    $body = file_get_contents($url);

    // Fetch data
    $doc = new DOMDocument();
    @$doc->loadHTML($body);
    $xpath = new DOMXpath($doc);

    if($command=="exist") {
        if(word_isExist($word, $xpath))
            echo "true";
        else
            echo "false";
    }
    else if($command=="mean") {
        echo word_mean($word, $xpath);
    }
    else {
        echo "No such command";
    }

    function word_mean($str, $xpath) {
        $raws = $xpath->query("//html/body/div/div/div/ul/li");
        $raw = $raws->item(2)->nodeValue;
        echo str_ireplace($str,"", $raw);
    }
        
    function word_isExist($str, $xpath) {   // If not exist...404 => didn't handle yet, but still work
        $words = $xpath->query("//html/body/div/div/div/ul/li/a");
        for($i=2; $i<$words->length; $i++) {
            if($words->item($i)->nodeValue == $str)
                return true;
        }
        return false;
    }
 ?>