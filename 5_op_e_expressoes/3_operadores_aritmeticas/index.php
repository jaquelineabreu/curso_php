<?php

    echo "Operadores aritméticos simples";
    echo "<br> ----------------------- <br>";
    $soma = 5 + 5;
    echo $soma . "<br>";

    $subtracao = 5 - 5;
    echo $subtracao . "<br>";

    $multi = 5 * 5;
    echo $multi . "<br>";

    $divisao = 5 / 5;
    echo $divisao . "<br>";

    $op = 5 + (2 / 7) * 8;
    echo $op . "<br>";
 
    echo "<br>";
    echo "operador de modulo";
    echo "<br> ----------------------- <br>";

    echo 12 % 2;
    echo " módulo <br>";

    echo 13 % 2;
    echo " módulo <br>";

    echo 12 / 2;
    echo " divisão <br>";



    echo "<br>";
    echo "operador de exponenciação";
    echo "<br> ----------------------- <br>";
    echo 5 ** 2;
    echo "<br>";
    echo 2 ** 10;
    echo "<br>";

    $a = 7;
    $b = 4;

    echo $a ** $b;
    echo "<br>";

    $c = 12;

    $d = $c ** $a;

    echo $d;
    echo "<br>";

    echo "<br>";
    echo "operador de concatenação";
    echo "<br> ----------------------- <br>";

    echo "testando" . " a " . "concatenação";
    echo "<br>";

    $t = "testando";
    $c = "concatenacao";

    echo "<br>";
    echo $t . " a " . $c;
    echo "<br>";
    echo "<br>";

    echo "operador de auto incremento e auto decremento";
    echo "<br> ----------------------- <br>";


    $x = 0;
    $y = 0;

    $x++;
    $y = $y + 1;

    echo "x: " . $x . "<br>";
    echo "y: " . $y . "<br>";

    $n = 10;
    $m = 10;

    $n--;
    $m = $m - 1;

    echo "n: " . $n . "<br>";
    echo "m: " . $m . "<br>";

    echo "<br>";
    echo "<br>";

    echo "operador de comparação";
    echo "<br> ----------------------- <br>";

    if (3 == 3){
        echo "comparação verdadeira 1<br>";
    }

    if (3 == 4){
        echo "comparação verdadeira 2<br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if ($a == $b){
        echo "comparação verdadeira 3<br>";
    }

    if ($a == $c){
        echo "comparação verdadeira 4<br>";
    }

    $nome = "Maria";
    $nomeDoSistema = "Maria";


    if ($nome == $nomeDoSistema){
        echo "o nome coincide <br>";
    }



