<?php
   
    date_default_timezone_set('Europe/Bratislava'); 
    readfile("subor.html");

    //echo "ahoj <br>";

   
    $time =  date("Y-m-d H:i:s") . "+"; 
    $h = date("H");


    file_put_contents("subor.txt",$time, FILE_APPEND);


    $e = explode("+", file_get_contents("subor.txt"));


    foreach($e as $e){
        echo $e . "<br>";
    };


    if($h > 20){
        if($h <24) {
            echo "NEMOZNE";
            die;
        }
    };
    if($h >= 8) {
        echo "<br>";
        echo "NESKORO!!!!!!!";
    } else {
        echo "<br>";
        echo "SUPER, STIHOL SI!!!!";
    };
?>