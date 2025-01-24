<?php

    class Pessoa{
        
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $pessoaInst = new Pessoa();

    $pessoaInst->nome = "Maria";

    echo $pessoaInst->nome;

    echo "<br>";

    $pessoaInst->falar();


?>