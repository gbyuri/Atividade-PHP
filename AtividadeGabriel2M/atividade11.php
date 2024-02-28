<?php
    function ePalindromo() {
        $palavra = "feijao";
        
        if ($palavra == strrev($palavra)) {
            echo $palavra . " é um palíndromo!";
            echo "<br/>";         
            echo "Aqui está o resultado: " . strrev($palavra);
        }
        else {
            echo $palavra . " não é um palíndromo!";
            echo "<br/>";         
            echo "Aqui está o resultado: " . strrev($palavra);
        }
      }
      ePalindromo();
?>