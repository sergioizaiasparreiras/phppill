<?php

/**
 * Comparadores do PHP:
 * 
 *  Apesar da tipagem dinâmica do PHP, é possível 
 *  fazer uma comparação criteriosa usando comparadores
 *  idênticos e não idênticos
 * 
 */

$a = 5;
$b = 6;


// comparador igual (normal, apenas verifica se as variaveis são iguais): return false
if($a == $b){
    echo "eles são iguais";
}

// comparador idêntico (que compara a tipagem também): return false
if($a === $b){
    echo "eles sao identicos";
}

// diferenciador normal(apenas vai verificar se a variave é diferente uma da outra): return true
if($a != $b){
    echo "a diferente de b";
}

// diferenciador normal (faz a mesma coisa, mas com o diamante): return true
if($a <> $b){
    echo "a e diferente de b";
}

// diferenciador nao idêntico (vai verificar o tipo da variável também): return true
if($a !== $b){
    echo "a nao e identifico a b";
}





?>