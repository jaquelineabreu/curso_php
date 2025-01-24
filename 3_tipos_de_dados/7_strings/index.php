<?php

    echo "testando texto de aspas duplas <br>";
    echo 'testando texto de aspas simples <br>';
    echo "Ele disse 'Olá!' <br>";
    echo 'Ele disse "Olá!" <br>';

    $idade = 15;

    echo "Ele tem $idade anos <br>";

    $str = "Maria";
    $num = 12;

    if(is_string($str)){
        echo "$str é uma string <br>";
    }

    if(is_string($num)){
        echo "$num é uma string <br>";
    }

    if(is_string("asd")){
        echo "é uma string <br>";
    }