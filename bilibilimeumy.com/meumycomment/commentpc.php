<?php
    date_default_timezone_set("Asia/Shanghai");
    $title = $_POST["channel0Title"]; //You have to get the form data
    $gain = $_POST["channel0Gain"];
    $subtime=date("Y-m-d H:i:s");
    $file = fopen('./comment.html', 'a'); //Open your .txt file
    //ftruncate($file, 0); //Clear the file to 0bit
    $content = "User_Name ". $title. PHP_EOL. " Comment  ". $gain. PHP_EOL. "  Time.   ". $subtime. "(UTC+8)". PHP_EOL. "---------". PHP_EOL;
    fwrite($file , $content); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: /meumy2022pc.html#comment"));
?>