<?php 
    for ($i = 0, $a = 0, $b = 1, $c = 0; $i < 10; $i++) {
        
        $a = $b + $c;

        echo $a . "|" . $i . "º" ."<br/>" ;

        $c = $b;

        $b = $a; 
    } 
    
?>