<?php

    echo true;
    echo "<br>";
    echo false;

    if (true){
        echo "É verdadeiro <br>";
    }

    if (5 > 2){
        echo "É verdadeiro! <br>";
    }

    $podeEntrar = true;

    if($podeEntrar){
        echo "o usuário pode entrar  <br>";
    }

    $a = true;

    if(is_bool($a)){
        echo  "É um booleano  <br>";
    }

    if(is_bool(5 > 2)){
        echo  "É um booleano compara <br>";
    }

    