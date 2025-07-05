<?php


/** Operadores de comparação
 * 
 */


$a = 5;
$b = 3;
$c = 0;


if($a >= $b){
    echo "a é maior que b";
}

if($a <= $b){
    echo "a é menor que b";
}


/**
 *  Operação de comparação spaceship:
 *  esquerda == direita -> return 0
 *  esquerda > direita -> return 1
 *  esquerda < direita -> -1
 */

// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1

echo "\n";

$impar = 1;
$par = 2;


?>


