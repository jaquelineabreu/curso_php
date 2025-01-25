<?php

    $x = 10;

    $y =& $x;

    echo "Atribuição antes ref <br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "Atribuição antes ref <br>";

    $y = 15;
    echo "<br>";
    echo "Atribuição apos ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "Atribuição apos ref <br>";


    $y = 20;
    echo "<br>";
    echo "Atribuição apos ref2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "Atribuição apos ref2 <br>";
    echo "<br>";

    $nome = "Maria";

    $nome2 =& $nome;

    echo "Atribuição antes ref3 <br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "João";

    echo "<br>";
    echo "Atribuição depois ref3 <br>";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

