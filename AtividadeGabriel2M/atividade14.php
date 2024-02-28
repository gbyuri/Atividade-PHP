<?php  
   function adicao($a, $b) {
       return $a + $b;
       
   }
   function subtracao($a, $b) {
    return $a - $b;
   }
   function multiplicacao($a, $b) {
    return $a * $b;
       
   }
   function divisao($a, $b) {
    return $a / $b;
   }

   echo "Valor de A: 10 e valor de B: 5" . "<br/>";

   echo "Adição: " . adicao(10, 5) . "<br/>";

   echo "Subtração: " . subtracao(10, 5) . "<br/>";

   echo "Multiplicação: " . multiplicacao(10, 5) . "<br/>";

   echo "Divisão: " . divisao(10, 5) . "<br/>";

   ?>